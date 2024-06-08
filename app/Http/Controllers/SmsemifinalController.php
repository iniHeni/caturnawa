<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\smsemifinal;

class SmsemifinalController extends Controller
{
    public function tampilp(){  
        $tambah = smsemifinal::select()->get();
        return view('admin/sm/penyisihan');      
     }

    public function tambahp(Request $request){
        $tambah = $request->validate([
            'university' => 'required|string|max:50',
            'peserta' => 'required|string|max:50',
            'ruang' => 'required|string|max:50',
            'juri' => 'required',
        ]);
        peserta::create($tambah);
        return redirect()->route('spc.tampilp');

    }

    public function editp($id) {
        $edit = peserta::find($id);
        return view('admin/LKTI/editpeserta', compact('edit'));
    }

    public function updatep(Request $request, $id){
    $update = $request->validate([
        'university' => 'required|string|max:50',
        'peserta' => 'required|string|max:50',
        'ruang' => 'required|string|regex:/^[0-9]+\.[0-9]+$/|max:50',
        'juri' => 'required',
    ]);
    $data = peserta::find($id);
    $data->update($update);
        return redirect()->route('spc.tampilp');
}

public function hapusp($id){
    $hapus = peserta::find($id);
    $hapus->delete();
    return redirect()->route('spc.tampilp');
}
public function penyisihan(){
    $penyisihann = peserta::select(
        '*',
        DB::raw('RANK() OVER (ORDER BY total DESC) as rank') // Perhitungan rank
    )->get();
    
    return view('matalomba/lkti/semifinal', compact('penyisihann'));
 }
}


