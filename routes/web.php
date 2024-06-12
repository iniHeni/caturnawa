<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderkdbiController;
use App\Http\Controllers\OrderlktiController;
use App\Http\Controllers\OrdersmController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\uploadlktiController;
use App\Http\Controllers\uploadsmController;
use App\Http\Controllers\spcpenyisihanController;
use App\Http\Controllers\spcsemifinalController;
use App\Http\Controllers\spcfinalController;
use App\Http\Controllers\penyisihanutamaController;
use App\Http\Controllers\loginadminController;
use App\Http\Controllers\smsemifinalController;
use App\Http\Controllers\smfinalController;
use App\Http\Controllers\pesertaspcController;
use App\Http\Controllers\pesertasmController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
// index indo dan eng
Route::get('/', function () {
    return view('index');
})->name('utama');


<<<<<<< HEAD
=======
//Route Periode

Route::get('/periodeKDBI', function () {
    return view('matalomba/kdbi/harga');
});

Route::get('/periodeSM', function () {
    return view('matalomba/sm/harga');
});

Route::get('/periodeLKTI', function () {
    return view('matalomba/LKTI/harga');
});

Route::get('/periodeEDC', function () {
    return view('matalomba/edc/harga');
});


>>>>>>> df50c09c227fb1679bd25e4f1c00c7736348e50e
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


Route::get('matalomba/spc/detailpeserta/{id}', [pesertaspcController::class, 'detailpesertaspc'])->name('spc.detailpeserta');
Route::post('/tambah/peserta', [pesertaspcController::class, 'tambahpe']);
Route::post('/tambah', [spcpenyisihanController::class, 'tambah']);
Route::post('/tambah/sf', [spcsemifinalController::class, 'tambahsf']);
Route::post('/tambah/final', [spcfinalController::class, 'tambahf']);
Route::get('matalomba/lkti/penyisihan', [spcpenyisihanController::class, 'penyisihan']);
Route::get('matalomba/lkti/sfinal', [spcsemifinalController::class, 'semifinal']);
Route::get('matalomba/lkti/final', [spcfinalController::class, 'final']);


Route::get('matalomba/sm/detailpeserta/{id}', [pesertasmController::class, 'detailpeserta'])->name('sm.detailpeserta');
Route::post('/tambahsm/peserta', [pesertasmController::class, 'tambahpee']);
Route::post('/tambahsm/penyisihan', [smsemifinalController::class, 'tambahp']);
Route::post('/tambahsm/final', [smfinalController::class, 'tambahf']);
Route::get('matalomba/sm/penyisihan', [smsemifinalController::class, 'penyisihan']);
Route::get('matalomba/sm/penyisihan/detail/{id}', [smsemifinalController::class, 'detail'])->name('sm.detail');
Route::get('matalomba/sm/final', [smfinalController::class, 'final'])->name('sm.final');
Route::get('matalomba/sm/final/detail/{id}', [smfinalController::class, 'detailf'])->name('sm.detailf');



Route::get('/spc/tambah/peserta', function () {
    return view('admin/LKTI/tambahpe');
});


Route::get('/sm/tambah/peserta', function () {
    return view('admin/sm/tambahpee');
});
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
Route::get('/matalomba/spc', [pesertaspcController::class, 'pesertaspc'])->name('spc.page');

Route::get('/matalomba/daftarKTI', function () {
    return view('matalomba/lkti/daftarLKTI');
});

Route::get('/matalomba/loginspc', function () {
    return view('matalomba/lkti/login');
});



Route::get('/matalomba/scoreLKTI', function () {
    return view('matalomba/lkti/score');
});

// score LKTI


Route::get('/matalomba/sfinalLKTI', function () {
    return view('matalomba/lkti/sfinal');
});

Route::get('/matalomba/finalLKTI', function () {
    return view('matalomba/lkti/final');
});

Route::get('/matalomba/shortmovie', [pesertasmController::class, 'peserta'])->name('sm.page');


Route::get('/matalomba/daftarSM', function () {
    return view('matalomba/sm/daftarSM');
});

Route::get('/matalomba/loginsm', function () {
    return view('matalomba/sm/login');
});

Route::get('/matalomba/uploadSM', function () {
    return view('matalomba/sm/uploadSM');
});

Route::get('/matalomba/scoreSM', function () {
    return view('matalomba/sm/score');
});

Route::post('/login/handler', [loginadminController::class, 'login'])->name('login.handler');

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




Route::get('/admin/mainmenuKDBI', [AuthController::class, 'showMainMenu'])->name('mainmenu.showw'); // Rute untuk menampilkan halaman main menu (GET)
Route::post('/admin/mainmenuKDBI', [AuthController::class, 'login'])->name('mainmenu.loginn'); // Rute untuk login (POST)








// Route Admin LKTI
Route::get('/admin/mainmenuLKTI1', function () {
    return view('admin/LKTI/mainmenuLKTI');
})->name('spc.mainmenu');

// Route Beranda
Route::get('/admin/beranda1', function () {
    return view('admin/LKTI/beranda');
});


