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
        $penyisihann = DB::table('smsemifinals')
        ->select(
            'smsemifinals.namateam',
            DB::raw("ROUND(SUM(smsemifinals.total) / 3) as total"),
            DB::raw('RANK() OVER (ORDER BY SUM(smsemifinals.total) / 3 DESC) as rank'),
            'pesertasms.logo' 
        )
        ->leftJoin('pesertasms', 'smsemifinals.namateam', '=', 'pesertasms.namateam') 
        ->groupBy('smsemifinals.namateam', 'pesertasms.logo')
        ->orderByDesc('total')
        ->get();
        return view('admin/sm/penyisihanSM', compact('penyisihann'));      
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
            'note' => 'required',
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
            'note' => 'required',
    ]);
    $data = smsemifinal::find($id);
    $update['total'] = $update['skorkrit1'] + $update['skorkrit2'] + $update['skorkrit3'] + $update['skorkrit4'] + $update['skorkrit5'] + $update['skorkrit6'] + $update['skorkrit7'] + $update['skorkrit8'] + $update['skorkrit9'] + $update['skorkrit10'] + $update['skorkrit11'] + $update['skorkrit12'];
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
            'smsemifinals.namateam',
            DB::raw("ROUND(SUM(smsemifinals.total) / 3) as total"),
            DB::raw('RANK() OVER (ORDER BY SUM(smsemifinals.total) DESC) as rank'),
            'pesertasms.logo' 
        )
        ->leftJoin('pesertasms', 'smsemifinals.namateam', '=', 'pesertasms.namateam') 
        ->groupBy('smsemifinals.namateam', 'pesertasms.logo')
        ->orderByDesc('total')
        ->get();
    
    
    return view('matalomba/sm/sfinal', compact('penyisihann'));
 }
 
    public function detail($namateam){
        $namateam = strip_tags(trim($namateam));
        $tambah = smsemifinal::where('namateam', $namateam)
        ->select(
            '*',
            
            DB::raw('RANK() OVER (PARTITION BY namateam ORDER BY id) as rank')
        )
        ->get();
        $penyisihan = DB::table('smsemifinals')
        ->select(
            'namateam',
            DB::raw("ROUND(SUM(smsemifinals.total) / 3) as total"),
            DB::raw('RANK() OVER (ORDER BY SUM(smsemifinals.total) / 3 DESC) as rank')
        )
        ->groupBy('namateam')
        ->where('namateam', $namateam)
        ->get();
        
        return view('matalomba/sm/detail/detailskor', compact('tambah', 'penyisihan'));
    }
 
 public function detailadmin($namateam){
    $namateam = strip_tags(trim($namateam));
    $tambah = smsemifinal::where('namateam', $namateam)
    ->select(
        '*',
        
        DB::raw('RANK() OVER (PARTITION BY namateam ORDER BY id) as rank')
    )
    ->get();
    $penyisihan = DB::table('smsemifinals')
        ->select(
            'namateam',
            DB::raw("ROUND(SUM(smsemifinals.total) / 3) as total"),
            DB::raw('RANK() OVER (ORDER BY SUM(smsemifinals.total) DESC) as rank')
        )
        ->groupBy('namateam')
        ->where('namateam', $namateam)
        ->get();
    
    return view('admin/SM/penyisihandetailSM', compact('tambah', 'penyisihan'));
 }
 public function pesertasf(){
    $peserta = pesertasm::all();
    
    return view('admin/sm/tambah', compact('peserta'));
 }
}


