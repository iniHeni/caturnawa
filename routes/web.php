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

///////////////////  EDC  ///////////////////////
// Route Data Peserta
Route::get('/admin/pesertaEDC', function () {
    return view('admin/EDC/sectionp/data/data-pesertaEDC');
});

// Route Data Peserta2
Route::get('/admin/pesertaEDC2', function () {
    return view('admin/EDC/sectionp/data/data-pesertaEDC2');
});

// Route Data Peserta3
Route::get('/admin/pesertaEDC3', function () {
    return view('admin/EDC/sectionp/data/data-pesertaEDC3');
});

// Route Data Peserta4
Route::get('/admin/pesertaEDC4', function () {
    return view('admin/EDC/sectionp/data/data-pesertaEDC4');
});

// Route Data Peserta5
Route::get('/admin/pesertaEDC5', function () {
    return view('admin/EDC/sectionp/data/data-pesertaEDC5');
});

// Route Data Peserta6
Route::get('/admin/pesertaEDC6', function () {
    return view('admin/EDC/sectionp/data/data-pesertaEDC6');
});


// Route Data Peserta d2
Route::get('/admin/pesertaEDCd2', function () {
    return view('admin/EDC/sectionp/data2/data-pesertaEDC');
});

// Route Data Peserta2 d2
Route::get('/admin/pesertaEDC2d2', function () {
    return view('admin/EDC/sectionp/data2/data-pesertaEDC2');
});

// Route Data Peserta3 d2
Route::get('/admin/pesertaEDC3d2', function () {
    return view('admin/EDC/sectionp/data2/data-pesertaEDC3');
});

// Route Data Peserta4 d2
Route::get('/admin/pesertaEDC4d2', function () {
    return view('admin/EDC/sectionp/data2/data-pesertaEDC4');
});

// Route Data Peserta5 d2
Route::get('/admin/pesertaEDC5d2', function () {
    return view('admin/EDC/sectionp/data2/data-pesertaEDC5');
});

// Route Data Peserta6 d2
Route::get('/admin/pesertaEDC6d2', function () {
    return view('admin/EDC/sectionp/data2/data-pesertaEDC6');
});



// Route Data Peserta d3
Route::get('/admin/pesertaEDCd3', function () {
    return view('admin/EDC/sectionp/data3/data-pesertaEDC');
});

// Route Data Peserta2 d3
Route::get('/admin/pesertaEDC2d3', function () {
    return view('admin/EDC/sectionp/data3/data-pesertaEDC2');
});

// Route Data Peserta3 d3
Route::get('/admin/pesertaEDC3d3', function () {
    return view('admin/EDC/sectionp/data3/data-pesertaEDC3');
});

// Route Data Peserta4 d3
Route::get('/admin/pesertaEDC4d3', function () {
    return view('admin/EDC/sectionp/data3/data-pesertaEDC4');
});

// Route Data Peserta5 d3
Route::get('/admin/pesertaEDC5d3', function () {
    return view('admin/EDC/sectionp/data3/data-pesertaEDC5');
});

// Route Data Peserta6 d3
Route::get('/admin/pesertaEDC6d3', function () {
    return view('admin/EDC/sectionp/data3/data-pesertaEDC6');
});




// Route Data Peserta d4
Route::get('/admin/pesertaEDCd4', function () {
    return view('admin/EDC/sectionp/data4/data-pesertaEDC');
});

// Route Data Peserta2 d4
Route::get('/admin/pesertaEDC2d4', function () {
    return view('admin/EDC/sectionp/data4/data-pesertaEDC2');
});

// Route Data Peserta3 d4
Route::get('/admin/pesertaEDC3d4', function () {
    return view('admin/EDC/sectionp/data4/data-pesertaEDC3');
});

// Route Data Peserta4 d4
Route::get('/admin/pesertaEDC4d4', function () {
    return view('admin/EDC/sectionp/data4/data-pesertaEDC4');
});

// Route Data Peserta5 d4
Route::get('/admin/pesertaEDC5d4', function () {
    return view('admin/EDC/sectionp/data4/data-pesertaEDC5');
});

// Route Data Peserta6 d4
Route::get('/admin/pesertaEDC6d4', function () {
    return view('admin/EDC/sectionp/data4/data-pesertaEDC6');
});



// Route penyisihanEDC

Route::get('/admin/penyisihanEDC', function () {
    return view('admin/EDC/penyisihanEDC');
});


// Route semifinalEDC

Route::get('/admin/semifinalEDC', function () {
    return view('admin/EDC/semifinalEDC');
});

// Route finalEDC

Route::get('/admin/finalEDC', function () {
    return view('admin/EDC/finalEDC');
});




///////////////////////////////////////////////////////////////
// Route Data Peserta sf
Route::get('/admin/pesertaEDCsf', function () {
    return view('admin/EDC/sectionsf/data/data-pesertaEDC');
});

