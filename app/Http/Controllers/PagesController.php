<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;

class PagesController extends Controller
{
    public function index() {
        $ads = Ad::orderByDesc('id')
                ->limit(4)
                ->get();

        return view('index', [
            'ads' => $ads
        ]);
    }
}
