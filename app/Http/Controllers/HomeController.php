<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        
        return view('index', compact('categories'));
    }
}
