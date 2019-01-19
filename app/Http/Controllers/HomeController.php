<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home', ['categories' => Category::all() ]);
    }
}
