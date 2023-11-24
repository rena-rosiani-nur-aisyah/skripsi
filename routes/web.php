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
use App\Http\Controllers\IbdhController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\SifatController;
use App\Http\Controllers\SyaratamyizController;
use App\Http\Controllers\SyaratHaidController;
use App\Http\Controllers\SyaratIstihadhahController;
use App\Http\Controllers\SyaratNifasController;
use App\Http\Controllers\WarnaController;
use App\Models\warna;
use Database\Factories\SyaratIstihadhahFactory;
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

Route::get('/dashboardAdmin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

// route untuk menu jenis
Route::get('/jenis', [PostController::class, 'index']);

Route::get('/show/{id}', [PostController::class, 'show'])->name('show');

Route::post('/edit/{id}', [PostController::class, 'update'])->name('edit');

Route::get('/delete/{id}', [PostController::class, 'destroy'])->name('delete');

Route::post('/tjenis', [PostController::class, 'store']);

Route::get('/tjenis', function () {
    return view('category.admin.penyakit.tjenis');
});

//Syarat dan Ketentuan HAID
Route::get('/syaratHaid', [SyaratHaidController::class, 'index']);
Route::get('/snkhaidshow/{id}', [SyaratHaidController::class, 'show'])->name('snkhaidshow');
Route::post('/snkhaidupdate/{id}', [SyaratHaidController::class, 'update'])->name('snkhaidupdate');
Route::get('/snkhaiddelete/{id}', [SyaratHaidController::class, 'destroy'])->name('snkhaiddelete');
Route::post('/tsyaratHaid', [SyaratHaidController::class, 'store']);
Route::get('/tsyaratHaid', function () {
    return view('category.admin.basis.tambah.tsyaratHaid');
});

//route Syarat dan Ketentuan Istihadhah
Route::get('/syaratIstihadhah', [SyaratIstihadhahController::class, 'index']);
Route::get('/snkisthdhshow/{id}', [SyaratIstihadhahController::class, 'show'])->name('snkisthdhshow');
Route::post('/snkisthdhupdate/{id}', [SyaratIstihadhahController::class, 'update'])->name('snkisthdhupdate');
Route::get('/snkisthdhdelete/{id}', [SyaratIstihadhahController::class, 'destroy'])->name('snkisthdhdelete');
Route::post('/tsnkisthdh', [SyaratIstihadhahController::class, 'store']);
Route::get('/tsnkisthdh', function () {
    return view('category.admin.basis.tambah.tsyaratIstihdh');
});


//route snk tamyiz
Route::get('/syaratamyiz', [SyaratamyizController::class, 'index']);
Route::get('/snktamshow/{id}', [SyaratamyizController::class, 'show'])->name('snktamshow');
Route::post('/snktamupdate/{id}', [SyaratamyizController::class, 'update'])->name('snktamupdate');
Route::get('/snktamdelete/{id}', [SyaratamyizController::class, 'destroy'])->name('snktamdelete');
Route::post('/tsyaratamyiz', [SyaratamyizController::class, 'store']);
Route::get('/tsyaratamyiz', function () {
    return view('category.admin.basis.tambah.tsyaratamyiz');
});


// semua route untuk sifat
Route::get('/sifat', [SifatController::class, 'index']);

Route::post('/sifat-store', [SifatController::class, 'store'])->name('sifat.store');

Route::get('/showsifat/{id}', [SifatController::class, 'show'])->name('showsifat');

Route::get('/editsifat/{id}', [SifatController::class, 'edit'])->name('editsifat');

Route::post('updatesifat', [SifatController::class, 'update'])->name('updatesifat');

Route::get('/deletesifat/{id}', [SifatController::class, 'destroy'])->name('deletesifat');

Route::get('/sifats', function () {
    return view('category.admin.basis.tambah.tsifat');
});


// syarat nifas
Route::get('/syaratNifas', [SyaratNifasController::class, 'index']);
Route::post('/syaratn-store', [SyaratNifasController::class, 'store'])->name('syaratn.store');
Route::get('/showsyaratn/{id}', [SyaratNifasController::class, 'show'])->name('showsyaratn');
Route::get('/editsyaratn/{id}', [SyaratNifasController::class, 'edit'])->name('editsyaratn');
Route::post('/updatesyaratn/{id}', [SyaratNifasController::class, 'update'])->name('updatesyaratn');
Route::get('/deletesyaratn/{id}', [SyaratNifasController::class, 'destroy'])->name('deletesyaratn');
Route::get('/tsyaratnifas', function () {
    return view('category.admin.basis.tambah.tsyaratNifas');
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




// semua route untuk hasil diagnosis
Route::get('/diagnosa', [DiagnosisController::class, 'index']);

Route::post('/tdiagnosis-store', [DiagnosisController::class, 'store'])->name('tdiagnosis.store');
// Route::get('/tdiagnosis', [DiagnosisController::class, 'create']);

Route::get('/showdiagnosis/{id}', [DiagnosisController::class, 'show'])->name('showdiagnosis');

Route::post('/updatediagnosis/{id}', [DiagnosisController::class, 'update'])->name('updatediagnosis');

Route::get('/editdiagnosis/{id}', [DiagnosisController::class, 'edit'])->name('editdiagnosis');

Route::get('/deletediagnosis/{id}', [DiagnosisController::class, 'destroy'])->name('deletediagnosis');

Route::get('/diagnosisuser', [DiagnosisController::class, 'diagnosis']);

Route::get('/editdiagnos', function () {
    return view('category.admin.diagnosis.hasil.ediagnosis');
});
Route::get('/tambahdiagnosis', function () {
    return view('category.admin.diagnosis.hasil.tdiagnosis');
});




// semua route untuk ibadah
Route::get('/ibdh', [IbdhController::class, 'index']);
Route::post('/ibdh-store', [IbdhController::class, 'store'])->name('ibdh.store');
// Route::get('tibadah', [IbdhController::class, 'create']);
Route::get('/tampilkanibadah/{id}', [IbdhController::class, 'show'])->name('tampilkanibadah');
Route::post('/updateibadah/{id}', [IbdhController::class, 'update'])->name('updateibadah');
Route::get('/editibadah/{id}', [IbdhController::class, 'edit'])->name('editibadah');
Route::get('/deleteibadah/{id}', [IbdhController::class, 'destroy'])->name('deleteibadah');
Route::get('/editibdh', function () {
    return view('category.admin.basis.edit.eibadah');
});
Route::get('/tambahibadah', function () {
    return view('category.admin.basis.tambah.tibdh');
});




// semua route untuk materi
Route::get('/materi', [MateriController::class, 'index']);
Route::post('/materi-store', [MateriController::class, 'store'])->name('materi.store');
// Route::get('/editmateri/{id}', [MateriController::class, 'edit'])->name('editmateri');
Route::get('/tampilkanmateri/{id}', [MateriController::class, 'show'])->name('tampilkanmateri');
Route::post('updatemateri', [MateriController::class, 'update'])->name('updatemateri');
Route::get('/deletemateri/{id}', [MateriController::class, 'destroy'])->name('deletemateri');
Route::get('tmateri', function () {
    return view('category.admin.basis.tambah.tmateri');
});

Route::get('/emateri', function () {
    return view('category.admin.basis.edit.emateri');
});





//rout profil dari sisi admin
Route::get('/Puser', function () {
    return view('category.profilUser');
});


// Profile user dari sisi user
Route::get('/profile', function () {
    return view('users.profile');
});


Route::get('/dashboardUser', [DashboardController::class, 'index'])->middleware('guest');



Route::get('/riwayat', function () {
    return view('users.riwayat');
});

Route::get('/pengetahuan', function () {
    return view('users.pengetahuan');
});
