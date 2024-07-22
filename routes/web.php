<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderkdbiController;
use App\Http\Controllers\OrderlktiController;
use App\Http\Controllers\OrdersmController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\UploadlktiController;
use App\Http\Controllers\UploadsmController;
use App\Http\Controllers\SpcpenyisihanController;
use App\Http\Controllers\SpcsemifinalController;
use App\Http\Controllers\SpcfinalController;
use App\Http\Controllers\PenyisihanutamaController;
use App\Http\Controllers\LoginadminController;
use App\Http\Controllers\SmsemifinalController;
use App\Http\Controllers\SmfinalController;
use App\Http\Controllers\PesertaspcController;
use App\Http\Controllers\PesertasmController;
use App\Http\Controllers\PesertaedcController;
use App\Http\Controllers\Day1edcController;
use App\Http\Controllers\Day2edcController;
use App\Http\Controllers\Day3edcController;
use App\Http\Controllers\Day4edcController;
use App\Http\Controllers\Day5edcController;
use App\Http\Controllers\PesertakdbiController;
use App\Http\Controllers\Day1kdbiController;
use App\Http\Controllers\Day2kdbiController;
use App\Http\Controllers\Day3kdbiController;
use App\Http\Controllers\Day4kdbiController;
use App\Http\Controllers\Day5kdbiController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthMiddleware;


// Route::group(['prefix' => 'admin','middleware' =>['auth'], 'as' => 'admin.'] , function(){})



// Route Admin EDC
// Route::get('/admin/mainmenuEDC', function () {
//     return view('admin/EDC/mainmenuEDC');
// })->name('mainmenu.show')->middleware(AuthMiddleware::class);

// Route::get('/admin/mainmenuKDBI', function () {
//     return view('admin/KDBI/mainmenuKDBI');
// })->name('mainmenukdbi.show')->middleware(AuthMiddleware::class);

// // Route Admin LKTI
// Route::get('/admin/mainmenuLKTI', function () {
//     return view('admin/LKTI/mainmenuLKTI');
// })->name('mainmenu.showlkti')->middleware(AuthMiddleware::class);

// // Route Admin SM
// Route::get('/admin/mainmenuSM', function () {
//     return view('admin/SM/mainmenuSM');
// })->name('mainmenu.showsm')->middleware(AuthMiddleware::class);


// Route Login
Route::get('/admin/login', function () {
    return view('admin/loginadmin');
});



////////////////////////  KDBI  ////////////////////////////////

// Route::get('/admin/mainmenuKDBI', function () {
//     return view('admin/KDBI/mainmenuKDBI');
// })->name('kdbi.mainmenu');

// Route Beranda
Route::get('/admin/beranda1', function () {
    return view('admin/KDBI/beranda');
})->middleware('auth');

// Route penyisihanKDBI

Route::get('/admin/penyisihanKDBI', function () {
    return view('admin/KDBI/penyisihanKDBI');
})->middleware('auth');

// Route finalKDBI

Route::get('/admin/finalKDBI', function () {
    return view('admin/KDBI/finalKDBI');
})->middleware('auth');







// Route Admin LKTI
// Route::get('/admin/mainmenuLKTI1', function () {
//     return view('admin/LKTI/mainmenuLKTI');
// })->name('spc.mainmenu');

// Route Beranda
Route::get('/admin/beranda1', function () {
    return view('admin/LKTI/beranda');
})->middleware('auth');

// Route Admin SM
Route::get('/admin/mainmenuSM1', function () {
    return view('admin/SM/mainmenuSM');
})->name('sm.mainmenu')->middleware('auth');

// Route Beranda
Route::get('/admin/beranda1', function () {
    return view('admin/SM/beranda');
})->middleware('auth');


    Route::get('/admin/mainmenuEDC', function () {
        return view('admin/EDC/mainmenuEDC');
    })->name('mainmenu.showedc')->middleware('auth');

    Route::get('/admin/mainmenuKDBI', function () {
        return view('admin/KDBI/mainmenuKDBI');
    })->name('mainmenukdbi.showkdbi')->middleware('auth');

    Route::get('/admin/mainmenuLKTI1', function () {
        return view('admin/LKTI/mainmenuLKTI');
    })->name('mainmenu.showlkti')->middleware('auth');

    Route::get('/admin/mainmenuSM1', function () {
        return view('admin/SM/mainmenuSM');
    })->name('mainmenu.showsm')->middleware('auth');

    Route::get('/admin/penyisihanEDC', function () {
        return view('admin/EDC/penyisihanEDC');
    })->middleware('auth');


