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
    $final = spcfinal::select(
        '*',
        DB::raw('RANK() OVER (ORDER BY total DESC) as rank') // Perhitungan rank
    )->get();
    
    return view('matalomba/lkti/final', compact('final'));
 }
 public function pesertaaf(){
    $peserta = pesertaspc::all();
    
    return view('admin/LKTI/tambahf', compact('peserta'));
 }
}