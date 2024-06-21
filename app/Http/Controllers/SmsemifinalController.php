<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\smsemifinal;
use App\Models\pesertasm;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class SmsemifinalController extends Controller
{
    public function tampilp(){  
        $tambah = smsemifinal::select(
            '*',
        DB::raw('RANK() OVER (ORDER BY total DESC) as rank')
        )->get();
        return view('admin/sm/penyisihanSM', compact('tambah'));      
     }

    public function tambahp(Request $request){
        $tambah = $request->validate([
            'namateam' => 'required',
            'peserta1' => 'required',
            'peserta2' => 'required',
            'peserta3' => 'required',
            'peserta4' => 'required',
            'peserta5' => 'required',
            'juri' => 'required',
            'skorkrit1' => 'required|integer|min:0|max:100',
            'skorkrit2' => 'required|integer|min:0|max:100',
            'skorkrit3' => 'required|integer|min:0|max:100',
            'skorkrit4' => 'required|integer|min:0|max:100',
            'skorkrit5' => 'required|integer|min:0|max:100',
            'skorkrit6' => 'required|integer|min:0|max:100',
            'skorkrit7' => 'required|integer|min:0|max:100',
            'skorkrit8' => 'required|integer|min:0|max:100',
            'skorkrit9' => 'required|integer|min:0|max:100',
            'skorkrit10' => 'required|integer|min:0|max:100',
            'skorkrit11' => 'required|integer|min:0|max:100',
            'skorkrit12' => 'required|integer|min:0|max:100',
            'krit1' => 'required|string|max:100',
            'krit2' => 'required|string|max:100',
            'krit3' => 'required|string|max:100',
            'krit4' => 'required|string|max:100',
            'krit5' => 'required|string|max:100',
            'krit6' => 'required|string|max:100',
            'krit7' => 'required|string|max:100',
            'krit8' => 'required|string|max:100',
            'krit9' => 'required|string|max:100',
            'krit10' => 'required|string|max:100',
            'krit11' => 'required|string|max:100',
            'krit12' => 'required|string|max:100',
        ]);
        $tambah['total'] = $tambah['skorkrit1'] + $tambah['skorkrit2'] + $tambah['skorkrit3'] + $tambah['skorkrit4'] + $tambah['skorkrit5'] + $tambah['skorkrit6'] + $tambah['skorkrit7'] + $tambah['skorkrit8'] + $tambah['skorkrit9'] + $tambah['skorkrit10'] + $tambah['skorkrit11'] + $tambah['skorkrit12'];
        smsemifinal::create($tambah);
        return redirect()->route('sm.tampilp');

    }

    public function editp($id) {
        $edit = smsemifinal::find($id);
        $peserta = pesertasm::all();
        return view('admin/SM/editsm', compact('edit', 'peserta'));
    }

    public function updatep(Request $request, $id){
    $update = $request->validate([
        'namateam' => 'required',
            'peserta1' => 'required',
            'peserta2' => 'required',
            'peserta3' => 'required',
            'peserta4' => 'required',
            'peserta5' => 'required',
            'juri' => 'required',
            'skorkrit1' => 'required|integer|min:0|max:100',
            'skorkrit2' => 'required|integer|min:0|max:100',
            'skorkrit3' => 'required|integer|min:0|max:100',
            'skorkrit4' => 'required|integer|min:0|max:100',
            'skorkrit5' => 'required|integer|min:0|max:100',
            'skorkrit6' => 'required|integer|min:0|max:100',
            'skorkrit7' => 'required|integer|min:0|max:100',
            'skorkrit8' => 'required|integer|min:0|max:100',
            'skorkrit9' => 'required|integer|min:0|max:100',
            'skorkrit10' => 'required|integer|min:0|max:100',
            'skorkrit11' => 'required|integer|min:0|max:100',
            'skorkrit12' => 'required|integer|min:0|max:100',
            'krit1' => 'required|string|max:100',
            'krit2' => 'required|string|max:100',
            'krit3' => 'required|string|max:100',
            'krit4' => 'required|string|max:100',
            'krit5' => 'required|string|max:100',
            'krit6' => 'required|string|max:100',
            'krit7' => 'required|string|max:100',
            'krit8' => 'required|string|max:100',
            'krit9' => 'required|string|max:100',
            'krit10' => 'required|string|max:100',
            'krit11' => 'required|string|max:100',
            'krit12' => 'required|string|max:100',
    ]);
    $data = smsemifinal::find($id);
    $update['total'] = $update['skorkrit1'] + $update['skorkrit2'] + $update['skorkrit3'] + $update['skorkrit4'] + $update['skorkrit5'] + $update['skorkrit6'] + $update['skorkrit7'] + $update['skorkrit8'] + $update['skorkrit9'] + $update['skorkrit10'] + $tambah['skorkrit11'] + $tambah['skorkrit12'];
    $data->update($update);
        return redirect()->route('sm.tampilp');
}

public function hapusp($id){
    $hapus = smsemifinal::find($id);
    $hapus->delete();
    return redirect()->route('sm.tampilp');
}
public function penyisihan(){
    $penyisihann = DB::table('smsemifinals')
    ->select(
        'namateam',
        DB::raw('SUM(total) as total'), // Menghitung total untuk setiap namapeserta
        DB::raw('RANK() OVER (ORDER BY SUM(total) DESC) as rank') // Peringkat berdasarkan total
    )
    ->groupBy('namateam') // Mengelompokkan berdasarkan namapeserta
    ->get();
    
    return view('matalomba/sm/sfinal', compact('penyisihann'));
 }
 public function detail($namateam){
    //$dataa = smsemifinal::find($id);
    //$dataa->mutu1 = $this->calculateNilaiMutu($dataa->skorkrit1);
    //$dataa->mutu2 = $this->calculateNilaiMutu($dataa->skorkrit2);
    //$dataa->mutu3 = $this->calculateNilaiMutu($dataa->skorkrit3);
    //$dataa->mutu4 = $this->calculateNilaiMutu($dataa->skorkrit4);
    //$dataa->mutu5 = $this->calculateNilaiMutu($dataa->skorkrit5);
    //$dataa->mutu6 = $this->calculateNilaiMutu($dataa->skorkrit6);
    //$dataa->mutu7 = $this->calculateNilaiMutu($dataa->skorkrit7);
    //$dataa->mutu8 = $this->calculateNilaiMutu($dataa->skorkrit8);
    //$dataa->mutu9 = $this->calculateNilaiMutu($dataa->skorkrit9);
    //$dataa->mutu10 = $this->calculateNilaiMutu($dataa->skorkrit10);
    //$dataa->mutu11 = $this->calculateNilaiMutu($dataa->skorkrit11);
    //$dataa->mutu12 = $this->calculateNilaiMutu($dataa->skorkrit12);

    $namateam = strip_tags(trim($namateam));
    $data = DB::table('smsemifinals')
        ->select('namateam',
                DB::raw("string_agg(skorkrit1::text, ', ') as skorkrit1"),
                DB::raw("string_agg(skorkrit2::text, ', ') as skorkrit2"),
                DB::raw("string_agg(skorkrit3::text, ', ') as skorkrit3"),
                DB::raw("string_agg(skorkrit4::text, ', ') as skorkrit4"),
                DB::raw("string_agg(skorkrit5::text, ', ') as skorkrit5"),
                DB::raw("string_agg(skorkrit6::text, ', ') as skorkrit6"),
                DB::raw("string_agg(skorkrit7::text, ', ') as skorkrit7"),
                DB::raw("string_agg(skorkrit8::text, ', ') as skorkrit8"),
                DB::raw("string_agg(skorkrit9::text, ', ') as skorkrit9"),
                DB::raw("string_agg(skorkrit10::text, ', ') as skorkrit10"),
                DB::raw("string_agg(skorkrit11::text, ', ') as skorkrit11"),
                DB::raw("string_agg(skorkrit12::text, ', ') as skorkrit12"),


                DB::raw("string_agg(krit1::text, ', ') as krit1"),
                DB::raw("string_agg(krit2::text, ', ') as krit2"),
                DB::raw("string_agg(krit3::text, ', ') as krit3"),
                DB::raw("string_agg(krit4::text, ', ') as krit4"),
                DB::raw("string_agg(krit5::text, ', ') as krit5"),
                DB::raw("string_agg(krit6::text, ', ') as krit6"),
                DB::raw("string_agg(krit7::text, ', ') as krit7"),
                DB::raw("string_agg(krit8::text, ', ') as krit8"),
                DB::raw("string_agg(krit9::text, ', ') as krit9"),
                DB::raw("string_agg(krit10::text, ', ') as krit10"),
                DB::raw("string_agg(krit11::text, ', ') as krit11"),
                DB::raw("string_agg(krit12::text, ', ') as krit12"),

                DB::raw("ARRAY_TO_STRING(ARRAY_AGG(DISTINCT peserta1), ', ') as peserta1"),
                DB::raw("ARRAY_TO_STRING(ARRAY_AGG(DISTINCT peserta2), ', ') as peserta2"),
                DB::raw("ARRAY_TO_STRING(ARRAY_AGG(DISTINCT peserta3), ', ') as peserta3"),
                DB::raw("ARRAY_TO_STRING(ARRAY_AGG(DISTINCT peserta4), ', ') as peserta4"),
                DB::raw("ARRAY_TO_STRING(ARRAY_AGG(DISTINCT peserta5), ', ') as peserta5"),
               
                DB::raw('SUM(skorkrit1 + skorkrit2 + skorkrit3 + skorkrit4 + skorkrit5 + skorkrit6 + skorkrit7 + skorkrit8 + skorkrit9 + skorkrit10 + skorkrit11 + skorkrit12) as total'),
                DB::raw("string_agg(juri::text, ', ') as juri"),
                )
        ->where('namateam', $namateam)
        ->groupBy('namateam')
        ->get();
    return view('matalomba/sm/detail/detailskor', compact('data'));
 }
 //private function calculateNilaiMutu($skorkrit)
//{
    //if ($skorkrit >= 85 && $skorkrit <= 100) {
        //return 'A';
    //} elseif ($skorkrit >= 65 && $skorkrit <= 84) {
        //return 'B';
   // } elseif ($skorkrit >= 45 && $skorkrit <= 64) {
        //return 'C';
   // } elseif ($skorkrit >= 25 && $skorkrit <= 44) {
        //return 'D';
   // } else {
        //return 'E';
   // }
//}
 public function pesertasf(){
    $peserta = pesertasm::all();
    
    return view('admin/sm/tambah', compact('peserta'));
 }
}


