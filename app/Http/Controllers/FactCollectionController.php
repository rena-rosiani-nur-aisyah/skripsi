<?php

namespace App\Http\Controllers;

use App\Models\FactCollection;
use App\Http\Requests\StoreFactCollectionRequest;
use App\Http\Requests\UpdateFactCollectionRequest;

class FactCollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreFactCollectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFactCollectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FactCollection  $factCollection
     * @return \Illuminate\Http\Response
     */
    public function show(FactCollection $factCollection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FactCollection  $factCollection
     * @return \Illuminate\Http\Response
     */
    public function edit(FactCollection $factCollection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFactCollectionRequest  $request
     * @param  \App\Models\FactCollection  $factCollection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFactCollectionRequest $request, FactCollection $factCollection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FactCollection  $factCollection
     * @return \Illuminate\Http\Response
     */
    public function destroy(FactCollection $factCollection)
    {
        //
    }
}
