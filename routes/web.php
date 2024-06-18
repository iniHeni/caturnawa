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
use App\Http\Controllers\pesertaedcController;
use App\Http\Controllers\day1edcController;
use App\Http\Controllers\day2edcController;
use App\Http\Controllers\day3edcController;
use App\Http\Controllers\day4edcController;
use App\Http\Controllers\day5edcController;
use App\Http\Controllers\pesertakdbiController;
use App\Http\Controllers\day1kdbiController;
use App\Http\Controllers\day2kdbiController;
use App\Http\Controllers\day3kdbiController;
use App\Http\Controllers\day4kdbiController;
use App\Http\Controllers\day5kdbiController;
use App\Http\Controllers\smsfinalController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
// index indo dan eng
Route::get('/', function () {
    return view('index');
})->name('utama');


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


// change Language

Route::get('locale/{lang}',[LocaleController::class,'setLocale']);

// Route post
Route::post('/sm/upload', [uploadsmController::class, 'uploadsm']);
Route::post('/lkti/upload', [uploadlktiController::class, 'upload']);
// Route Checkout
Route::post('/checkout', [OrderController::class, 'checkout']);
Route::post('/kdbi/checkout', [OrderkdbiController::class, 'checkout']);
Route::post('/lkti/checkout', [OrderlktiController::class, 'checkout']);
Route::post('/sm/checkout', [OrdersmController::class, 'checkout']);

Route::get('/homespc/{id}', [OrderlktiController::class, 'homespc']);
Route::get('/homesm/{id}', [ordersmController::class, 'homesm']);
Route::get('/homekdbi/{id}', [orderkdbiController::class, 'homekdbi']);
Route::get('/homeedc/{id}', [OrderController::class, 'homeedc']);

Route::get('matalomba/spc/detailpeserta/{id}', [pesertaspcController::class, 'detailpesertaspc'])->name('spc.detailpeserta');
Route::post('/tambah', [spcpenyisihanController::class, 'tambah']);
Route::post('/tambah/sf', [spcsemifinalController::class, 'tambahsf']);
Route::post('/tambah/final', [spcfinalController::class, 'tambahf']);
Route::get('matalomba/lkti/penyisihan', [spcpenyisihanController::class, 'penyisihan']);
Route::get('matalomba/lkti/sfinal', [spcsemifinalController::class, 'semifinal']);
Route::get('matalomba/lkti/final', [spcfinalController::class, 'final']);


Route::get('matalomba/sm/detailpeserta/{id}', [pesertasmController::class, 'detailpeserta'])->name('sm.detailpeserta');
Route::post('/tambahsm/penyisihan', [smsemifinalController::class, 'tambahp']);
Route::post('/tambahsm/final', [smfinalController::class, 'tambahf']);
Route::post('/tambahsm/sfinal', [smsfinalController::class, 'tambahsf']);
Route::get('matalomba/sm/penyisihan', [smsemifinalController::class, 'penyisihan']);
Route::get('matalomba/sm/penyisihan/detail/{id}', [smsemifinalController::class, 'detail'])->name('sm.detail');
Route::get('matalomba/sm/final', [smfinalController::class, 'final'])->name('sm.final');
Route::get('matalomba/sm/final/detail/{id}', [smfinalController::class, 'detailf'])->name('sm.detailf');
Route::get('matalomba/sm/sfinal', [smsfinalController::class, 'sfinal'])->name('sm.sfinal');
Route::get('matalomba/sm/sfinal/detail/{id}', [smsfinalController::class, 'detailsf'])->name('sm.detailsf');