Route::get('/admin/pesertaEDCsf2', function () {
    return view('admin/EDC/sectionsf/data2/data-pesertaEDC');
});


///////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////

// Route Data Peserta f
Route::get('/admin/pesertaEDCf', function () {
    return view('admin/EDC/sectionf/data/data-pesertaEDC');
});

Route::get('/admin/pesertaEDCf2', function () {
    return view('admin/EDC/sectionf/data2/data-pesertaEDC');
});

Route::get('/admin/pesertaEDCf3', function () {
    return view('admin/EDC/sectionf/data3/data-pesertaEDC');
});



///////////////////////////////////////////////////////////////////


// Route penyisihanEDC

Route::get('/admin/penyisihanEDC', function () {
    return view('admin/EDC/penyisihanEDC');
});


// Route semifinalEDC

Route::get('/admin/semifinalEDC', function () {
    return view('admin/EDC/semifinalEDC');
});

// Route finalEDC

Route::get('/admin/finalEDC', function () {
    return view('admin/EDC/finalEDC');
});



//Route Section1
Route::get('/admin/section1EDC', function () {
    return view('admin/EDC/sectionp/section1');
});

//Route Section2
Route::get('/admin/section2EDC', function () {
    return view('admin/EDC/sectionp/section2');
});


//Route Section3
Route::get('/admin/section3EDC', function () {
    return view('admin/EDC/sectionp/section3');
});


//Route Section4
Route::get('/admin/section4EDC', function () {
    return view('admin/EDC/sectionp/section4');
});

////////////////////////  EDC ////////////////////////////////





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


///////////////////  KDBI  ///////////////////////
// Route Data Peserta
Route::get('/admin/pesertaKDBI', function () {
    return view('admin/KDBI/sectionp/data/data-pesertaKDBI');
});

// Route Data Peserta2
Route::get('/admin/pesertaKDBI2', function () {
    return view('admin/KDBI/sectionp/data/data-pesertaKDBI2');
});

// Route Data Peserta3
Route::get('/admin/pesertaKDBI3', function () {
    return view('admin/KDBI/sectionp/data/data-pesertaKDBI3');
});

// Route Data Peserta4
Route::get('/admin/pesertaKDBI4', function () {
    return view('admin/KDBI/sectionp/data/data-pesertaKDBI4');
});

// Route Data Peserta5
Route::get('/admin/pesertaKDBI5', function () {
    return view('admin/KDBI/sectionp/data/data-pesertaKDBI5');
});

// Route Data Peserta6
Route::get('/admin/pesertaKDBI6', function () {
    return view('admin/KDBI/sectionp/data/data-pesertaKDBI6');
});


// Route Data Peserta d2
Route::get('/admin/pesertaKDBId2', function () {
    return view('admin/KDBI/sectionp/data2/data-pesertaKDBI');
});

// Route Data Peserta2 d2
Route::get('/admin/pesertaKDBI2d2', function () {
    return view('admin/KDBI/sectionp/data2/data-pesertaKDBI2');
});

// Route Data Peserta3 d2
Route::get('/admin/pesertaKDBI3d2', function () {
    return view('admin/KDBI/sectionp/data2/data-pesertaKDBI3');
});

// Route Data Peserta4 d2
Route::get('/admin/pesertaKDBI4d2', function () {
    return view('admin/KDBI/sectionp/data2/data-pesertaKDBI4');
});

// Route Data Peserta5 d2
Route::get('/admin/pesertaKDBI5d2', function () {
    return view('admin/KDBI/sectionp/data2/data-pesertaKDBI5');
});

// Route Data Peserta6 d2
Route::get('/admin/pesertaKDBI6d2', function () {
    return view('admin/KDBI/sectionp/data2/data-pesertaKDBI6');
});



// Route Data Peserta d3
Route::get('/admin/pesertaKDBId3', function () {
    return view('admin/KDBI/sectionp/data3/data-pesertaKDBI');
});

// Route Data Peserta2 d3
Route::get('/admin/pesertaKDBI2d3', function () {
    return view('admin/KDBI/sectionp/data3/data-pesertaKDBI2');
});

// Route Data Peserta3 d3
Route::get('/admin/pesertaKDBI3d3', function () {
    return view('admin/KDBI/sectionp/data3/data-pesertaKDBI3');
});

// Route Data Peserta4 d3
Route::get('/admin/pesertaKDBI4d3', function () {
    return view('admin/KDBI/sectionp/data3/data-pesertaKDBI4');
});

// Route Data Peserta5 d3
Route::get('/admin/pesertaKDBI5d3', function () {
    return view('admin/KDBI/sectionp/data3/data-pesertaKDBI5');
});

