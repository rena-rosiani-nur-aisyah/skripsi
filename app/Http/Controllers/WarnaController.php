<?php

namespace App\Http\Controllers;

use App\Models\warna;
use App\Http\Requests\StorewarnaRequest;
use App\Http\Requests\UpdatewarnaRequest;
use DB;

class WarnaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = DB::table('warnas')->get();

        $data = [
            'list' => $list
        ];

        return view('category.warna', $data);
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
     * @param  \App\Http\Requests\StorewarnaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorewarnaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function show(warna $warna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function edit(warna $warna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatewarnaRequest  $request
     * @param  \App\Models\warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatewarnaRequest $request, warna $warna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function destroy(warna $warna)
    {
        //
    }
}
