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

    public function users(Request $request) {
        if(Auth::user()->role !== 'admin') {
            return redirect()->route('root')
                             ->with('error','You are not allowed to do that!');
        }

        $count = User::count();
        $perPage = $request->query('per_page', '20');
        $page = $request->query('page', 1);
        $startAt = $perPage * ($page - 1);
        $totalPages = ceil($count / $perPage);

        // Generate pagination
        $links = "";
        $prevLink = $page - 1;
        function getLink($num, $perPage) {
            return "/admin/users?page=$num&per_page=$perPage";
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

        $users = User::skip($startAt)->take($perPage)->get();
        return view('admin/users', [
            'users' => $users,
            'pageLinks' => $links,
        ]);
    }

    public function ads(Request $request) {
        if(Auth::user()->role !== 'admin') {
            return redirect()->route('root')
                             ->with('error','You are not allowed to do that!');
        }

        $count = Ad::count();
        $perPage = $request->query('per_page', '20');
        $page = $request->query('page', 1);
        $startAt = $perPage * ($page - 1);
        $totalPages = ceil($count / $perPage);

        // Generate pagination
        $links = "";
        $prevLink = $page - 1;
        function getLink($num, $perPage) {
            return "/admin/ads?page=$num&per_page=$perPage";
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
        
        $ads = Ad::skip($startAt)->take($perPage)->get();
        return view('admin/ads', [
            'ads' => $ads,
            'pageLinks' => $links,
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
