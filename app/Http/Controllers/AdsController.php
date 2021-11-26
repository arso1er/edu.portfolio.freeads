<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\Cat;
use Auth;
use DB;

class AdsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified'], ['except' => ['index', 'show']]);
    }

    // https://stackoverflow.com/a/29378062
    private function get_subcategories($parent_id, &$cat_ids) {
        // global $cat_ids;
        $categories = DB::select(DB::raw("
            SELECT id FROM cats WHERE parent_id = $parent_id
        "));
        // $sql = "SELECT id FROM cats WHERE parent_id = :parent_id";
        // $sth ->prepare($sql);
        // $sth->execute(array(':parent_id' => $parent_id));
        // $categories = $sth->fetchAll(PDO::FETCH_ASSOC);
    
        foreach($categories as $category) {
            $cat_ids[] = $category->id;
            $this->get_subcategories($category->id, $cat_ids);
        }   
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Get params
        $title = $request->query('title', '') ?? '';
        $min_price = $request->query('min_price', '0') ?? '0';
        $max_price = $request->query('max_price', '10000') ?? '10000';
        $sort = $request->query('sort', 'title asc') ?? 'title asc';
        $category = $request->query('category', '-1') ?? -1;

        $cat_id = $category;
        $cat_ids = array($cat_id);
        $this->get_subcategories($cat_id, $cat_ids);

        $cat_ids_sql = implode(',', $cat_ids);
        $cats_str = (int)$cat_ids[0] < 1 ? "" : "AND category_id IN ($cat_ids_sql)";

        // Count query
        $countStdClass = DB::select(DB::raw("
            SELECT COUNT(*) as total FROM ads
            WHERE title LIKE \"%$title%\"
            $cats_str
            AND price BETWEEN $min_price AND $max_price
            ORDER BY $sort
        "));
        $count = (array) $countStdClass[0];

        // $startAt; $perPage; $title; $category; $sort; $min_price; $max_price;
        $perPage = $request->query('per_page', '7');
        $page = $request->query('page', 1);
        $startAt = $perPage * ($page - 1);
        $totalPages = ceil($count['total'] / $perPage);
        
        $ads = DB::select(DB::raw("
            SELECT * FROM ads
            WHERE title LIKE \"%$title%\"
            $cats_str
            AND price BETWEEN $min_price AND $max_price
            ORDER BY $sort
            LIMIT $startAt, $perPage
        "));

        // Generate pagination
        $links = "";
        $prevLink = $page - 1;
        function getLink($num, $title, $category, $sort, $min_price, $max_price, $perPage) {
            return "/ads?title=$title&category=$category&sort=$sort&min_price=$min_price&max_price=$max_price&page=$num&per_page=$perPage";
        }
        if((int)$page !== 1) {
            // <li class='page-item'><a href='' class='page-link'>Previous</a></li>
            $links .= "<li class='page-item'><a href='".getLink($prevLink, $title, $category, $sort, $min_price, $max_price, $perPage)."' class='page-link'>Previous</a></li>";
        }
        for ($i = 1; $i <= $totalPages; $i++) {
            if($i === (int)$page - 1) {
                $links .= "<li class='page-item'><a href='".getLink($i, $title, $category, $sort, $min_price, $max_price, $perPage)."' class='page-link'>$i</a></li>";
            }
            if($i === (int)$page) {
                $links .= "<li class='page-item active' aria-current='page'><span class='page-link'>$i</span></li>";
            }
            if($i === (int)$page + 1) {
                $links .= "<li class='page-item'><a href='".getLink($i, $title, $category, $sort, $min_price, $max_price, $perPage)."' class='page-link'>$i</a></li>";
            }
        }
        $nextLink = $page + 1;
        if($page + 1 <= $totalPages) {
            $links .= "<li class='page-item'><a href='".getLink($nextLink, $title, $category, $sort, $min_price, $max_price, $perPage)."' class='page-link'>Next</a></li>";
        }

        $allCats = Cat::get();
        
        return view('ads/index', [
            'ads' => $ads,
            'pageLinks' => $links,
            'title' => $title,
            'min_price' => $min_price,
            'max_price' => $max_price,
            'sort' => $sort,
            'category' => $category,
            'total' => $count['total'],
            'perPage' => $perPage,
            'allCats' => $allCats
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Cat::get();
        return view('user/ads/create', [
            'cats' => $cats
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:ads',
            'description' => 'required',
            'price' => 'required|integer|min:0',
            'location' => 'required',
            'picture' => 'required|image|max:5048',
            'category_id' => [
                'required',
                Rule::exists('cats', 'id')   // https://stackoverflow.com/a/44574133
            ],
        ]);

        $images = [];
        if($request->hasfile('picture')) {
            if(count($request->file('picture')) > 4) {
                return back()
                        ->withInput()
                        ->withErrors(['picture' => 'An ad can have at most 4 images.']);
            }
            foreach($request->file('picture') as $key=>$file) {
                $newPicName = 'ad-' . time() . "-$key." . $file->extension();
                $file->move(public_path('images/ads'), $newPicName);
                $imageUrl = "/images/ads/$newPicName";
                $images[] = $imageUrl;
            }
        }

        $id = Auth::user()->id;

        $ad = Ad::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'location' => $request->input('location'),
            'category_id' => $request->input('category_id'),
            'picture' => implode('|', $images),
            'user_id' => $id
        ]);

        return back()->with('success','Your ad has been created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ad = Ad::join('cats', 'ads.category_id', '=', 'cats.id')
                    ->select('ads.*', 'cats.name as catName')
                    ->where('ads.id', $id)
                    ->first();
        // dd($ad);

        if(!isset($ad)) {
            return abort(404);   // https://stackoverflow.com/a/32922364   Could have used firstOrFail instead like below.
        }

        // share urls
        $productName = $ad->title;
        $rootUrl = "https://4d31-156-0-214-62.ngrok.io";
        $bareUrl = "$rootUrl/ads/$id";
        $urlToShare = rawurlencode($bareUrl);
        $urlText = rawurlencode("Check out $productName");
        $hashtags = "Bazinga,ads,onlineads,freeads";
        $emailSubject = rawurlencode(
            "I ♥ this ad on Bazinga!"
        );
        $emailBody = rawurlencode(
            "$productName. Here's the link $bareUrl."
        );
        $shareUrls = [
            $bareUrl,
            "https://www.facebook.com/sharer.php?u=$urlToShare",
            "https://twitter.com/intent/tweet?url=$urlToShare&text=$urlText&hashtags=$hashtags",
            "mailto:?subject=$emailSubject&amp;body=$emailBody"
        ];
        return view('ads/show', [
            'ad' => $ad,
            'shareUrls' => $shareUrls,
            'rootUrl' => $rootUrl,
            'bareUrl' => $bareUrl
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        // $ad = Ad::find($id)->firstOrFail();  // DON'T USE THIS. FOR WHATEVER REASON IT RETURNS 1ST AD ALWAYS.
        $ad = Ad::where('id', $id)->firstOrFail();
        if(Auth::user()->id !== $ad->user_id && Auth::user()->role !== 'admin') {
            return redirect()->route('root')
                             ->with('error','You are not allowed to do that!');
        }

        $cats = Cat::get();
        return view('user/ads/edit', [
            'ad' => $ad,
            'cats' => $cats
        ]);
        // return view('user/ads/edit')->with('ad', $ad);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ad = Ad::where('id', $id)->firstOrFail();
        if(Auth::user()->id !== $ad->user_id && Auth::user()->role !== 'admin') {
            return redirect()->route('root')
                             ->with('error','You are not allowed to do that!');
        }

        $request->validate([
            'title' => 'required|unique:ads,title,' .$id,  // https://laracasts.com/discuss/channels/requests/problem-with-unique-field-validation-on-update
            'description' => 'required',
            'price' => 'required|integer|min:0',
            'location' => 'required',
            'category_id' => [
                'required',
                Rule::exists('cats', 'id')   // https://stackoverflow.com/a/44574133
            ],
            'picture' => 'nullable|image|max:5048',
        ]);

        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'location' => $request->input('location'),
            'category_id' => $request->input('category_id')
            // 'picture' => "/images/ads/$newPicName"
            // 'user_id' => $id // Comment this out to leave user_id untouched
        ];

        // if($request->file('picture')) {
        //     $newPicName = 'Ad-' . time() . "." . $request->file('picture')->extension();
        //     $request->file('picture')->move(public_path('images/ads'), $newPicName);
        //     $pictureArray = ['picture' => "/images/ads/$newPicName"];
        // }
        if($request->hasfile('picture')) {
            $images = [];
            if(count($request->file('picture')) > 4) {
                return back()
                        ->withInput()
                        ->withErrors(['picture' => 'An ad can have at most 4 images.']);
            }
            foreach($request->file('picture') as $key=>$file) {
                $newPicName = 'ad-' . time() . "-$key." . $file->extension();
                $file->move(public_path('images/ads'), $newPicName);
                $imageUrl = "/images/ads/$newPicName";
                $images[] = $imageUrl;
            }
            $pictureArray = ['picture' => implode('|', $images)];
        }
        
        $newAd = Ad::where('id', $id)
                ->update(array_merge(
                    $data,
                    $pictureArray ?? []
                ));

        return back()->with('success','The ad has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ad = Ad::where('id', $id)->firstOrFail();
        if(Auth::user()->id !== $ad->user_id && Auth::user()->role !== 'admin') {
            return redirect()->route('root')
                             ->with('error','You are not allowed to do that!');
        }

        $deletedRows = Ad::where('id', $id)->delete();
        return back()->with('success','The ad has been deleted successfully!');
    }

    /**
     * Show logged in user's ads
     */
    public function myAds(Request $request) {
        // $ads = Ad::where('user_id', Auth::user()->id)->get();
        $count = Ad::where('user_id', Auth::user()->id)->count();
        $perPage = $request->query('per_page', '20');
        $page = $request->query('page', 1);
        $startAt = $perPage * ($page - 1);
        $totalPages = ceil($count / $perPage);

        // Generate pagination
        $links = "";
        $prevLink = $page - 1;
        function getLink($num, $perPage) {
            return "/user/my-ads?page=$num&per_page=$perPage";
        }
        if((int)$page !== 1) {
            $links .= "<li class='page-item'><a href='".getLink($prevLink, $perPage)."' class='page-link'>Previous</a></li>";
        }
        for ($i = 1; $i <= $totalPages; $i++) {
            if($i === (int)$page - 1) {
                $links .= "<li class='page-item'><a href='".getLink($i, $perPage)."' class='page-link'>$i</a></li>";
            }
            if($i === (int)$page) {
                $links .= "<li class='page-item active' aria-current='page'><span class='page-link'>$i</span></li>";
            }
            if($i === (int)$page + 1) {
                $links .= "<li class='page-item'><a href='".getLink($i, $perPage)."' class='page-link'>$i</a></li>";
            }
        }
        $nextLink = $page + 1;
        if($page + 1 <= $totalPages) {
            $links .= "<li class='page-item'><a href='".getLink($nextLink, $perPage)."' class='page-link'>Next</a></li>";
        }
        
        $ads = Ad::where('user_id', Auth::user()->id)->skip($startAt)->take($perPage)->get();

        return view('user/ads/my-ads', [
            'ads' => $ads,
            'pageLinks' => $links,
        ]);
    }
}
