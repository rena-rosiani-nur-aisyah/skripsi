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
// use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SignupController;
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
    Route::get('/diagnosisUser', function () {
        return view('users.diagnosis-user');
    });
    Route::get('/artikel', function () {
        return view('artikel.artikel');
    });
    Route::get('/riwayat', function () {
        return view('users.riwayat');
    });
});

// Route::get('/dashboard', function () {
//     return view('users.dashborad');
// })->middleware('auth');

// Route::get('/diagnosisUser', function () {
//     return view('users.diagnosis-user');
// });


//route untuk artikel kita coba pake resource

Route::resource('/Dashboard/Artikel', ArtikelController::class);

Route::get('/tambahArtikel', function () {
    return view('artikel.tambahArtikel');
});

Route::get('/editArtikel', function () {
    return view('artikel.editArtikel');
});

Route::get('/versiAdmin', function () {
    return view('artikel.artikelAdmin');
});



// route untuk menu jenis
Route::get('/jenis', [PostController::class, 'index']);

Route::get('/show/{id}', [PostController::class, 'show'])->name('show');

Route::post('/edit/{id}', [PostController::class, 'update'])->name('edit');

Route::get('/delete/{id}', [PostController::class, 'destroy'])->name('delete');

Route::post('/tjenis', [PostController::class, 'store'])->name('prosesinputjenis');

Route::get('/tjenis', function () {
    return view('category.admin.penyakit.tjenis');
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




// Route::get('/diagnosis/{userId}', [DiagnosisController::class, 'getGejala']);
