<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        if($user->role === 'user') {
            return view('user/dashboard', [
                'user' => $user
            ]);
        }
        if($user->role === 'admin') {
            return view('admin/dashboard', [
                'user' => $user
            ]);
        }
    }
}
