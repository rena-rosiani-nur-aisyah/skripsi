<?php

namespace App\Http\Controllers;

use App\Models\sifat;
use App\Http\Requests\StoresifatRequest;
use App\Http\Requests\UpdatesifatRequest;
use DB;

class SifatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('sifats')->get();
        $data = [
            'items' => $items
        ];
        return view('category.sifat', $data);
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
     * @param  \App\Http\Requests\StoresifatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresifatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sifat  $sifat
     * @return \Illuminate\Http\Response
     */
    public function show(sifat $sifat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sifat  $sifat
     * @return \Illuminate\Http\Response
     */
    public function edit(sifat $sifat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesifatRequest  $request
     * @param  \App\Models\sifat  $sifat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesifatRequest $request, sifat $sifat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sifat  $sifat
     * @return \Illuminate\Http\Response
     */
    public function destroy(sifat $sifat)
    {
        //
    }
}
