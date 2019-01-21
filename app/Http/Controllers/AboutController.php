<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('people.index', ['people' => Person::all()]);
    }
}
