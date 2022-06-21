<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function index()
    {
        $items = DB::table('posts')->get();
        $data = [
            'items' => $items
        ];
        return view('category.jenis-darah', $data);
    }
}
