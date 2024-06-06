<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardAdmin;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\GejalaController;
use App\Models\post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\WarnaController;
use App\Models\warna;
use GuzzleHttp\Psr7\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
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

//Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admmin');
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/Admin', function () {
    return view('category.index');
});

Route::get('/dashboard', function () {
    return view('users.dashborad');
});

Route::get('/diagnosisUser', function () {
    return view('users.diagnosis-user');
});

Route::get('artikel', function () {
    return view('artikel.artikel');
});

// route untuk menu jenis
Route::get('/jenis', [PostController::class, 'index']);

Route::get('/show/{id}', [PostController::class, 'show'])->name('show');

Route::post('/edit/{id}', [PostController::class, 'update'])->name('edit');

Route::get('/delete/{id}', [PostController::class, 'destroy'])->name('delete');

Route::post('/tjenis', [PostController::class, 'store']);

Route::get('/tjenis', function () {
    return view('category.admin.penyakit.tjenis');
});




// semua route untuk warna
Route::get('/warna', [WarnaController::class, 'index'])->name('warna');

Route::post('/twarna-store', [WarnaController::class, 'store'])->name('twarna.store');
Route::get('/tampilinwarna/{id}', [WarnaController::class, 'show'])->name('tampilinwarna');
Route::get('/deletewarna/{id}', [WarnaController::class, 'destroy'])->name('deletewarna');
Route::post('/updatewarna/{id}', [WarnaController::class, 'update'])->name('updatewarna');
Route::get('/editw', function () {
    return view('partials.edit.editwarna');
});

Route::get('/twarna', function () {
    return view('category.admin.basis.tambah.twarna');
});




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




// semua route untuk tabel hasil diagnosis user
Route::get('/hasil/show', [DiagnosisController::class, 'show']);
Route::get('/detail', [DiagnosisController::class, 'index']);
Route::get('/hasilDiagnosis', [DiagnosisController::class, 'showHasilDiagnosis'])->name('hasilDiagnosis');

Route::post('/diagnosis-store', [DiagnosisController::class, 'store'])->name('diagnosis.store');

Route::get('/deletediagnosis/{id}', [DiagnosisController::class, 'destroy'])->name('deletediagnosis');

Route::get('/diagnosisuser', [DiagnosisController::class, 'diagnosis'])->name('diagnosisuser');


// Route::get('/diagnosis', function () {
//     return view('category.admin.diagnosis.diagnos');
// });

// Route::view('/{paths}', 'diagnosis.show');
Route::get('/hasilDiagnosis', [DiagnosisController::class, 'showHasilDiagnosis'])->name('hasilDiganosis');


Route::get('/rules', [RuleController::class, 'index']);

Route::get('/tambahRules', function () {
    return view('category.admin.diagnosis.rule.tambahRules');
});
Route::get('/editRules', function () {
    return view('category.admin.diagnosis.rule.editRules');
});


//rout profil dari sisi admin
Route::get('/Puser', function () {
    return view('category.profilUser');
});

Route::get('/detail', function () {
    return view('category.admin.diagnosis.detail');
});

// Profile user dari sisi user
Route::get('/profile', function () {
    return view('users.profile');
});


//Route::get('/dashboardUser', [DashboardController::class, 'index'])->middleware('guest');



Route::get('/riwayat', function () {
    return view('users.riwayat');
});

Route::get('/pengetahuan', function () {
    return view('users.pengetahuan');
});

Route::get('/diagnosis/{userId}', [DiagnosisController::class, 'getGejala']);
