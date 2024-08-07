<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.artikel', [
            'posts' => Artikel::all()
        ]);
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
     * Display the specified resource.
     *
     * @param  \App\Models\ArtikelUser  $artikelUser
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikelUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArtikelUser  $artikelUser
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikelUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ArtikelUser  $artikelUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikelUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArtikelUser  $artikelUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikelUser)
    {
        //
    }
}