// Route penyisihanLKTI
Route::get('/admin/spc/tambahpeLKTI1', [spcpenyisihanController::class, 'pesertaa'])->name('spc.pesertaa');
Route::get('/admin/spc/tambahpesfLKTI1', [spcsemifinalController::class, 'pesertaasf'])->name('spc.pesertaasf');
Route::get('/admin/spc/tambahpefLKTI1', [spcfinalController::class, 'pesertaaf'])->name('spc.pesertaaf');
Route::get('/admin/pesertaLKTI1', [pesertaspcController::class, 'tampilpe'])->name('spc.tampilpe');
Route::get('/admin/LKTI/editpe/{id}', [pesertaspcController::class, 'editpe'])->name('spc.editpe');
Route::post('/admin/LKTI/updatepe/{id}', [pesertaspcController::class, 'updatepe'])->name('spc.updatepe');
Route::post('/admin/LKTI/hapuspe/{id}', [pesertaspcController::class, 'hapuspe'])->name('spc.hapuspe');

Route::get('/admin/penyisihanLKTI1', [spcpenyisihanController::class, 'tampil'])->name('spc.tampil');
Route::get('/admin/LKTI/edit/{id}', [spcpenyisihanController::class, 'edit'])->name('spc.edit');
Route::post('/admin/LKTI/update/{id}', [spcpenyisihanController::class, 'update'])->name('spc.update');
Route::post('/admin/LKTI/hapus/{id}', [spcpenyisihanController::class, 'hapus'])->name('spc.hapus');

Route::get('/admin/semifinalLKTI1', [spcsemifinalController::class, 'tampilsf'])->name('spc.tampilsf');
Route::get('/admin/LKTI/editsf/{id}', [spcsemifinalController::class, 'editsf'])->name('spc.editsf');
Route::post('/admin/LKTI/updatesf/{id}', [spcsemifinalController::class, 'updatesf'])->name('spc.updatesf');
Route::post('/admin/LKTI/hapussf/{id}', [spcsemifinalController::class, 'hapussf'])->name('spc.hapussf');

Route::get('/admin/finalLKTI1', [spcfinalController::class, 'tampilf'])->name('spc.tampilf');
Route::get('/admin/LKTI/editf/{id}', [spcfinalController::class, 'editf'])->name('spc.editf');
Route::post('/admin/LKTI/updatef/{id}', [spcfinalController::class, 'updatef'])->name('spc.updatef');
Route::post('/admin/LKTI/hapusf/{id}', [spcfinalController::class, 'hapusf'])->name('spc.hapusf');



Route::get('/admin/mainmenuLKTI', [AuthController::class, 'showMainMenu'])->name('mainmenu.showlkti'); // Rute untuk menampilkan halaman main menu (GET)
Route::post('/admin/mainmenuLKTI', [AuthController::class, 'login'])->name('mainmenu.loginlkti'); // Rute untuk login (POST)




// Route Admin SM
Route::get('/admin/mainmenuSM1', function () {
    return view('admin/SM/mainmenuSM');
})->name('sm.mainmenu');

// Route Beranda
Route::get('/admin/beranda1', function () {
    return view('admin/SM/beranda');
});

Route::get('/admin/sm/tambahpesfSM1', [smsemifinalController::class, 'pesertasf'])->name('sm.pesertasf');
Route::get('/admin/sm/tambahpefSM1', [smfinalController::class, 'pesertaf'])->name('sm.pesertaf');
Route::get('/admin/pesertaSM', [pesertasmController::class, 'tampilpee'])->name('sm.tampilpee');
Route::get('/admin/SM/editpee/{id}', [pesertasmController::class, 'editpee'])->name('sm.editpee');
Route::post('/admin/SM/updatepee/{id}', [pesertasmController::class, 'updatepee'])->name('sm.updatepee');
Route::post('/admin/SM/hapuspee/{id}', [pesertasmController::class, 'hapuspee'])->name('sm.hapuspee');

Route::get('/admin/penyisihanSM', [smsemifinalController::class, 'tampilp'])->name('sm.tampilp');
Route::get('/admin/SM/editp/{id}', [smsemifinalController::class, 'editp'])->name('sm.editp');
Route::post('/admin/SM/updatep/{id}', [smsemifinalController::class, 'updatep'])->name('sm.updatep');
Route::post('/admin/SM/hapusp/{id}', [smsemifinalController::class, 'hapusp'])->name('sm.hapusp');

Route::get('/admin/finalSM', [smfinalController::class, 'tampilf'])->name('sm.tampilf');
Route::get('/admin/SM/editf/{id}', [smfinalController::class, 'editf'])->name('sm.editf');
Route::post('/admin/SM/updatef/{id}', [smfinalController::class, 'updatef'])->name('sm.updatef');
Route::post('/admin/SM/hapusf/{id}', [smfinalController::class, 'hapusf'])->name('sm.hapusf');











Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/admin/dashboard', function () {
//     return view('admin/dashboard');
// });
