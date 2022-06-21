<?php

use App\Http\Controllers\DiagnosisController;
use App\Models\post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IbdhController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SifatController;
use App\Http\Controllers\WarnaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('category.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test', function () {
    return view('category.index');
});

Route::get('/test/create', function () {
    return view('category.index');
});

Route::get('/jenis', [PostController::class, 'index']);

Route::get('/warna', [WarnaController::class, 'index']);

Route::get('/question', [QuestionController::class, 'index']);

Route::get('/sifat', [SifatController::class, 'index']);

Route::get('/diagnosa', [DiagnosisController::class, 'index']);

Route::get('/ibdh', [IbdhController::class, 'index']);

Route::get('/edit', function () {
    return view('category.create');
});

Route::get('/equestion', function () {
    return view('partials.equestion');
});

Route::get('/edits', function () {
    return view('partials.editsifat');
});


Route::get('/editw', function () {
    return view('partials.editwarna');
});

Route::get('/sifats', function () {
    return view('partials.tsifat');
});

Route::get('/tjenis', function () {
    return view('partials.tjenis');
});




Route::get('/editdiagnos', function () {
    return view('partials.ediagnosis');
});


Route::get('/editibdh', function () {
    return view('partials.eibadah');
});

Route::get('/materi', function () {
    return view('category.materi');
});

Route::get('/emateri', function () {
    return view('partials.emateri');
});

Route::get('/twarna', function () {
    return view('partials.twarna');
});

Route::get('/first', function () {
    return view('users.landing');
});