Route::get('matalomba/edc/detailpeserta/{id}', [pesertaedcController::class, 'detailpesertaedc'])->name('edc.detailpeserta');
Route::post('/tambahpenyisihan/edcday1', [day1edcController::class, 'tambahedc']);
Route::get('matalomba/edc/penyisihan', [day1edcController::class, 'gabungan']);
Route::get('matalomba/edc/Semifinal', [day3edcController::class, 'gabungansf']);
Route::get('matalomba/edc/Final', [day5edcController::class, 'gabunganf']);
Route::get('matalomba/edc/penyisihan/round1', [day1edcController::class, 'day1round1']);
Route::get('matalomba/edc/day1round1/detail{sesi}', [day1edcController::class, 'detailday1r1'])->name('edc.detailday1r1');
Route::get('matalomba/edc/penyisihan/round2', [day1edcController::class, 'day1round2']);
Route::get('matalomba/edc/day1round2/detail{sesi}', [day1edcController::class, 'detailday1r2'])->name('edc.detailday1r2');
Route::post('/tambahedc2', [day2edcController::class, 'tambahedc2']);
Route::get('matalomba/edc/penyisihan/round3', [day2edcController::class, 'day2round1']);
Route::get('matalomba/edc/day2round1/detail{sesi}', [day2edcController::class, 'detailday2r1'])->name('edc.detailday2r1');
Route::get('matalomba/edc/penyisihan/round4', [day2edcController::class, 'day2round2']);
Route::get('matalomba/edc/day2round2/detail{sesi}', [day2edcController::class, 'detailday2r2'])->name('edc.detailday2r2');
Route::post('/tambahedc3', [day3edcController::class, 'tambahedc3']);
Route::get('matalomba/edc/semifinal/round1', [day3edcController::class, 'day3round1']);
Route::get('matalomba/edc/sfround1/detail{id}', [day3edcController::class, 'detailday3r1'])->name('edc.detailday3r1');
Route::get('matalomba/edc/semifinal/round2', [day3edcController::class, 'day3round2']);
Route::get('matalomba/edc/sfround2/detail{id}', [day3edcController::class, 'detailday3r2'])->name('edc.detailday3r2');
Route::post('/tambahedc4', [day4edcController::class, 'tambahedc4']);
Route::get('matalomba/edc/finalday1/round1', [day4edcController::class, 'day4round1']);
Route::get('matalomba/edc/fday1round1/detail{id}', [day4edcController::class, 'detailday4r1'])->name('edc.detailday4r1');
Route::get('matalomba/edc/finalday1/round2', [day4edcController::class, 'day4round2']);
Route::get('matalomba/edc/fday1round2/detail{id}', [day4edcController::class, 'detailday4r2'])->name('edc.detailday4r2');
Route::post('/tambahedc5', [day5edcController::class, 'tambahedc5']);
Route::get('matalomba/edc/finalday2/round1', [day5edcController::class, 'day5round1']);
Route::get('matalomba/edc/fday2round1/detail{id}', [day5edcController::class, 'detailday5r1'])->name('edc.detailday5r1');



Route::get('matalomba/kdbi/detailpeserta/{id}', [pesertakdbiController::class, 'detailpesertakdbi'])->name('kdbi.detailpeserta');
Route::post('/tambahkdbi1', [day1kdbiController::class, 'tambahkdbi']);
Route::get('matalomba/kdbi/penyisihan', [day1kdbiController::class, 'gabungankdbi']);
Route::get('matalomba/kdbi/Semifinal', [day3kdbiController::class, 'gabungankdbisf']);
Route::get('matalomba/kdbi/Final', [day5kdbiController::class, 'gabungankdbif']);
Route::get('matalomba/kdbi/penyisihan/round1', [day1kdbiController::class, 'day1r1']);
Route::get('matalomba/kdbi/day1round1/detail{sesi}', [day1kdbiController::class, 'detailday1r1'])->name('kdbi.detailday1r1');
Route::get('matalomba/kdbi/penyisihan/round2', [day1kdbiController::class, 'day1round2']);
Route::get('matalomba/kdbi/day1round2/detail{sesi}', [day1kdbiController::class, 'detailday1r2'])->name('kdbi.detailday1r2');
Route::post('/tambahkdbi2', [day2kdbiController::class, 'tambahkdbi2']);
Route::get('matalomba/kdbi/penyisihan/round3', [day2kdbiController::class, 'day2round1']);
Route::get('matalomba/kdbi/day2round1/detail{sesi}', [day2kdbiController::class, 'detailday2r1'])->name('kdbi.detailday2r1');
Route::get('matalomba/kdbi/penyisihan/round4', [day2kdbiController::class, 'day2round2']);
Route::get('matalomba/kdbi/day2round2/detail{sesi}', [day2kdbiController::class, 'detailday2r2'])->name('kdbi.detailday2r2');
Route::post('/tambahkdbi3', [day3kdbiController::class, 'tambahkdbi3']);
Route::get('matalomba/kdbi/semifinal/round1', [day3kdbiController::class, 'day3round1']);
Route::get('matalomba/kdbi/semifinal/round2', [day3kdbiController::class, 'day3round2']);
Route::post('/tambahkdbi4', [day4kdbiController::class, 'tambahkdbi4']);
Route::get('matalomba/kdbi/finalday1/round1', [day4kdbiController::class, 'day4round1']);
Route::get('matalomba/kdbi/finalday1/round2', [day4kdbiController::class, 'day4round2']);
Route::post('/tambahkdbi5', [day5kdbiController::class, 'tambahkdbi5']);
Route::get('matalomba/kdbi/finalday2/round1', [day5kdbiController::class, 'day5r1']);





