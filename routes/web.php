<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderkdbiController;
use App\Http\Controllers\OrderlktiController;
use App\Http\Controllers\OrdersmController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\uploadlktiController;
use App\Http\Controllers\uploadsmController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
// index indo dan eng
Route::get('/', function () {
    return view('index');
})->name('utama');

// change Language

Route::get('locale/{lang}',[LocaleController::class,'setLocale']);

// Route post
Route::post('/login', [OrderlktiController::class, 'login']);
Route::post('/loginsm', [OrdersmController::class, 'loginsm']);
Route::post('/sm/upload', [OrdersmController::class, 'upload']);
Route::post('/lkti/upload', [uploadlktiController::class, 'upload']);
// Route Checkout

Route::post('/checkout', [OrderController::class, 'checkout']);
Route::post('/kdbi/checkout', [OrderkdbiController::class, 'checkout']);
Route::post('/lkti/checkout', [OrderlktiController::class, 'checkout']);
Route::post('/sm/checkout', [OrdersmController::class, 'checkout']);

//  Matalomba EDC 
Route::get('/matalomba/edc', function () {
    return view('matalomba/edc/edc');
});

Route::get('/matalomba/daftarEDC', function () {
    return view('matalomba/edc/daftarEDC');
});

Route::get('/matalomba/detailpesertaEDC', function () {
    return view('matalomba/edc/detailpeserta');
});

Route::get('/matalomba/scoreEDC', function () {
    return view('matalomba/edc/score');
});

// score EDC
Route::get('/matalomba/penyisihanEDC', function () {
    return view('matalomba/edc/penyisihan');
});

Route::get('/matalomba/sfinalEDC', function () {
    return view('matalomba/edc/sfinal');
});

Route::get('/matalomba/finalEDC', function () {
    return view('matalomba/edc/final');
});



// Matalomba KDBI 
Route::get('/matalomba/kdbi', function () {
    return view('matalomba/kdbi/kdbi');
});

Route::get('/matalomba/daftarKDBI', function () {
    return view('matalomba/kdbi/daftarKDBI');
});


Route::get('/matalomba/detailpesertaKDBI', function () {
    return view('matalomba/kdbi/detailpeserta');
});
// score KDBI
Route::get('/matalomba/penyisihanKDBI', function () {
    return view('matalomba/kdbi/penyisihan');
});

Route::get('/matalomba/sfinalKDBI', function () {
    return view('matalomba/kdbi/sfinal');
});

Route::get('/matalomba/finalKDBI', function () {
    return view('matalomba/kdbi/final');
});

// Matalomba LKTI 
Route::get('/matalomba/lkti', function () {
    return view('matalomba/lkti/lkti');
});

Route::get('/matalomba/daftarKTI', function () {
    return view('matalomba/lkti/daftarLKTI');
});

Route::get('/matalomba/loginspc', function () {
    return view('matalomba/lkti/login');
});

Route::get('/matalomba/detailpesertaLKTI', function () {
    return view('matalomba/lkti/detailpeserta');
});

Route::get('/matalomba/scoreLKTI', function () {
    return view('matalomba/lkti/score');
});

// score LKTI
Route::get('/matalomba/penyisihanLKTI', function () {
    return view('matalomba/lkti/penyisihan');
});

Route::get('/matalomba/sfinalLKTI', function () {
    return view('matalomba/lkti/sfinal');
});

Route::get('/matalomba/finalLKTI', function () {
    return view('matalomba/lkti/final');
});



// Matalomba SM 
Route::get('/matalomba/shortmovie', function () {
    return view('matalomba/sm/sm');
});

Route::get('/matalomba/daftarSM', function () {
    return view('matalomba/sm/daftarSM');
});

Route::get('/matalomba/loginsm', function () {
    return view('matalomba/sm/login');
});

Route::get('/matalomba/uploadSM', function () {
    return view('matalomba/sm/uploadSM');
});

Route::get('/matalomba/detailpesertaSM', function () {
    return view('matalomba/sm/detailpeserta');
});

Route::get('/matalomba/scoreSM', function () {
    return view('matalomba/sm/score');
});

// score SM
Route::get('/matalomba/penyisihanSM', function () {
    return view('matalomba/sm/penyisihan');
});

Route::get('/matalomba/sfinalSM', function () {
    return view('matalomba/sm/sfinal');
});

Route::get('/matalomba/finalSM', function () {
    return view('matalomba/sm/final');
});


// Route Admin
Route::get('/edc/login', function () {
    return view('edc/loginadmin');
});

Route::get('/edc/mainmenu', function () {
    return view('edc/mainmenu');
});



Route::get('edc/loginadmin', [AuthController::class, 'showLogin'])->name('login');
Route::post('edc/loginadmin', [AuthController::class, 'login']);
// Route::get('edc/mainmenu', [AuthController::class, 'showMainMenu'])->middleware('auth');

// routes/web.php

Route::get('/edc/mainmenu', [AuthController::class, 'showMainMenu'])->name('mainmenu.show'); // Rute untuk menampilkan halaman main menu (GET)
Route::post('/edc/mainmenu', [AuthController::class, 'login'])->name('mainmenu.login'); // Rute untuk login (POST)


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
