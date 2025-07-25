<?php

namespace App\Http\Controllers;

use App\Models\Trending;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $trending = Trending::orderBy('followers', 'desc')->limit(4)->get();
        return view('main', compact('trending'));
    }

    public function trending()
    {
        $trending = Trending::all();
        return view('trending', compact('trending'));
    }
}
