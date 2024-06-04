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
Route::post('/sm/upload', [uploadsmController::class, 'uploadsm']);
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
Route::get('/matalomba/penyisihanEDC/round1', function () {
    return view('matalomba/edc/round1');
});
Route::get('/matalomba/penyisihanEDC/round2', function () {
    return view('matalomba/edc/round2');
});
Route::get('/matalomba/penyisihanEDC/round3', function () {
    return view('matalomba/edc/round3');
});
Route::get('/matalomba/penyisihanEDC/round4', function () {
    return view('matalomba/edc/round4');
});

Route::get('/matalomba/penyisihanEDC/round1/session1', function () {
    return view('matalomba/edc/day1session/session1');
});
Route::get('/matalomba/penyisihanEDC/round1/session2', function () {
    return view('matalomba/edc/day1session/session2');
});
Route::get('/matalomba/penyisihanEDC/round1/session3', function () {
    return view('matalomba/edc/day1session/session3');
});
Route::get('/matalomba/penyisihanEDC/round1/session4', function () {
    return view('matalomba/edc/day1session/session4');
});
Route::get('/matalomba/penyisihanEDC/round1/session5', function () {
    return view('matalomba/edc/day1session/session5');
});
Route::get('/matalomba/penyisihanEDC/round1/session6', function () {
    return view('matalomba/edc/day1session/session6');
});
Route::get('/matalomba/penyisihanEDC/round2/session7', function () {
    return view('matalomba/edc/day1session/session7');
});
Route::get('/matalomba/penyisihanEDC/round2/session8', function () {
    return view('matalomba/edc/day1session/session8');
});
Route::get('/matalomba/penyisihanEDC/round2/session9', function () {
    return view('matalomba/edc/day1session/session9');
});
Route::get('/matalomba/penyisihanEDC/round2/session10', function () {
    return view('matalomba/edc/day1session/session10');
});
Route::get('/matalomba/penyisihanEDC/round2/session11', function () {
    return view('matalomba/edc/day1session/session11');
});
Route::get('/matalomba/penyisihanEDC/round2/session12', function () {
    return view('matalomba/edc/day1session/session12');
});

Route::get('/matalomba/penyisihanEDC/round3/session1', function () {
    return view('matalomba/edc/day2session/session1');
});
Route::get('/matalomba/penyisihanEDC/round3/session2', function () {
    return view('matalomba/edc/day2session/session2');
});
Route::get('/matalomba/penyisihanEDC/round3/session3', function () {
    return view('matalomba/edc/day2session/session3');
});
Route::get('/matalomba/penyisihanEDC/round3/session4', function () {
    return view('matalomba/edc/day2session/session4');
});
Route::get('/matalomba/penyisihanEDC/round3/session5', function () {
    return view('matalomba/edc/day2session/session5');
});
Route::get('/matalomba/penyisihanEDC/round3/session6', function () {
    return view('matalomba/edc/day2session/session6');
});
Route::get('/matalomba/penyisihanEDC/round4/session7', function () {
    return view('matalomba/edc/day2session/session7');
});
Route::get('/matalomba/penyisihanEDC/round4/session8', function () {
    return view('matalomba/edc/day2session/session8');
});
Route::get('/matalomba/penyisihanEDC/round4/session9', function () {
    return view('matalomba/edc/day2session/session9');
});
Route::get('/matalomba/penyisihanEDC/round4/session10', function () {
    return view('matalomba/edc/day2session/session10');
});
Route::get('/matalomba/penyisihanEDC/round4/session11', function () {
    return view('matalomba/edc/day2session/session11');
});
Route::get('/matalomba/penyisihanEDC/round4/session12', function () {
    return view('matalomba/edc/day2session/session12');
});


Route::get('/matalomba/sfinalEDC', function () {
    return view('matalomba/edc/sfinal');
});
Route::get('/matalomba/sfinalEDC/round1', function () {
    return view('matalomba/edc/sfinalronde1');
});
Route::get('/matalomba/sfinalEDC/round2', function () {
    return view('matalomba/edc/sfinalronde2');
});

