<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use Auth;

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
    public function index()
    {
        // select * from ads
        $ads = Ad::all();
        // dd($ads);
        return view('ads/index', [
            'ads' => $ads
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
