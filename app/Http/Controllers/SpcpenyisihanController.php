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
            DB::raw('RANK() OVER (ORDER BY scorecp DESC) as rank') 
        )->get();
        
        return view('admin/LKTI/penyisihanLKTI', compact('tambah'));
     }

    public function tambah(Request $request){
        $tambah = $request->validate([
            'namapeserta' => 'required|string|max:50',
            'university' => 'required|string|max:50',
            'scorecp' => 'required|integer|min:0',
        ]);
        spcpenyisihan::create($tambah);
        return redirect()->route('spc.tampil');

    }

    public function edit($id) {
        $edit = spcpenyisihan::find($id);
        return view('admin/LKTI/edit', compact('edit'));
    }

    public function update(Request $request, $id){
    $update = $request->validate([
        'namapeserta' => 'required|string|max:50',
        'university' => 'required|string|max:50',
        'scorecp' => 'required|integer|min:0',
    ]);
    $data = spcpenyisihan::find($id);
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
        DB::raw('RANK() OVER (ORDER BY scorecp DESC) as rank') // Perhitungan rank
    )->get();
    
    return view('matalomba/lkti/penyisihan', compact('penyisihann'));
 }


}

