<?php

namespace App\Http\Controllers;

use App\Models\pesertaspc;
use App\Models\spcfinal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class SpcfinalController extends Controller
{
    public function tampilf(){
        $tambah = spcfinal::select(
            '*',
            DB::raw('RANK() OVER (ORDER BY total DESC) as rank') // Perhitungan rank
        )->get();
        
        return view('admin/LKTI/finalLKTI', compact('tambah'));
     }

    public function tambahf(Request $request){
        $tambah = $request->validate([
            'namapeserta' => 'required',
            'juri' => 'required',
            'scorepemaparanmateri' => 'required|integer|min:0|max:100',
            'scorepertanyaandanjawaban' => 'required|integer|min:0|max:100',
            'scoreaspekkesesuaian' => 'required|integer|min:0|max:100',
            'materi' => 'required|string|max:100',
            'pertanyaandanjawaban' => 'required|string|max:100',
            'kesesuaian' => 'required|string|max:100',
        ]);
        $tambah['total'] = $tambah['scorepemaparanmateri'] + $tambah['scorepertanyaandanjawaban'] + $tambah['scoreaspekkesesuaian'];
        spcfinal::create($tambah);
        return redirect()->route('spc.tampilf');

    }

    public function editf($id) {
        $edit = spcfinal::find($id);
        $peserta = pesertaspc::all();
        return view('admin/LKTI/editf', compact('edit'));
    }

    public function updatef(Request $request, $id){
    $update = $request->validate([
            'namapeserta' => 'required',
            'juri' => 'required',
            'scorepemaparanmateri' => 'required|integer|min:0|max:100',
            'scorepertanyaandanjawaban' => 'required|integer|min:0|max:100',
            'scoreaspekkesesuaian' => 'required|integer|min:0|max:100',
            'materi' => 'required|string|max:100',
            'pertanyaandanjawaban' => 'required|string|max:100',
            'kesesuaian' => 'required|string|max:100',
    ]);
    $data = spcfinal::find($id);
    $update['total'] = $update['scorepemaparanmateri'] + $update['scorepertanyaandanjawaban'] + $update['scoreaspekkesesuaian'];
    $data->update($update);
        return redirect()->route('spc.tampilf');
}

public function hapusf($id){
    $hapus = spcfinal::find($id);
    $hapus->delete();
    return redirect()->route('spc.tampilf');
}
public function final(){
    $final = DB::table('spcfinals')
    ->select(
        'namapeserta',
        DB::raw('SUM(total) as total'), // Menghitung total untuk setiap namapeserta
        DB::raw('RANK() OVER (ORDER BY SUM(total) DESC) as rank') // Peringkat berdasarkan total
    )
    ->groupBy('namapeserta') // Mengelompokkan berdasarkan namapeserta
    ->get();
    
    return view('matalomba/lkti/final', compact('final'));
 }
 public function pesertaaf(){
    $peserta = pesertaspc::all();
    
    return view('admin/LKTI/tambahf', compact('peserta'));
 }
 public function detail($namapeserta){
    $namapeserta = strip_tags(trim($namapeserta)); // Contoh pembersihan dasar

    // 2. Ambil data peserta dari database
    $data = DB::table('spcfinals')
        ->select('namapeserta',
                DB::raw("string_agg(scorepemaparanmateri::text, ', ') as scorepemaparanmateri"),
                DB::raw("string_agg(scorepertanyaandanjawaban::text, ', ') as scorepertanyaandanjawaban"),
                DB::raw("string_agg(scoreaspekkesesuaian::text, ', ') as scoreaspekkesesuaian"),
                DB::raw("string_agg(materi::text, ', ') as materi"),
                DB::raw("string_agg(pertanyaandanjawaban::text, ', ') as pertanyaandanjawaban"),
                DB::raw("string_agg(kesesuaian::text, ', ') as kesesuaian"),
                DB::raw('SUM(scorepemaparanmateri + scorepertanyaandanjawaban + scoreaspekkesesuaian) as total'),
                DB::raw("string_agg(juri::text, ', ') as juri"),
                )
        ->where('namapeserta', $namapeserta)
        ->groupBy('namapeserta')
        ->get();
  
    return view('matalomba/lkti/detail/detailskor1', compact('data'));
}
}