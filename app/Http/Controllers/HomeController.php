<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{
    public function __construct()
    {
        \View::composer(
          'categories._index',
          'App\Http\ViewComposers\CategoryComposer'
        );
    }

    public function __invoke()
    {
        return view('home');
    }
}
