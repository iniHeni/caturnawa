<?php

namespace App\Http\Controllers;

use App\Models\spcpenyisihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class SpcpenyisihanController extends Controller
{
    public function tampil(){
        $tambah = spcpenyisihan::select(
            '*',
            DB::raw('RANK() OVER (ORDER BY total DESC) as rank') // Perhitungan rank
        )->get();
        
        return view('admin/LKTI/penyisihanLKTI', compact('tambah'));
     }

    public function tambah(Request $request){
        $tambah = $request->validate([
            'university' => 'required|string|max:50',
            'namapeserta' => 'required|string|max:50',
            'juri' => 'required|string|max:50',
            'scorepenyajiankarya' => 'required|integer|max:100',
            'scoresubstansikarya' => 'required|integer|max:100',
            'scorekualitaskarya' => 'required|integer|max:100',
        ]);
        $tambah['total'] = $tambah['scorepenyajiankarya'] + $tambah['scoresubstansikarya'] + $tambah['scorekualitaskarya'];
        spcpenyisihan::create($tambah);
        return redirect()->route('spc.tampil');

    }

    public function edit($id) {
        $edit = spcpenyisihan::find($id);
        return view('admin/LKTI/edit', compact('edit'));
    }

    public function update(Request $request, $id){
    $update = $request->validate([
        'university' => 'required|string|max:50',
        'namapeserta' => 'required|string|max:50',
        'juri' => 'required|string|max:50',
        'scorepenyajiankarya' => 'required|integer|min:0|max:100',
        'scoresubstansikarya' => 'required|integer|min:0|max:100',
        'scorekualitaskarya' => 'required|integer|min:0|max:100',
    ]);
    $data = spcpenyisihan::find($id);
    $update['total'] = $update['scorepenyajiankarya'] + $update['scoresubstansikarya'] + $update['scorekualitaskarya'];
    $data->update($update);
        return redirect()->route('spc.tampil');
}

public function hapus($id){
    $hapus = spcpenyisihan::find($id);
    $hapus->delete();
    return redirect()->route('spc.tampil');
}
public function penyisihan(){
    $penyisihann = spcpenyisihan::select(
        '*',
        DB::raw('RANK() OVER (ORDER BY total DESC) as rank') // Perhitungan rank
    )->get();
    
    return view('matalomba/lkti/penyisihan', compact('penyisihann'));
 }


}

