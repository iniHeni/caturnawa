<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\smsemifinal;
use App\Models\pesertasm;
use App\Models\smfinal;
use App\Models\smsfinal;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class SmfinalController extends Controller
{
    public function tampilf(){  
        $tambah = smfinal::select(
            '*',
        DB::raw('RANK() OVER (ORDER BY total DESC) as rank')
        )->get();
        return view('admin/SM/finalSM', compact('tambah'));      
     }

    public function tambahf(Request $request){
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
            'krit1' => 'required|string',
            'krit2' => 'required|string',
            'krit3' => 'required|string',
            'krit4' => 'required|string',
        ]);
        $tambah['total'] = $tambah['skorkrit1'] + $tambah['skorkrit2'] + $tambah['skorkrit3'] + $tambah['skorkrit4'];
        smfinal::create($tambah);
        return redirect()->route('sm.tampilf');

    }

    public function editf($id) {
        $edit = smfinal::find($id);
        $peserta = pesertasm::all();
        return view('admin/SM/editsmf', compact('edit', 'peserta'));
    }

    public function updatef(Request $request, $id){
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
           'krit1' => 'required|string',
            'krit2' => 'required|string',
            'krit3' => 'required|string',
            'krit4' => 'required|string',
    ]);
    $data = smfinal::find($id);
    $update['total'] = $update['skorkrit1'] + $update['skorkrit2'] + $update['skorkrit3'] + $update['skorkrit4'];
    $data->update($update);
        return redirect()->route('sm.tampilf');
}

public function hapusf($id){
    $hapus = smfinal::find($id);
    $hapus->delete();
    return redirect()->route('sm.tampilf');
}

public function final()
{
    $final = DB::table('smfinals') // Ubah tabel awal menjadi smfinals
    ->select('smfinals.namateam', DB::raw('SUM(smfinals.total + COALESCE(smsemifinals.total, 0) + COALESCE(smsfinals.total, 0)) as total')) 
    ->leftJoin('smsemifinals', 'smfinals.namateam', '=', 'smsemifinals.namateam')
    ->leftJoin('smsfinals', 'smfinals.namateam', '=', 'smsfinals.namateam')
    ->groupBy('smfinals.namateam')
    ->orderByDesc('total')
    ->get();

return view('matalomba/sm/final', compact('final'));

}
public function detailf($id){
    $dataa = smfinal::find($id);
    return view('matalomba/sm/detail/detailskor2', compact('dataa'));
}

 public function pesertaf(){
    $peserta = pesertasm::all();
    
    return view('admin/sm/tambahf', compact('peserta'));
 }
}
