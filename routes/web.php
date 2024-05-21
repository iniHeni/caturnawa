<?php

use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

// index indo dan eng
Route::get('/', function () {
    return view('index');
});

// change Language

Route::get('locale/{lang}',[LocaleController::class,'setLocale']);

// Route Checkout

Route::post('/checkout', [OrderController::class, 'checkout']);

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