// Route Login
Route::get('/admin/login', function () {
    return view('admin/loginadmin');
})->name('login');





// index indo dan eng
Route::get('/', function () {
    return view('index');
})->name('utama');

// Route Admin EDC
// Route::get('/admin/mainmenuEDC', function () {
//     return view('admin/EDC/mainmenuEDC')->name('edc.mainmenu');
// });
// Route Beranda
Route::get('/admin/beranda', function () {
    return view('admin/EDC/beranda');
});




// Route penyisihanEDC

// Route::get('/admin/penyisihanEDC', function () {
//     return view('admin/EDC/penyisihanEDC');
// });


// Route semifinalEDC


// Route finalEDC



// Route penyisihanEDC

// Route::get('/admin/penyisihanEDC', function () {
//     return view('admin/EDC/penyisihanEDC');
// });

// Route finalEDC

Route::get('/admin/finalEDC', function () {
    return view('admin/EDC/finalEDC');
})->middleware('auth');



//Route Periode

Route::get('/periodeKDBI', function () {
    return view('matalomba/kdbi/harga');
});

Route::get('/periodeSM', function () {
    return view('matalomba/sm/harga');
});

Route::get('/periodeLKTI', function () {
    return view('matalomba/lkti/harga');
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
Route::post('/unascheckout', [OrderController::class, 'checkout1']);
Route::post('/kdbi/checkout', [OrderkdbiController::class, 'checkout']);
Route::post('/unaskdbi/checkout', [OrderkdbiController::class, 'checkout1']);
Route::post('/lkti/checkout', [OrderlktiController::class, 'checkout']);
Route::post('/unasspc/checkout', [OrderlktiController::class, 'checkout1']);
Route::post('/sm/checkout', [OrdersmController::class, 'checkout']);
Route::post('/unassm/checkout', [OrdersmController::class, 'checkout1']);

Route::get('/homespc/{id}', [OrderlktiController::class, 'homespc'])->name('spc.paid');
Route::get('/homespcunas/{id}', [OrderlktiController::class, 'homespc1'])->name('spc.khusus');
Route::get('/homesm/{id}', [OrdersmController::class, 'homesm'])->name('sm.paid');
Route::get('/homesmunas/{id}', [OrdersmController::class, 'homesm1'])->name('sm.khusus');
Route::get('/homekdbi/{id}', [OrderkdbiController::class, 'homekdbi'])->name('kdbi.paid');
Route::get('/homekdbiunas/{id}', [OrderkdbiController::class, 'homekdbi1'])->name('kdbi.khusus');
Route::get('/homeedc/{id}', [OrderController::class, 'homeedc'])->name('edc.paid');
Route::get('/homeedcunas/{id}', [OrderController::class, 'homeedc1'])->name('edc.khusus');

Route::get('matalomba/spc/detailpeserta/{id}', [PesertaspcController::class, 'detailpesertaspc'])->name('spc.detailpeserta');
Route::post('/tambah', [SpcpenyisihanController::class, 'tambah']);
Route::post('/tambah/sf', [SpcsemifinalController::class, 'tambahsf']);
Route::post('/tambah/final', [SpcfinalController::class, 'tambahf']);
Route::get('matalomba/lkti/penyisihan', [SpcpenyisihanController::class, 'penyisihan']);
Route::get('matalomba/lkti/sfinal', [SpcsemifinalController::class, 'semifinal']);
Route::get('matalomba/lkti/sfinal/detail{namapeserta}', [SpcsemifinalController::class, 'detail'])->name('spc.detail');
Route::get('matalomba/lkti/final', [SpcfinalController::class, 'final']);
Route::get('matalomba/lkti/final/detail{namapeserta}', [SpcfinalController::class, 'detail'])->name('spc.detailf');


Route::get('matalomba/sm/detailpeserta/{id}', [PesertasmController::class, 'detailpeserta'])->name('sm.detailpeserta');
Route::post('/tambahsm/penyisihan', [SmsemifinalController::class, 'tambahp']);
Route::post('/tambahsm/final', [SmfinalController::class, 'tambahf']);
Route::get('matalomba/sm/penyisihan', [SmsemifinalController::class, 'penyisihan']);
Route::get('matalomba/sm/penyisihan/detail{namateam}', [SmsemifinalController::class, 'detail'])->name('sm.detail');
Route::get('admin/sm/penyisihan/detail{namateam}', [SmsemifinalController::class, 'detailadmin'])->name('sm.detailadmin')->middleware('auth');
Route::get('matalomba/sm/final', [SmfinalController::class, 'final'])->name('sm.final');
Route::get('matalomba/sm/final/detail{namateam}', [SmfinalController::class, 'detailf'])->name('sm.detailf');
Route::get('admin/sm/final/detail{namateam}', [SmfinalController::class, 'detailfadmin'])->name('sm.detailfadmin')->middleware('auth');

Route::get('matalomba/edc/detailpeserta/{id}', [PesertaedcController::class, 'detailpesertaedc'])->name('edc.detailpeserta');
Route::post('/tambahpenyisihan/edcday1', [Day1edcController::class, 'tambahedc']);
Route::get('matalomba/edc/penyisihan', [Day1edcController::class, 'gabungan']);
Route::get('matalomba/edc/Semifinal', [Day3edcController::class, 'gabungansf']);
Route::get('matalomba/edc/Final', [Day5edcController::class, 'gabunganf']);
Route::get('matalomba/edc/penyisihan/round1', [Day1edcController::class, 'day1round1']);
Route::get('matalomba/edc/day1round1/detail{sesi}', [Day1edcController::class, 'detailday1r1'])->name('edc.detailday1r1');
Route::get('matalomba/edc/penyisihan/round2', [Day1edcController::class, 'day1round2']);
Route::get('matalomba/edc/day1round2/detail{sesi}', [Day1edcController::class, 'detailday1r2'])->name('edc.detailday1r2');
Route::post('/tambahedc2', [Day2edcController::class, 'tambahedc2']);
Route::get('matalomba/edc/penyisihan/round3', [Day2edcController::class, 'day2round1']);
Route::get('matalomba/edc/day2round1/detail{sesi}', [Day2edcController::class, 'detailday2r1'])->name('edc.detailday2r1');
Route::get('matalomba/edc/penyisihan/round4', [Day2edcController::class, 'day2round2']);
Route::get('matalomba/edc/day2round2/detail{sesi}', [Day2edcController::class, 'detailday2r2'])->name('edc.detailday2r2');
Route::post('/tambahedc3', [Day3edcController::class, 'tambahedc3']);
Route::get('matalomba/edc/semifinal/round1', [Day3edcController::class, 'day3round1']);
Route::get('matalomba/edc/sfround1/detail{id}', [Day3edcController::class, 'detailday3r1'])->name('edc.detailday3r1');
Route::get('matalomba/edc/semifinal/round2', [Day3edcController::class, 'day3round2']);
Route::get('matalomba/edc/sfround2/detail{id}', [Day3edcController::class, 'detailday3r2'])->name('edc.detailday3r2');
Route::post('/tambahedc4', [Day4edcController::class, 'tambahedc4']);
Route::get('matalomba/edc/finalday1/round1', [Day4edcController::class, 'day4round1']);
Route::get('matalomba/edc/fday1round1/detail{id}', [Day4edcController::class, 'detailday4r1'])->name('edc.detailday4r1');
Route::get('matalomba/edc/finalday1/round2', [Day4edcController::class, 'day4round2']);
Route::get('matalomba/edc/fday1round2/detail{id}', [Day4edcController::class, 'detailday4r2'])->name('edc.detailday4r2');
Route::post('/tambahedc5', [Day5edcController::class, 'tambahedc5']);
Route::get('matalomba/edc/finalday2/round1', [Day5edcController::class, 'day5round1']);
Route::get('matalomba/edc/fday2round1/detail{id}', [Day5edcController::class, 'detailday5r1'])->name('edc.detailday5r1');



Route::get('matalomba/kdbi/detailpeserta/{id}', [PesertakdbiController::class, 'detailpesertakdbi'])->name('kdbi.detailpeserta');
Route::post('/tambahkdbi1', [Day1kdbiController::class, 'tambahkdbi']);
Route::get('matalomba/kdbi/penyisihan', [Day1kdbiController::class, 'gabungankdbi']);
Route::get('matalomba/kdbi/Semifinal', [Day3kdbiController::class, 'gabungankdbisf']);
Route::get('matalomba/kdbi/Final', [Day5kdbiController::class, 'gabungankdbif']);
Route::get('matalomba/kdbi/penyisihan/round1', [Day1kdbiController::class, 'day1r1']);
Route::get('matalomba/kdbi/day1round1/detail{sesi}', [Day1kdbiController::class, 'detailday1r1'])->name('kdbi.detailday1r1');
Route::get('matalomba/kdbi/penyisihan/round2', [Day1kdbiController::class, 'day1round2']);
Route::get('matalomba/kdbi/day1round2/detail{sesi}', [Day1kdbiController::class, 'detailday1r2'])->name('kdbi.detailday1r2');
Route::post('/tambahkdbi2', [Day2kdbiController::class, 'tambahkdbi2']);
Route::get('matalomba/kdbi/penyisihan/round3', [Day2kdbiController::class, 'day2round1']);
Route::get('matalomba/kdbi/day2round1/detail{sesi}', [Day2kdbiController::class, 'detailday2r1'])->name('kdbi.detailday2r1');
Route::get('matalomba/kdbi/penyisihan/round4', [Day2kdbiController::class, 'day2round2']);
Route::get('matalomba/kdbi/day2round2/detail{sesi}', [Day2kdbiController::class, 'detailday2r2'])->name('kdbi.detailday2r2');
Route::post('/tambahkdbi3', [Day3kdbiController::class, 'tambahkdbi3']);
Route::get('matalomba/kdbi/semifinal/round1', [Day3kdbiController::class, 'day3round1']);
Route::get('matalomba/kdbi/semifinal/round2', [Day3kdbiController::class, 'day3round2']);
Route::post('/tambahkdbi4', [Day4kdbiController::class, 'tambahkdbi4']);
Route::get('matalomba/kdbi/finalday1/round1', [Day4kdbiController::class, 'day4round1']);
Route::get('matalomba/kdbi/finalday1/round2', [Day4kdbiController::class, 'day4round2']);
Route::post('/tambahkdbi5', [Day5kdbiController::class, 'tambahkdbi5']);
Route::get('matalomba/kdbi/finalday2/round1', [Day5kdbiController::class, 'day5r1']);





Route::get('/sm/tambah/peserta', function () {
    return view('admin/sm/tambahpee');
});
//  Matalomba EDC 
Route::get('/matalomba/edc', [PesertaedcController::class, 'pesertaedc'])->name('edc.page');
Route::get('/matalomba/kdbi', [PesertakdbiController::class, 'pesertakdbi'])->name('kdbi.page');

Route::get('/matalomba/daftarEDC', function () {
    return view('matalomba/edc/daftarEDC');
});
Route::get('/matalomba/daftarunasEDC', function () {
    return view('matalomba/edc/daftarunasEDC');
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





Route::get('/matalomba/daftarKDBI', function () {
    return view('matalomba/kdbi/daftarKDBI');
});
Route::get('/matalomba/daftarunasKDBI', function () {
    return view('matalomba/kdbi/daftarunasKDBI');
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


Route::get('/matalomba/finalKDBI', function () {
    return view('matalomba/kdbi/final');
});


// Matalomba LKTI 
Route::get('/matalomba/spc', [PesertaspcController::class, 'pesertaspc'])->name('spc.page');

Route::get('/matalomba/daftarSPC', function () {
    return view('matalomba/lkti/daftarLKTI');
});
Route::get('/matalomba/daftarUNASSPC', function () {
    return view('matalomba/lkti/daftarunasSPC');
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

Route::get('/matalomba/shortmovie', [PesertasmController::class, 'peserta'])->name('sm.page');


Route::get('/matalomba/daftarSM', function () {
    return view('matalomba/sm/daftarSM');
});
Route::get('/matalomba/daftarunasSM', function () {
    return view('matalomba/sm/daftarunasSM');
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

Route::post('/login/handler', [LoginadminController::class, 'login'])->name('login.handler');

// Route Login

// Route::get('/admin/login', function () {
//     return view('admin/loginadmin');
// });








// Route::get('/admin/mainmenuKDBI1', [AuthController::class, 'showMainMenu'])->name('mainmenukdbi.show'); // Rute untuk menampilkan halaman main menu (GET)
// Route::post('/admin/mainmenuKDBI1', [AuthController::class, 'login'])->name('mainmenu.login');
// Route::get('/admin/mainmenuEDC', [AuthController::class, 'showMainMenu'])->name('mainmenu.show'); // Rute untuk menampilkan halaman main menu (GET)
// Route::post('/admin/mainmenuEDC', [AuthController::class, 'login'])->name('mainmenu.login'); // Rute untuk login (POST)








// Route penyisihanLKTI
Route::get('/admin/spc/tambahpeLKTI1', [SpcpenyisihanController::class, 'pesertaa'])->name('spc.pesertaa')->middleware('auth');
Route::get('/admin/spc/tambahpesfLKTI1', [SpcsemifinalController::class, 'pesertaasf'])->name('spc.pesertaasf')->middleware('auth');
Route::get('/admin/spc/tambahpefLKTI1', [SpcfinalController::class, 'pesertaaf'])->name('spc.pesertaaf')->middleware('auth');
Route::get('/admin/pesertaLKTI1', [PesertaspcController::class, 'tampilpe'])->name('spc.tampilpe')->middleware('auth');
Route::get('/admin/LKTI/editpe/{id}', [PesertaspcController::class, 'editpe'])->name('spc.editpe')->middleware('auth');
Route::post('/admin/LKTI/updatepe/{id}', [PesertaspcController::class, 'updatepe'])->name('spc.updatepe')->middleware('auth');
Route::post('/admin/LKTI/hapuspe/{id}', [PesertaspcController::class, 'hapuspe'])->name('spc.hapuspe');

Route::get('/admin/penyisihanLKTI1', [SpcpenyisihanController::class, 'tampil'])->name('spc.tampil')->middleware('auth');
Route::get('/admin/LKTI/edit/{id}', [SpcpenyisihanController::class, 'edit'])->name('spc.edit')->middleware('auth');
Route::post('/admin/LKTI/update/{id}', [SpcpenyisihanController::class, 'update'])->name('spc.update')->middleware('auth');
Route::post('/admin/LKTI/hapus/{id}', [SpcpenyisihanController::class, 'hapus'])->name('spc.hapus');

Route::get('/admin/semifinalLKTI1', [SpcsemifinalController::class, 'tampilsf'])->name('spc.tampilsf')->middleware('auth');
Route::get('/admin/LKTI/editsf/{id}', [SpcsemifinalController::class, 'editsf'])->name('spc.editsf')->middleware('auth');
Route::post('/admin/LKTI/updatesf/{id}', [SpcsemifinalController::class, 'updatesf'])->name('spc.updatesf')->middleware('auth');
Route::post('/admin/LKTI/hapussf/{id}', [SpcsemifinalController::class, 'hapussf'])->name('spc.hapussf');

Route::get('/admin/finalLKTI1', [SpcfinalController::class, 'tampilf'])->name('spc.tampilf')->middleware('auth');
Route::get('/admin/LKTI/editf/{id}', [SpcfinalController::class, 'editf'])->name('spc.editf')->middleware('auth');
Route::post('/admin/LKTI/updatef/{id}', [SpcfinalController::class, 'updatef'])->name('spc.updatef')->middleware('auth');
Route::post('/admin/LKTI/hapusf/{id}', [SpcfinalController::class, 'hapusf'])->name('spc.hapusf');



// Route::get('/admin/mainmenuLKTI1', [AuthController::class, 'showMainMenu'])->name('mainmenu.showlkti'); // Rute untuk menampilkan halaman main menu (GET)
// Route::post('/admin/mainmenuLKTI1', [AuthController::class, 'login'])->name('mainmenu.loginlkti'); // Rute untuk login (POST)





// Route::get('/admin/mainmenuSM1', [AuthController::class, 'showMainMenu'])->name('mainmenu.showsm'); // Rute untuk menampilkan halaman main menu (GET)
// Route::post('/admin/mainmenuSM1', [AuthController::class, 'login'])->name('mainmenu.loginsm'); // Rute untuk login (POST)

Route::get('/admin/sm/tambahpesfSM1', [SmsemifinalController::class, 'pesertasf'])->name('sm.pesertasf')->middleware('auth');
Route::get('/admin/sm/tambahpefSM1', [SmfinalController::class, 'pesertaf'])->name('sm.pesertaf')->middleware('auth');
Route::get('/admin/pesertaSM', [PesertasmController::class, 'tampilpee'])->name('sm.tampilpee')->middleware('auth');
Route::get('/admin/SM/editpee/{id}', [PesertasmController::class, 'editpee'])->name('sm.editpee')->middleware('auth');
Route::post('/admin/SM/updatepee/{id}', [PesertasmController::class, 'updatepee'])->name('sm.updatepee')->middleware('auth');
Route::post('/admin/SM/hapuspee/{id}', [PesertasmController::class, 'hapuspee'])->name('sm.hapuspee');

Route::get('/admin/penyisihanSM', [SmsemifinalController::class, 'tampilp'])->name('sm.tampilp')->middleware('auth');
Route::get('/admin/SM/editp/{id}', [SmsemifinalController::class, 'editp'])->name('sm.editp')->middleware('auth');
Route::post('/admin/SM/updatep/{id}', [SmsemifinalController::class, 'updatep'])->name('sm.updatep')->middleware('auth');
Route::post('/admin/SM/hapusp/{id}', [SmsemifinalController::class, 'hapusp'])->name('sm.hapusp');


Route::get('/admin/finalSM', [SmfinalController::class, 'tampilf'])->name('sm.tampilf')->middleware('auth');
Route::get('/admin/SM/editf/{id}', [SmfinalController::class, 'editf'])->name('sm.editf')->middleware('auth');
Route::post('/admin/SM/updatef/{id}', [SmfinalController::class, 'updatef'])->name('sm.updatef')->middleware('auth');
Route::post('/admin/SM/hapusf/{id}', [SmfinalController::class, 'hapusf'])->name('sm.hapusf');











Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin/edc/tambahday1', [Day1edcController::class, 'pesertaday1'])->name('edc.pesertaday1')->middleware('auth');
Route::get('/admin/edc/tambahday2', [Day2edcController::class, 'pesertaday2'])->name('edc.pesertaday2')->middleware('auth');
Route::get('/admin/edc/tambahsf', [Day3edcController::class, 'pesertaedcsf'])->name('edc.pesertasf')->middleware('auth');
Route::get('/admin/edc/tambahday1f', [Day4edcController::class, 'pesertaday1f'])->name('edc.pesertaday1f')->middleware('auth');
Route::get('/admin/edc/tambahday2f', [Day5edcController::class, 'pesertaday2f'])->name('edc.pesertaday2f')->middleware('auth');
Route::get('/admin/pesertaEDC', [PesertaedcController::class, 'tampiledcpe'])->name('edc.tampiledcpe')->middleware('auth');
Route::get('/admin/edc/editedcpe/{id}', [PesertaedcController::class, 'editedcpe'])->name('edc.editedcpe')->middleware('auth');
Route::post('/admin/edc/updateedcpe/{id}', [PesertaedcController::class, 'updateedcpe'])->name('edc.updateedcpe')->middleware('auth');
Route::post('/admin/edc/hapusedcpe/{id}', [PesertaedcController::class, 'hapusedcpe'])->name('edc.hapusedcpe');

Route::get('/admin/penyisihan/day1', [Day1edcController::class, 'tampiledc'])->name('edc.tampiledc')->middleware('auth');
Route::get('/admin/edc/editedc/{id}', [Day1edcController::class, 'editedc'])->name('edc.editedc')->middleware('auth');
Route::post('/admin/edc/updateedc/{id}', [Day1edcController::class, 'updateedc'])->name('edc.updateedc')->middleware('auth');
Route::post('/admin/edc/hapusedc/{id}', [Day1edcController::class, 'hapusedc'])->name('edc.hapusedc');

Route::get('/admin/penyisihan/day2', [Day2edcController::class, 'tampiledc2'])->name('edc.tampiledc2')->middleware('auth');
Route::get('/admin/edc/editedc2/{id}', [Day2edcController::class, 'editedc2'])->name('edc.editedc2')->middleware('auth');
Route::post('/admin/edc/updateedc2/{id}', [Day2edcController::class, 'updateedc2'])->name('edc.updateedc2')->middleware('auth');
Route::post('/admin/edc/hapusedc2/{id}', [Day2edcController::class, 'hapusedc2'])->name('edc.hapusedc2');

Route::get('/admin/Semifinal', [Day3edcController::class, 'tampiledc3'])->name('edc.tampiledc3')->middleware('auth');
Route::get('/admin/edc/editedc3/{id}', [Day3edcController::class, 'editedc3'])->name('edc.editedc3')->middleware('auth');
Route::post('/admin/edc/updateedc3/{id}', [Day3edcController::class, 'updateedc3'])->name('edc.updateedc3')->middleware('auth');
Route::post('/admin/edc/hapusedc3/{id}', [Day3edcController::class, 'hapusedc3'])->name('edc.hapusedc3');

Route::get('/admin/Final/day1', [Day4edcController::class, 'tampiledc4'])->name('edc.tampiledc4')->middleware('auth');
Route::get('/admin/edc/editedc4/{id}', [Day4edcController::class, 'editedc4'])->name('edc.editedc4')->middleware('auth');
Route::post('/admin/edc/updateedc4/{id}', [Day4edcController::class, 'updateedc4'])->name('edc.updateedc4')->middleware('auth');
Route::post('/admin/edc/hapusedc4/{id}', [Day4edcController::class, 'hapusedc4'])->name('edc.hapusedc4');

Route::get('/admin/Final/day2', [Day5edcController::class, 'tampiledc5'])->name('edc.tampiledc5')->middleware('auth');
Route::get('/admin/edc/editedc5/{id}', [Day5edcController::class, 'editedc5'])->name('edc.editedc5')->middleware('auth');
Route::post('/admin/edc/updateedc5/{id}', [Day5edcController::class, 'updateedc5'])->name('edc.updateedc5')->middleware('auth');
Route::post('/admin/edc/hapusedc5/{id}', [Day5edcController::class, 'hapusedc5'])->name('edc.hapusedc5');

/// batas edc

Route::get('/admin/kdbi/tambahday1', [Day1kdbiController::class, 'pesertaday1'])->name('kdbi.pesertaday1')->middleware('auth');
Route::get('/admin/kdbi/tambahday2', [Day2kdbiController::class, 'pesertaday2'])->name('kdbi.pesertaday2')->middleware('auth');
Route::get('/admin/kdbi/tambahsf', [Day3kdbiController::class, 'pesertakdbisf'])->name('kdbi.pesertasf')->middleware('auth');
Route::get('/admin/kdbi/tambahday1f', [Day4kdbiController::class, 'pesertaday1f'])->name('kdbi.pesertaday1f')->middleware('auth');
Route::get('/admin/kdbi/tambahday2f', [Day5kdbiController::class, 'pesertaday2f'])->name('kdbi.pesertaday2f')->middleware('auth');
Route::get('/admin/pesertaKDBI', [PesertakdbiController::class, 'tampilkdbipe'])->name('kdbi.tampilkdbipe')->middleware('auth');
Route::get('/admin/kdbi/editkdbipe/{id}', [PesertakdbiController::class, 'editkdbipe'])->name('kdbi.editkdbipe')->middleware('auth');
Route::post('/admin/kdbi/updatekdbipe/{id}', [PesertakdbiController::class, 'updatekdbipe'])->name('kdbi.updatekdbipe')->middleware('auth');
Route::post('/admin/kdbi/hapuskdbipe/{id}', [PesertakdbiController::class, 'hapuskdbipe'])->name('kdbi.hapuskdbipe');

Route::get('/admin/penyisihankdbi/day1', [Day1kdbiController::class, 'tampilkdbi'])->name('kdbi.tampilkdbi')->middleware('auth');
Route::get('/admin/kdbi/editkdbi/{id}', [Day1kdbiController::class, 'editkdbi'])->name('kdbi.editkdbi')->middleware('auth');
Route::post('/admin/kdbi/updatekdbi/{id}', [Day1kdbiController::class, 'updatekdbi'])->name('kdbi.updatekdbi')->middleware('auth');
Route::post('/admin/kdbi/hapuskdbi/{id}', [Day1kdbiController::class, 'hapuskdbi'])->name('kdbi.hapuskdbi');

Route::get('/admin/penyisihankdbi/day2', [Day2kdbiController::class, 'tampilkdbi2'])->name('kdbi.tampilkdbi2')->middleware('auth');
Route::get('/admin/kdbi/editkdbi2/{id}', [Day2kdbiController::class, 'editkdbi2'])->name('kdbi.editkdbi2')->middleware('auth');
Route::post('/admin/kdbi/updatekdbi2/{id}', [Day2kdbiController::class, 'updatekdbi2'])->name('kdbi.updatekdbi2')->middleware('auth');
Route::post('/admin/kdbi/hapuskdbi2/{id}', [Day2kdbiController::class, 'hapuskdbi2'])->name('kdbi.hapuskdbi2');

Route::get('/admin/SemifinalKDBI', [Day3kdbiController::class, 'tampilkdbi3'])->name('kdbi.tampilkdbi3')->middleware('auth');
Route::get('/admin/kdbi/editkdbi3/{id}', [Day3kdbiController::class, 'editkdbi3'])->name('kdbi.editkdbi3')->middleware('auth');
Route::post('/admin/kdbi/updatekdbi3/{id}', [Day3kdbiController::class, 'updatekdbi3'])->name('kdbi.updatekdbi3')->middleware('auth');
Route::post('/admin/kdbi/hapuskdbi3/{id}', [Day3kdbiController::class, 'hapuskdbi3'])->name('kdbi.hapuskdbi3');

Route::get('/admin/FinalKDBI/day1', [Day4kdbiController::class, 'tampilkdbi4'])->name('kdbi.tampilkdbi4')->middleware('auth');
Route::get('/admin/kdbi/editkdbi4/{id}', [Day4kdbiController::class, 'editkdbi4'])->name('kdbi.editkdbi4')->middleware('auth');
Route::post('/admin/kdbi/updatekdbi4/{id}', [Day4kdbiController::class, 'updatekdbi4'])->name('kdbi.updatekdbi4')->middleware('auth');
Route::post('/admin/kdbi/hapuskdbi4/{id}', [Day4kdbiController::class, 'hapuskdbi4'])->name('kdbi.hapuskdbi4');

Route::get('/admin/FinalKDBI/day2', [Day5kdbiController::class, 'tampilkdbi5'])->name('kdbi.tampilkdbi5')->middleware('auth');
Route::get('/admin/kdbi/editkdbi5/{id}', [Day5kdbiController::class, 'editkdbi5'])->name('kdbi.editkdbi5')->middleware('auth');
Route::post('/admin/kdbi/updatekdbi5/{id}', [Day5kdbiController::class, 'updatekdbi5'])->name('kdbi.updatekdbi5')->middleware('auth');
Route::post('/admin/kdbi/hapuskdbi5/{id}', [Day5kdbiController::class, 'hapuskdbi5'])->name('kdbi.hapuskdbi5');