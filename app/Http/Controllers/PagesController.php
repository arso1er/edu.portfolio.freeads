<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\User;
use App\Models\Cat;
use Auth;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified'], ['except' => ['index']]);
    }

    public function index() {
        $ads = Ad::orderByDesc('id')
                ->limit(4)
                ->get();

        return view('index', [
            'ads' => $ads
        ]);
    }

    public function users() {
        if(Auth::user()->role !== 'admin') {
            return redirect()->route('root')
                             ->with('error','You are not allowed to do that!');
        }

        $users = User::get();
        return view('admin/users', [
            'users' => $users
        ]);
    }

    public function ads() {
        if(Auth::user()->role !== 'admin') {
            return redirect()->route('root')
                             ->with('error','You are not allowed to do that!');
        }

        $ads = Ad::get();
        return view('admin/ads', [
            'ads' => $ads
        ]);
    }

    public function createCat() {
        if(Auth::user()->role !== 'admin') {
            return redirect()->route('root')
                             ->with('error','You are not allowed to do that!');
        }

        $cats = Cat::get();

        // dd($cats);

        return view('admin/createCat', [
            'cats' => $cats
        ]);
    }

    public function storeCat(Request $request) {
        if(Auth::user()->role !== 'admin') {
            return redirect()->route('root')
                             ->with('error','You are not allowed to do that!');
        }

        $request->validate([
            'name' => 'required|unique:cats',
            'parent_id' => [
                'nullable',
                Rule::exists('cats', 'id')   // https://stackoverflow.com/a/44574133
            ]
        ]);

        $cat = Cat::create([
            'name' => $request->input('name'),
            'parent_id' => $request->input('parent_id')
        ]);

        return back()->with('success','New category successfully created!');
    }
}
