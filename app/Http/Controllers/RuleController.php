<?php

namespace App\Http\Controllers;

use App\Models\rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreruleRequest;
use App\Http\Requests\UpdateruleRequest;
use App\Models\diagnosis;
use App\Models\gejala;
use App\Models\post;
use PHPUnit\Framework\Constraint\Operator;

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

    public function create()
    {
        $categories = gejala::all();
        return view('category.admin.diagnosis.rule.tambahRules', compact('categories'));
    }
    // $jenisDarah = post::all();

    public function store(Request $request)
    {
        $validate = $request->validate([
            'post_id' => 'required',
            'gejala_id' => 'required|exists:gejala_id',
            'operator' => 'required',
            'value' => 'required'
        ]);
        $insert = diagnosis::created([
            'post_id' => $request->post_id,
            'gejala_id' => $request->gejala_id,
            'operator' => $request->operator,
            'value' => $request->value
        ]);
        $post = post::created($request->all());
        $post->gejala()->sync($request->gejala);
        return redirect(url('/rules'));
    }


    public function show(rule $rule)
    {
        //
    }

    public function edit(rule $rule, $id)
    {
        $rules = rule::findOrFail($id);
        $jenisDarah = post::all();
        $gejala = gejala::all();
        return view('category.admin.diagnosis.rule.editRules', compact('rules', 'jenisDarah', 'gejala'));
    }

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
