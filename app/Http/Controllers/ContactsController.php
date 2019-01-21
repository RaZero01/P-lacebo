<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class ContactsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $people = Person::where('url', $request->route()->uri)->get();
        return view('layouts.contacts', compact('people'));
    }
}
