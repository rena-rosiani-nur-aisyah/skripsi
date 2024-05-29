<?php

namespace App\Http\Controllers;

use App\Models\rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreruleRequest;
use App\Http\Requests\UpdateruleRequest;

class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('rules')->get();
        // dd($items);
        $data = [
            'items' => $items
        ];
        return view('category.admin.diagnosis.rule.rule', $data);
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
     * @param  \App\Http\Requests\StoreruleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreruleRequest $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function show(rule $rule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function edit(rule $rule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateruleRequest  $request
     * @param  \App\Models\rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateruleRequest $request, rule $rule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function destroy(rule $rule)
    {
        //
    }
}
