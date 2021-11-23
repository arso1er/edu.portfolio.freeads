<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Get params
        $title = $request->query('title', '');
        $min_price = $request->query('min_price', '0');
        $max_price = $request->query('max_price', '10000');
        $sort = $request->query('sort', 'title asc');
        $category = $request->query('category', '-1');
        
        $cats_str = "";

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
        if($page !== 1) {
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
        
        return view('ads/index', [
            'ads' => $ads,
            'pageLinks' => $links,
            'title' => $title,
            'min_price' => $min_price,
            'max_price' => $max_price,
            'sort' => $sort,
            'category' => $category,
            'total' => $count['total'],
            'perPage' => $perPage
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user/ads/create');
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
            'picture' => 'required|mimes:png,jpg,jpeg|max:5048',
        ]);

        // $request->file('picture')->
        $newPicName = 'Ad-' . time() . "." . $request->file('picture')->extension();
        $request->file('picture')->move(public_path('images/ads'), $newPicName);
        // dd($newPicName);

        $id = Auth::user()->id;

        $ad = Ad::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'location' => $request->input('location'),
            'category_id' => $request->input('category_id'),
            'picture' => "/images/ads/$newPicName",
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
        //
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
        // $ad = Ad::find($id)->first();  // DON'T USE THIS. FOR WHATEVER REASON IT RETURNS 1ST AD ALWAYS.
        $ad = Ad::where('id', $id)->first();
        if(Auth::user()->id !== $ad->user_id && Auth::user()->role !== 'admin') {
            return redirect()->route('root')
                             ->with('error','You are not allowed to do that!');
        }

        return view('user/ads/edit')->with('ad', $ad);
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
        $ad = Ad::where('id', $id)->first();
        if(Auth::user()->id !== $ad->user_id && Auth::user()->role !== 'admin') {
            return redirect()->route('root')
                             ->with('error','You are not allowed to do that!');
        }

        $request->validate([
            'title' => 'required|unique:ads,title,' .$id,  // https://laracasts.com/discuss/channels/requests/problem-with-unique-field-validation-on-update
            'description' => 'required',
            'price' => 'required|integer|min:0',
            'location' => 'required'
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

        if($request->file('picture')) {
            $newPicName = 'Ad-' . time() . "." . $request->file('picture')->extension();
            $request->file('picture')->move(public_path('images/ads'), $newPicName);
            $pictureArray = ['picture' => "/images/ads/$newPicName"];
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
        $ad = Ad::where('id', $id)->first();
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
    public function myAds() {
        $ads = Ad::where('user_id', Auth::user()->id)->get();

        return view('user/ads/my-ads', [
            'ads' => $ads
        ]);
    }
}
