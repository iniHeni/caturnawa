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
        ]);
        $tambah['total'] = $tambah['skorkrit1'] + $tambah['skorkrit2'] + $tambah['skorkrit3'] + $tambah['skorkrit4'] + $tambah['skorkrit5'] + $tambah['skorkrit6'] + $tambah['skorkrit7'] + $tambah['skorkrit8'] + $tambah['skorkrit9'] + $tambah['skorkrit10'];
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
    ]);
    $data = smsemifinal::find($id);
    $update['total'] = $update['skorkrit1'] + $update['skorkrit2'] + $update['skorkrit3'] + $update['skorkrit4'] + $update['skorkrit5'] + $update['skorkrit6'] + $update['skorkrit7'] + $update['skorkrit8'] + $update['skorkrit9'] + $update['skorkrit10'];
    $data->update($update);
        return redirect()->route('sm.tampilp');
}

public function hapusp($id){
    $hapus = smsemifinal::find($id);
    $hapus->delete();
    return redirect()->route('sm.tampilp');
}
public function penyisihan(){
    $penyisihann = smsemifinal::select(
        '*',
        DB::raw('RANK() OVER (ORDER BY total DESC) as rank')
    )->get();
    
    return view('matalomba/sm/sfinal', compact('penyisihann'));
 }
 public function detail($id){
    $dataa = smsemifinal::find($id);
    return view('matalomba/sm/detail/detailskor', compact('dataa'));
 }
 public function pesertasf(){
    $peserta = pesertasm::all();
    
    return view('admin/sm/tambah', compact('peserta'));
 }
}