Route::get('/matalomba/finalEDC', function () {
    return view('matalomba/edc/final');
});
Route::get('/matalomba/finalEDC/round1', function () {
    return view('matalomba/edc/finalronde1');
});
Route::get('/matalomba/finalEDC/round2', function () {
    return view('matalomba/edc/finalronde2');
});
Route::get('/matalomba/finalEDC/round3', function () {
    return view('matalomba/edc/finalronde3');
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
Route::get('/matalomba/penyisihanKDBI/round1', function () {
    return view('matalomba/kdbi/round1');
});
Route::get('/matalomba/penyisihanKDBI/round2', function () {
    return view('matalomba/kdbi/round2');
});
Route::get('/matalomba/penyisihanKDBI/round3', function () {
    return view('matalomba/kdbi/round3');
});
Route::get('/matalomba/penyisihanKDBI/round4', function () {
    return view('matalomba/kdbi/round4');
});

Route::get('/matalomba/penyisihanKDBI/round1/session1', function () {
    return view('matalomba/kdbi/day1session/session1');
});
Route::get('/matalomba/penyisihanKDBI/round1/session2', function () {
    return view('matalomba/kdbi/day1session/session2');
});
Route::get('/matalomba/penyisihanKDBI/round1/session3', function () {
    return view('matalomba/kdbi/day1session/session3');
});
Route::get('/matalomba/penyisihanKDBI/round1/session4', function () {
    return view('matalomba/kdbi/day1session/session4');
});
Route::get('/matalomba/penyisihanKDBI/round1/session5', function () {
    return view('matalomba/kdbi/day1session/session5');
});
Route::get('/matalomba/penyisihanKDBI/round1/session6', function () {
    return view('matalomba/kdbi/day1session/session6');
});
Route::get('/matalomba/penyisihanKDBI/round2/session7', function () {
    return view('matalomba/kdbi/day1session/session7');
});
Route::get('/matalomba/penyisihanKDBI/round2/session8', function () {
    return view('matalomba/kdbi/day1session/session8');
});
Route::get('/matalomba/penyisihanKDBI/round2/session9', function () {
    return view('matalomba/kdbi/day1session/session9');
});
Route::get('/matalomba/penyisihanKDBI/round2/session10', function () {
    return view('matalomba/kdbi/day1session/session10');
});
Route::get('/matalomba/penyisihanKDBI/round2/session11', function () {
    return view('matalomba/kdbi/day1session/session11');
});
Route::get('/matalomba/penyisihanKDBI/round2/session12', function () {
    return view('matalomba/kdbi/day1session/session12');
});

Route::get('/matalomba/penyisihanKDBI/round3/session1', function () {
    return view('matalomba/kdbi/day2session/session1');
});
Route::get('/matalomba/penyisihanKDBI/round3/session2', function () {
    return view('matalomba/kdbi/day2session/session2');
});
Route::get('/matalomba/penyisihanKDBI/round3/session3', function () {
    return view('matalomba/kdbi/day2session/session3');
});
Route::get('/matalomba/penyisihanKDBI/round3/session4', function () {
    return view('matalomba/kdbi/day2session/session4');
});
Route::get('/matalomba/penyisihanKDBI/round3/session5', function () {
    return view('matalomba/kdbi/day2session/session5');
});
Route::get('/matalomba/penyisihanKDBI/round3/session6', function () {
    return view('matalomba/kdbi/day2session/session6');
});
Route::get('/matalomba/penyisihanKDBI/round4/session7', function () {
    return view('matalomba/kdbi/day2session/session7');
});
Route::get('/matalomba/penyisihanKDBI/round4/session8', function () {
    return view('matalomba/kdbi/day2session/session8');
});
Route::get('/matalomba/penyisihanKDBI/round4/session9', function () {
    return view('matalomba/kdbi/day2session/session9');
});
Route::get('/matalomba/penyisihanKDBI/round4/session10', function () {
    return view('matalomba/kdbi/day2session/session10');
});
Route::get('/matalomba/penyisihanKDBI/round4/session11', function () {
    return view('matalomba/kdbi/day2session/session11');
});
Route::get('/matalomba/penyisihanKDBI/round4/session12', function () {
    return view('matalomba/kdbi/day2session/session12');
});


Route::get('/matalomba/sfinalKDBI', function () {
    return view('matalomba/kdbi/sfinal');
});
Route::get('/matalomba/sfinalKDBI/round1', function () {
    return view('matalomba/kdbi/sfinalronde1');
});
Route::get('/matalomba/sfinalKDBI/round2', function () {
    return view('matalomba/kdbi/sfinalronde2');
});

Route::get('/matalomba/finalKDBI', function () {
    return view('matalomba/kdbi/final');
});
Route::get('/matalomba/finalKDBI/round1', function () {
    return view('matalomba/kdbi/finalronde1');
});
Route::get('/matalomba/finalKDBI/round2', function () {
    return view('matalomba/kdbi/finalronde2');
});
Route::get('/matalomba/finalKDBI/round3', function () {
    return view('matalomba/kdbi/finalronde3');
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
