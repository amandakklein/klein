<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = News::orderBy('id', 'desc')->take(3)->get();
        return view('welcome', compact('news'));
    }
}