// Route Data Peserta6 d3
Route::get('/admin/pesertaKDBI6d3', function () {
    return view('admin/KDBI/sectionp/data3/data-pesertaKDBI6');
});




// Route Data Peserta d4
Route::get('/admin/pesertaKDBId4', function () {
    return view('admin/KDBI/sectionp/data4/data-pesertaKDBI');
});

// Route Data Peserta2 d4
Route::get('/admin/pesertaKDBI2d4', function () {
    return view('admin/KDBI/sectionp/data4/data-pesertaKDBI2');
});

// Route Data Peserta3 d4
Route::get('/admin/pesertaKDBI3d4', function () {
    return view('admin/KDBI/sectionp/data4/data-pesertaKDBI3');
});

// Route Data Peserta4 d4
Route::get('/admin/pesertaKDBI4d4', function () {
    return view('admin/KDBI/sectionp/data4/data-pesertaKDBI4');
});

// Route Data Peserta5 d4
Route::get('/admin/pesertaKDBI5d4', function () {
    return view('admin/KDBI/sectionp/data4/data-pesertaKDBI5');
});

// Route Data Peserta6 d4
Route::get('/admin/pesertaKDBI6d4', function () {
    return view('admin/KDBI/sectionp/data4/data-pesertaKDBI6');
});



// Route penyisihanKDBI

Route::get('/admin/penyisihanKDBI', function () {
    return view('admin/KDBI/penyisihanKDBI');
});


// Route semifinalKDBI

Route::get('/admin/semifinalKDBI', function () {
    return view('admin/KDBI/semifinalKDBI');
});

// Route finalKDBI

Route::get('/admin/finalKDBI', function () {
    return view('admin/KDBI/finalKDBI');
});




///////////////////////////////////////////////////////////////
// Route Data Peserta sf
Route::get('/admin/pesertaKDBIsf', function () {
    return view('admin/KDBI/sectionsf/data/data-pesertaKDBI');
});

Route::get('/admin/pesertaKDBIsf2', function () {
    return view('admin/KDBI/sectionsf/data2/data-pesertaKDBI');
});


///////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////

// Route Data Peserta f
Route::get('/admin/pesertaKDBIf', function () {
    return view('admin/KDBI/sectionf/data/data-pesertaKDBI');
});

Route::get('/admin/pesertaKDBIf2', function () {
    return view('admin/KDBI/sectionf/data2/data-pesertaKDBI');
});

Route::get('/admin/pesertaKDBIf3', function () {
    return view('admin/KDBI/sectionf/data3/data-pesertaKDBI');
});



///////////////////////////////////////////////////////////////////


// Route penyisihanKDBI

Route::get('/admin/penyisihanKDBI', function () {
    return view('admin/KDBI/penyisihanKDBI');
});


// Route semifinalKDBI

Route::get('/admin/semifinalKDBI', function () {
    return view('admin/KDBI/semifinalKDBI');
});

// Route finalKDBI

Route::get('/admin/finalKDBI', function () {
    return view('admin/KDBI/finalKDBI');
});



//Route Section1
Route::get('/admin/section1KDBI', function () {
    return view('admin/KDBI/sectionp/section1');
});

//Route Section2
Route::get('/admin/section2KDBI', function () {
    return view('admin/KDBI/sectionp/section2');
});


//Route Section3
Route::get('/admin/section3KDBI', function () {
    return view('admin/KDBI/sectionp/section3');
});


//Route Section4
Route::get('/admin/section4KDBI', function () {
    return view('admin/KDBI/sectionp/section4');
});

////////////////////////  KDBI  ////////////////////////////////




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


// Route penyisihanLKTI

Route::get('/admin/penyisihanLKTI', function () {
    return view('admin/LKTI/penyisihanLKTI');
});


// Route semifinalLKTI

Route::get('/admin/semifinalLKTI', function () {
    return view('admin/LKTI/semifinalLKTI');
});

// Route finalLKTI

Route::get('/admin/finalLKTI', function () {
    return view('admin/LKTI/finalLKTI');
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


// Route penyisihanSM

Route::get('/admin/penyisihanSM', function () {
    return view('admin/SM/penyisihanSM');
});


// Route semifinalSM

Route::get('/admin/semifinalSM', function () {
    return view('admin/SM/semifinalSM');
});

// Route finalSM

Route::get('/admin/finalSM', function () {
    return view('admin/SM/finalSM');
});


Route::get('/admin/mainmenuSM', [AuthController::class, 'showMainMenu'])->name('mainmenu.show'); // Rute untuk menampilkan halaman main menu (GET)
Route::post('/admin/mainmenuSM', [AuthController::class, 'login'])->name('mainmenu.login'); // Rute untuk login (POST)










Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/admin/dashboard', function () {
//     return view('admin/dashboard');
// });
