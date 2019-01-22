<?php

namespace App\Http\Controllers;

use App\CollectionItemImage;
use Illuminate\Http\Request;

class CollectionItemImagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CollectionItemImage  $collectionItemImage
     * @return \Illuminate\Http\Response
     */
    public function edit(CollectionItemImage $collectionItemImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CollectionItemImage  $collectionItemImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CollectionItemImage $collectionItemImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CollectionItemImage  $collectionItemImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(CollectionItemImage $collectionItemImage)
    {
        //
    }
}
