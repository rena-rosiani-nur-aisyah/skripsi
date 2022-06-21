<?php

namespace App\Http\Controllers;

use App\Models\Ibdh;
use App\Http\Requests\StoreIbdhRequest;
use App\Http\Requests\UpdateIbdhRequest;
use Illuminate\Support\Facades\DB;

class IbdhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('ibdhs')
            ->join('posts', 'ibdhs.jenis_id', '=', 'posts.id')
            ->get();
        // dd($items);
        $data = [
            'items' => $items
        ];
        return view('category.ibdh', $data);
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
     * @param  \App\Http\Requests\StoreIbdhRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIbdhRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ibdh  $ibdh
     * @return \Illuminate\Http\Response
     */
    public function show(Ibdh $ibdh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ibdh  $ibdh
     * @return \Illuminate\Http\Response
     */
    public function edit(Ibdh $ibdh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIbdhRequest  $request
     * @param  \App\Models\Ibdh  $ibdh
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIbdhRequest $request, Ibdh $ibdh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ibdh  $ibdh
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ibdh $ibdh)
    {
        //
    }
}
