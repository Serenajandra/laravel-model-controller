<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = movie::all();
        // dd($movies);
        return view('home', compact('movies'));
    }
}
