<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UsersController extends Controller
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

    public function profile() {
        $user = Auth::user();

        return view('user/profile', [
            'user' => $user
        ]);
    }
}
