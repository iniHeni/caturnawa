<?php

use Illuminate\Support\Facades\Route;

// index indo dan eng
Route::get('/', function () {
    return view('index');
});

Route::get('/index_eng', function () {
    return view('index_eng');
});

//  Matalomba EDC indo dan eng
Route::get('/matalomba/edc', function () {
    return view('matalomba/edc/edc');
});
Route::get('/matalomba/edc_eng', function () {
    return view('matalomba/edc/edc_eng');
}); 
Route::get('/matalomba/daftarEDC', function () {
    return view('matalomba/edc/daftarEDC');
});
Route::get('/matalomba/daftarEDC_eng', function () {
    return view('matalomba/edc/daftarEDC_eng');
});
Route::get('/matalomba/detailpesertaEDC', function () {
    return view('matalomba/edc/detailpeserta');
});
Route::get('/matalomba/detailpesertaEDC_eng', function () {
    return view('matalomba/edc/detailpeserta_eng');
});
Route::get('/matalomba/scoreEDC', function () {
    return view('matalomba/edc/score');
});
Route::get('/matalomba/scoreEDC_eng', function () {
    return view('matalomba/edc/score_eng');
});



// Matalomba KDBI indo dan eng
Route::get('/matalomba/kdbi', function () {
    return view('matalomba/kdbi/kdbi');
});
Route::get('/matalomba/kdbi_eng', function () {
    return view('matalomba/kdbi/kdbi_eng');
});
Route::get('/matalomba/daftarKDBI', function () {
    return view('matalomba/kdbi/daftarKDBI');
});
Route::get('/matalomba/daftarKDBI_eng', function () {
    return view('matalomba/kdbi/daftarKDBI_eng');
});
Route::get('/matalomba/detailpesertaKDBI', function () {
    return view('matalomba/kdbi/detailpeserta');
});
Route::get('/matalomba/detailpesertaKDBI_eng', function () {
    return view('matalomba/kdbi/detailpeserta_eng');
});
Route::get('/matalomba/scoreKDBI', function () {
    return view('matalomba/kdbi/score');
});

// Matalomba LKTI indo dan eng
Route::get('/matalomba/lkti', function () {
    return view('matalomba/lkti/lkti');
});
Route::get('/matalomba/lkti_eng', function () {
    return view('matalomba/lkti/lkti_eng');
});
Route::get('/matalomba/daftarKTI', function () {
    return view('matalomba/lkti/daftarLKTI');
});
Route::get('/matalomba/daftarSPC', function () {
    return view('matalomba/lkti/daftarLKTI_eng');
});
Route::get('/matalomba/detailpesertaLKTI', function () {
    return view('matalomba/lkti/detailpeserta');
});
Route::get('/matalomba/detailpesertaSPC', function () {
    return view('matalomba/lkti/detailpeserta_eng');
});
Route::get('/matalomba/scoreLKTI', function () {
    return view('matalomba/lkti/score');
});

// Matalomba SM indo dan eng
Route::get('/matalomba/shortmovie', function () {
    return view('matalomba/sm/sm');
});
Route::get('/matalomba/shortmovie_eng', function () {
    return view('matalomba/sm/sm_eng');
});
Route::get('/matalomba/daftarSM', function () {
    return view('matalomba/sm/daftarSM');
});
Route::get('/matalomba/daftarSM_eng', function () {
    return view('matalomba/sm/daftarSM_eng');
});
Route::get('/matalomba/detailpesertaSM', function () {
    return view('matalomba/sm/detailpeserta');
});
Route::get('/matalomba/detailpesertaSM_eng', function () {
    return view('matalomba/sm/detailpeserta_eng');
});
Route::get('/matalomba/scoreSM', function () {
    return view('matalomba/sm/score');
});