Route::get('/sm/tambah/peserta', function () {
    return view('admin/sm/tambahpee');
});
//  Matalomba EDC 
Route::get('/matalomba/edc', [pesertaedcController::class, 'pesertaedc'])->name('edc.page');
Route::get('/matalomba/kdbi', [pesertakdbiController::class, 'pesertakdbi'])->name('kdbi.page');

Route::get('/matalomba/daftarEDC', function () {
    return view('matalomba/edc/daftarEDC');
});

Route::get('/matalomba/detailpesertaEDC', function () {
    return view('matalomba/edc/detailpeserta');
});

Route::get('/matalomba/scoreEDC', function () {
    return view('matalomba/edc/score');
});




Route::get('/matalomba/sfinalEDC', function () {
    return view('matalomba/edc/sfinal');
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

Route::get('/matalomba/UploadSPC', function () {
    return view('matalomba/lkti/uploadLKTI');
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

Route::get('/matalomba/UploadSM', function () {
    return view('matalomba/sm/uploadSM');
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
    return view('admin/EDC/mainmenuEDC')->name('edc.mainmenu');
});
// Route Beranda
Route::get('/admin/beranda', function () {
    return view('admin/EDC/beranda');
});




// Route penyisihanEDC

Route::get('/admin/penyisihanEDC', function () {
    return view('admin/EDC/penyisihanEDC');
});


// Route semifinalEDC


// Route finalEDC

Route::get('/admin/finalEDC', function () {
    return view('admin/EDC/finalEDC');
});





// Route penyisihanEDC

Route::get('/admin/penyisihanEDC', function () {
    return view('admin/EDC/penyisihanEDC');
});


// Route finalEDC

Route::get('/admin/finalEDC', function () {
    return view('admin/EDC/finalEDC');
});







Route::get('/admin/mainmenuKDBI', [AuthController::class, 'showMainMenu'])->name('mainmenu.show'); // Rute untuk menampilkan halaman main menu (GET)
Route::post('/admin/mainmenuKDBI', [AuthController::class, 'login'])->name('mainmenu.login');
Route::get('/admin/mainmenuEDC', [AuthController::class, 'showMainMenu'])->name('mainmenu.show'); // Rute untuk menampilkan halaman main menu (GET)
Route::post('/admin/mainmenuEDC', [AuthController::class, 'login'])->name('mainmenu.login'); // Rute untuk login (POST)





// Route Beranda
Route::get('/admin/beranda1', function () {
    return view('admin/KDBI/beranda');
});








// Route penyisihanKDBI

Route::get('/admin/penyisihanKDBI', function () {
    return view('admin/KDBI/penyisihanKDBI');
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








Route::get('/admin/mainmenuKDBI', function () {
    return view('admin/KDBI/mainmenuKDBI');
})->name('kdbi.mainmenu');
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
Route::get('/admin/sm/tambahpessfSM1', [smsfinalController::class, 'pesertap'])->name('sm.pesertap');
Route::get('/admin/pesertaSM', [pesertasmController::class, 'tampilpee'])->name('sm.tampilpee');
Route::get('/admin/SM/editpee/{id}', [pesertasmController::class, 'editpee'])->name('sm.editpee');
Route::post('/admin/SM/updatepee/{id}', [pesertasmController::class, 'updatepee'])->name('sm.updatepee');
Route::post('/admin/SM/hapuspee/{id}', [pesertasmController::class, 'hapuspee'])->name('sm.hapuspee');

Route::get('/admin/penyisihanSM', [smsemifinalController::class, 'tampilp'])->name('sm.tampilp');
Route::get('/admin/SM/editp/{id}', [smsemifinalController::class, 'editp'])->name('sm.editp');
Route::post('/admin/SM/updatep/{id}', [smsemifinalController::class, 'updatep'])->name('sm.updatep');
Route::post('/admin/SM/hapusp/{id}', [smsemifinalController::class, 'hapusp'])->name('sm.hapusp');

Route::get('/admin/semifinalSM', [smsfinalController::class, 'tampilsf'])->name('sm.tampilsf');
Route::get('/admin/SM/editsf/{id}', [smsfinalController::class, 'editsf'])->name('sm.editsf');
Route::post('/admin/SM/updatesf/{id}', [smsfinalController::class, 'updatesf'])->name('sm.updatesf');
Route::post('/admin/SM/hapussf/{id}', [smsfinalController::class, 'hapussf'])->name('sm.hapussf');

Route::get('/admin/finalSM', [smfinalController::class, 'tampilf'])->name('sm.tampilf');
Route::get('/admin/SM/editf/{id}', [smfinalController::class, 'editf'])->name('sm.editf');
Route::post('/admin/SM/updatef/{id}', [smfinalController::class, 'updatef'])->name('sm.updatef');
Route::post('/admin/SM/hapusf/{id}', [smfinalController::class, 'hapusf'])->name('sm.hapusf');











Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin/edc/tambahday1', [day1edcController::class, 'pesertaday1'])->name('edc.pesertaday1');
Route::get('/admin/edc/tambahday2', [day2edcController::class, 'pesertaday2'])->name('edc.pesertaday2');
Route::get('/admin/edc/tambahsf', [day3edcController::class, 'pesertaedcsf'])->name('edc.pesertasf');
Route::get('/admin/edc/tambahday1f', [day4edcController::class, 'pesertaday1f'])->name('edc.pesertaday1f');
Route::get('/admin/edc/tambahday2f', [day5edcController::class, 'pesertaday2f'])->name('edc.pesertaday2f');
Route::get('/admin/pesertaEDC', [pesertaedcController::class, 'tampiledcpe'])->name('edc.tampiledcpe');
Route::get('/admin/edc/editedcpe/{id}', [pesertaedcController::class, 'editedcpe'])->name('edc.editedcpe');
Route::post('/admin/edc/updateedcpe/{id}', [pesertaedcController::class, 'updateedcpe'])->name('edc.updateedcpe');
Route::post('/admin/edc/hapusedcpe/{id}', [pesertaedcController::class, 'hapusedcpe'])->name('edc.hapusedcpe');

Route::get('/admin/penyisihan/day1', [day1edcController::class, 'tampiledc'])->name('edc.tampiledc');
Route::get('/admin/edc/editedc/{id}', [day1edcController::class, 'editedc'])->name('edc.editedc');
Route::post('/admin/edc/updateedc/{id}', [day1edcController::class, 'updateedc'])->name('edc.updateedc');
Route::post('/admin/edc/hapusedc/{id}', [day1edcController::class, 'hapusedc'])->name('edc.hapusedc');

Route::get('/admin/penyisihan/day2', [day2edcController::class, 'tampiledc2'])->name('edc.tampiledc2');
Route::get('/admin/edc/editedc2/{id}', [day2edcController::class, 'editedc2'])->name('edc.editedc2');
Route::post('/admin/edc/updateedc2/{id}', [day2edcController::class, 'updateedc2'])->name('edc.updateedc2');
Route::post('/admin/edc/hapusedc2/{id}', [day2edcController::class, 'hapusedc2'])->name('edc.hapusedc2');

Route::get('/admin/Semifinal', [day3edcController::class, 'tampiledc3'])->name('edc.tampiledc3');
Route::get('/admin/edc/editedc3/{id}', [day3edcController::class, 'editedc3'])->name('edc.editedc3');
Route::post('/admin/edc/updateedc3/{id}', [day3edcController::class, 'updateedc3'])->name('edc.updateedc3');
Route::post('/admin/edc/hapusedc3/{id}', [day3edcController::class, 'hapusedc3'])->name('edc.hapusedc3');

Route::get('/admin/Final/day1', [day4edcController::class, 'tampiledc4'])->name('edc.tampiledc4');
Route::get('/admin/edc/editedc4/{id}', [day4edcController::class, 'editedc4'])->name('edc.editedc4');
Route::post('/admin/edc/updateedc4/{id}', [day4edcController::class, 'updateedc4'])->name('edc.updateedc4');
Route::post('/admin/edc/hapusedc4/{id}', [day4edcController::class, 'hapusedc4'])->name('edc.hapusedc4');

Route::get('/admin/Final/day2', [day5edcController::class, 'tampiledc5'])->name('edc.tampiledc5');
Route::get('/admin/edc/editedc5/{id}', [day5edcController::class, 'editedc5'])->name('edc.editedc5');
Route::post('/admin/edc/updateedc5/{id}', [day5edcController::class, 'updateedc5'])->name('edc.updateedc5');
Route::post('/admin/edc/hapusedc5/{id}', [day5edcController::class, 'hapusedc5'])->name('edc.hapusedc5');

/// batas edc

Route::get('/admin/kdbi/tambahday1', [day1kdbiController::class, 'pesertaday1'])->name('kdbi.pesertaday1');
Route::get('/admin/kdbi/tambahday2', [day2kdbiController::class, 'pesertaday2'])->name('kdbi.pesertaday2');
Route::get('/admin/kdbi/tambahsf', [day3kdbiController::class, 'pesertakdbisf'])->name('kdbi.pesertasf');
Route::get('/admin/kdbi/tambahday1f', [day4kdbiController::class, 'pesertaday1f'])->name('kdbi.pesertaday1f');
Route::get('/admin/kdbi/tambahday2f', [day5kdbiController::class, 'pesertaday2f'])->name('kdbi.pesertaday2f');
Route::get('/admin/pesertaKDBI', [pesertakdbiController::class, 'tampilkdbipe'])->name('kdbi.tampilkdbipe');
Route::get('/admin/kdbi/editkdbipe/{id}', [pesertakdbiController::class, 'editkdbipe'])->name('kdbi.editkdbipe');
Route::post('/admin/kdbi/updatekdbipe/{id}', [pesertakdbiController::class, 'updatekdbipe'])->name('kdbi.updatekdbipe');
Route::post('/admin/kdbi/hapuskdbipe/{id}', [pesertakdbiController::class, 'hapuskdbipe'])->name('kdbi.hapuskdbipe');

Route::get('/admin/penyisihankdbi/day1', [day1kdbiController::class, 'tampilkdbi'])->name('kdbi.tampilkdbi');
Route::get('/admin/kdbi/editkdbi/{id}', [day1kdbiController::class, 'editkdbi'])->name('kdbi.editkdbi');
Route::post('/admin/kdbi/updatekdbi/{id}', [day1kdbiController::class, 'updatekdbi'])->name('kdbi.updatekdbi');
Route::post('/admin/kdbi/hapuskdbi/{id}', [day1kdbiController::class, 'hapuskdbi'])->name('kdbi.hapuskdbi');

Route::get('/admin/penyisihankdbi/day2', [day2kdbiController::class, 'tampilkdbi2'])->name('kdbi.tampilkdbi2');
Route::get('/admin/kdbi/editkdbi2/{id}', [day2kdbiController::class, 'editkdbi2'])->name('kdbi.editkdbi2');
Route::post('/admin/kdbi/updatekdbi2/{id}', [day2kdbiController::class, 'updatekdbi2'])->name('kdbi.updatekdbi2');
Route::post('/admin/kdbi/hapuskdbi2/{id}', [day2kdbiController::class, 'hapuskdbi2'])->name('kdbi.hapuskdbi2');

Route::get('/admin/SemifinalKDBI', [day3kdbiController::class, 'tampilkdbi3'])->name('kdbi.tampilkdbi3');
Route::get('/admin/kdbi/editkdbi3/{id}', [day3kdbiController::class, 'editkdbi3'])->name('kdbi.editkdbi3');
Route::post('/admin/kdbi/updatekdbi3/{id}', [day3kdbiController::class, 'updatekdbi3'])->name('kdbi.updatekdbi3');
Route::post('/admin/kdbi/hapuskdbi3/{id}', [day3kdbiController::class, 'hapuskdbi3'])->name('kdbi.hapuskdbi3');

Route::get('/admin/FinalKDBI/day1', [day4kdbiController::class, 'tampilkdbi4'])->name('kdbi.tampilkdbi4');
Route::get('/admin/kdbi/editkdbi4/{id}', [day4kdbiController::class, 'editkdbi4'])->name('kdbi.editkdbi4');
Route::post('/admin/kdbi/updatekdbi4/{id}', [day4kdbiController::class, 'updatekdbi4'])->name('kdbi.updatekdbi4');
Route::post('/admin/kdbi/hapuskdbi4/{id}', [day4kdbiController::class, 'hapuskdbi4'])->name('kdbi.hapuskdbi4');

Route::get('/admin/FinalKDBI/day2', [day5kdbiController::class, 'tampilkdbi5'])->name('kdbi.tampilkdbi5');
Route::get('/admin/kdbi/editkdbi5/{id}', [day5kdbiController::class, 'editkdbi5'])->name('kdbi.editkdbi5');
Route::post('/admin/kdbi/updatekdbi5/{id}', [day5kdbiController::class, 'updatekdbi5'])->name('kdbi.updatekdbi5');
Route::post('/admin/kdbi/hapuskdbi5/{id}', [day5kdbiController::class, 'hapuskdbi5'])->name('kdbi.hapuskdbi5');