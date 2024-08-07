<?php

use App\Models\post;
use App\Models\warna;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\SiginController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\RiwayatController;
// use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SignupController;
use App\Models\hasil;
use GuzzleHttp\Middleware;
use Symfony\Component\HttpKernel\Profiler\Profile;


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
    return view('users.landing');
});

Auth::routes();

Route::get('/Admin', function () {
    return view('category.index');
});

Route::get('/sigin', [SiginController::class, 'index'])->name('sigin')->middleware('guest');
Route::post('/sigin', [SiginController::class, 'authenticate']);
Route::post('/logout', [SiginController::class, 'logout'])->name('logout');


Route::get('/registrasi', [SignupController::class, 'index'])->middleware('guest');
Route::post('/registrasi', [SignupController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('users.dashborad');
    });
    // Route::get('/diagnosisUser', function () {
    //     return view('users.diagnosis-user');
    // });
    Route::get('/diagnosisUser', [DiagnosisController::class, 'create']);
    Route::get('/artikel', function () {
        return view('artikel.artikel');
    });
    Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat');
});




//route untuk artikel kita coba pake resource

Route::resource('/Dashboard/Artikel', ArtikelController::class);
Route::resource('/rules', RuleController::class);

// semua route untuk diagnosis user
Route::resource('/diagnosis', HasilController::class);


Route::get('/diagnosisUser', [DiagnosisController::class, 'create'])->name('diagnosisUser');
Route::get('/emptyState', function () {
    return view('users.diagnosis.emptyView');
});
Route::get('/hasilUser', function () {
    return view('users.diagnosis.HasilDiagnosisUser');
})->name('hasilUser');
Route::post('/diagnosis/store', [DiagnosisController::class, 'store'])->name('diagnosis.store');



// route untuk menu jenis
Route::get('/jenis', [PostController::class, 'index']);

Route::get('/show/{id}', [PostController::class, 'show'])->name('show');

Route::post('/edit/{id}', [PostController::class, 'update'])->name('edit');

Route::get('/delete/{id}', [PostController::class, 'destroy'])->name('delete');

Route::post('/tjenis', [PostController::class, 'store'])->name('prosesinputjenis');

Route::get('/tjenis', function () {
    return view('category.admin.penyakit.tjenis');
});

Route::delete('/penyakit/{id}', [PostController::class, 'deletePenyakit'])->name('penyakit.delete');




// route untuk semua gejala
Route::get('/gejala', [GejalaController::class, 'index']);
Route::post('/gejala-store', [GejalaController::class, 'store'])->name('gejala.store');
Route::get('/tampilgejala/{id}', [GejalaController::class, 'show'])->name('tampilgejala');
Route::post('/updategejala/{id}', [GejalaController::class, 'update'])->name('updategejala');
Route::get('/editgejala/{id}', [GejalaController::class, 'edit'])->name('editgejala');
Route::get('/deletegejala/{id}', [GejalaController::class, 'destroy'])->name('deletegejala');

Route::get('/tgejala', function () {
    return view('category.admin.gejala.tgejala');
});

Route::get('/editgejala', function () {
    return view('category.admin.gejala.editgejala');
});

Route::delete('/gejala/{id}', [GejalaController::class, 'deleteGejala'])->name('gejala.delete');








//rout profil dari sisi admin
Route::get('/Puser', function () {
    return view('category.profilUser');
});



// Profile user dari sisi user
Route::get('/profile', function () {
    return view('users.profile');
});
