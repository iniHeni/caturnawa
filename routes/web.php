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





// Route Login

Route::get('/admin/login', function () {
    return view('admin/loginadmin');
});

// Route Admin EDC
Route::get('/admin/mainmenuEDC', function () {
    return view('admin/EDC/mainmenuEDC');
});
// Route Beranda
Route::get('/admin/beranda', function () {
    return view('admin/EDC/beranda');
});


// Route Data Peserta
Route::get('/admin/pesertaEDC', function () {
    return view('admin/EDC/data-pesertaEDC');
});

// Route Edit Peserta

Route::get('/admin/edit-peserta', function () {
    return view('admin/EDC/edit-peserta');
});

// Route Data Kategori
Route::get('/admin/kategoriEDC', function () {
    return view('admin/EDC/data-kategoriEDC');
});


// Route Data Babak
Route::get('/admin/babakEDC', function () {
    return view('admin/EDC/babakEDC');
});

Route::get('/admin/mainmenuEDC', [AuthController::class, 'showMainMenu'])->name('mainmenu.show'); // Rute untuk menampilkan halaman main menu (GET)
Route::post('/admin/mainmenuEDC', [AuthController::class, 'login'])->name('mainmenu.login'); // Rute untuk login (POST)





// Route Admin KDBI
Route::get('/admin/mainmenuKDBI1', function () {
    return view('admin/KDBI/mainmenuKDBI');
});

// Route Beranda
Route::get('/admin/beranda1', function () {
    return view('admin/KDBI/beranda');
});


// Route Data Peserta
Route::get('/admin/pesertaKDBI1', function () {
    return view('admin/KDBI/data-pesertaKDBI');
});

// Route Edit Peserta

Route::get('/admin/edit-peserta1', function () {
    return view('admin/KDBI/edit-peserta');
});

// Route Data Kategori
Route::get('/admin/kategoriKDBI1', function () {
    return view('admin/KDBI/data-kategoriKDBI');
});


// Route Data Babak
Route::get('/admin/babakKDBI1', function () {
    return view('admin/KDBI/babakKDBI');
});
Route::get('/admin/mainmenuKDBI', [AuthController::class, 'showMainMenu'])->name('mainmenu.show'); // Rute untuk menampilkan halaman main menu (GET)
Route::post('/admin/mainmenuKDBI', [AuthController::class, 'login'])->name('mainmenu.login'); // Rute untuk login (POST)








// Route Admin LKTI
Route::get('/admin/mainmenuLKTI1', function () {
    return view('admin/LKTI/mainmenuLKTI');
});

// Route Beranda
Route::get('/admin/beranda1', function () {
    return view('admin/LKTI/beranda');
});


// Route Data Peserta
Route::get('/admin/pesertaLKTI1', function () {
    return view('admin/LKTI/data-pesertaLKTI');
});

// Route Edit Peserta

Route::get('/admin/edit-peserta1', function () {
    return view('admin/LKTI/edit-peserta');
});

// Route Data Kategori
Route::get('/admin/kategoriLKTI1', function () {
    return view('admin/LKTI/data-kategoriLKTI');
});


// Route Data Babak
Route::get('/admin/babakLKTI1', function () {
    return view('admin/LKTI/babakLKTI');
});
Route::get('/admin/mainmenuLKTI', [AuthController::class, 'showMainMenu'])->name('mainmenu.show'); // Rute untuk menampilkan halaman main menu (GET)
Route::post('/admin/mainmenuLKTI', [AuthController::class, 'login'])->name('mainmenu.login'); // Rute untuk login (POST)




// Route Admin SM
Route::get('/admin/mainmenuSM1', function () {
    return view('admin/SM/mainmenuSM');
});

// Route Beranda
Route::get('/admin/beranda1', function () {
    return view('admin/SM/beranda');
});


// Route Data Peserta
Route::get('/admin/pesertaSM1', function () {
    return view('admin/SM/data-pesertaSM');
});

// Route Edit Peserta

Route::get('/admin/edit-peserta1', function () {
    return view('admin/SM/edit-peserta');
});

// Route Data Kategori
Route::get('/admin/kategoriSM1', function () {
    return view('admin/SM/data-kategoriSM');
});


// Route Data Babak
Route::get('/admin/babakSM1', function () {
    return view('admin/SM/babakSM');
});
Route::get('/admin/mainmenuSM', [AuthController::class, 'showMainMenu'])->name('mainmenu.show'); // Rute untuk menampilkan halaman main menu (GET)
Route::post('/admin/mainmenuSM', [AuthController::class, 'login'])->name('mainmenu.login'); // Rute untuk login (POST)










Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/admin/dashboard', function () {
//     return view('admin/dashboard');
// });
