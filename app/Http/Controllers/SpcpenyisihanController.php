<?php

namespace App\Http\Controllers;

use App\Models\pesertaspc;
use App\Models\spcpenyisihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class SpcpenyisihanController extends Controller
{
    public function tampil(){
        $tambahhh = spcpenyisihan::select(
            '*',
            DB::raw('RANK() OVER (ORDER BY scorecp DESC) as rank') 
        )->get();
        return view('admin/LKTI/penyisihanLKTI', compact('tambahhh'));
     }

    public function tambah(Request $request){
        $tambah = $request->validate([
            'namapeserta' => 'required',
            'university' => 'required',
            'scorecp' => 'required|integer|min:0',
        ]);
        spcpenyisihan::create($tambah);
        return redirect()->route('spc.tampil');

    }

    public function edit($id) {
        $edit = spcpenyisihan::find($id);
        $peserta = pesertaspc::all();
        return view('admin/LKTI/edit', compact('edit', 'peserta'));
    }

    public function update(Request $request, $id){
    $update = $request->validate([
        'namapeserta' => 'required',
        'university' => 'required',
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
        DB::raw('RANK() OVER (ORDER BY scorecp DESC) as rank') 
    )->get();
    
    return view('matalomba/lkti/penyisihan', compact('penyisihann'));
 }
 public function pesertaa(){
    $peserta = pesertaspc::where('status', 'Paid')->orWhere('status', 'KhususUNAS')->get();
    
    return view('admin/LKTI/tambah', compact('peserta'));
 }

}

