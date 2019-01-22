<?php

namespace App\Http\Controllers;

use App\CollectionItem;
use Illuminate\Http\Request;

class CollectionItemsController extends Controller
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
     * @param  \App\CollectionItem  $collectionItem
     * @return \Illuminate\Http\Response
     */
    public function edit(CollectionItem $collectionItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CollectionItem  $collectionItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CollectionItem $collectionItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CollectionItem  $collectionItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(CollectionItem $collectionItem)
    {
        //
    }
}
