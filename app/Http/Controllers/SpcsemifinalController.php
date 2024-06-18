<?php

namespace App\Http\Controllers;

use App\Models\pesertaspc;
use App\Models\spcsemifinal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class SpcsemifinalController extends Controller
{
    public function tampilsf(){
        $tambah = spcsemifinal::select(
            '*',
            DB::raw('RANK() OVER (ORDER BY total DESC) as rank') // Perhitungan rank
        )->get();
        
        return view('admin/LKTI/semifinalLKTI', compact('tambah'));
     }

    public function tambahsf(Request $request){
        $tambah = $request->validate([
            'namapeserta' => 'required',
            'juri' => 'required',
            'scorepenyajian' => 'required|integer|min:0|max:100',
            'scoresubs' => 'required|integer|min:0|max:100',
            'scorekualitas' => 'required|integer|min:0|max:100',
            'penyajian' => 'required|string',
            'subs' => 'required|string',
            'kualitas' => 'required|string',

        ]);
        $tambah['total'] = $tambah['scorepenyajian'] + $tambah['scoresubs'] + $tambah['scorekualitas'];
        spcsemifinal::create($tambah);
        return redirect()->route('spc.tampilsf');

    }

    public function editsf($id) {
        $edit = spcsemifinal::find($id);
        $peserta = pesertaspc::all();
        return view('admin/LKTI/editsf', compact('edit', 'peserta'));
    }

    public function updatesf(Request $request, $id){
    $update = $request->validate([
            'namapeserta' => 'required',
            'juri' => 'required',
            'scorepenyajian' => 'required|integer|min:0|max:100',
            'scoresubs' => 'required|integer|min:0|max:100',
            'scorekualitas' => 'required|integer|min:0|max:100',
            'penyajian' => 'required|string',
            'subs' => 'required|string',
            'kualitas' => 'required|string',
    ]);
    $data = spcsemifinal::find($id);
    $update['total'] = $update['scorepenyajian'] + $update['scoresubs'] + $update['scorekualitas'];
    $data->update($update);
        return redirect()->route('spc.tampilsf');
}

public function hapussf($id){
    $hapus = spcsemifinal::find($id);
    $hapus->delete();
    return redirect()->route('spc.tampilsf');
}
public function semifinal(){
    $semifinal = spcsemifinal::select(
        '*',
        DB::raw('RANK() OVER (ORDER BY total DESC) as rank') // Perhitungan rank
    )->get();
    
    return view('matalomba/lkti/sfinal', compact('semifinal'));
 }
 public function pesertaasf(){
    $peserta = pesertaspc::all();
    
    return view('admin/LKTI/tambahsf', compact('peserta'));
 }
}
