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
        $final = DB::table('smfinals') 
        ->select(
            'smfinals.namateam',
            DB::raw("ROUND(SUM(smfinals.total) / 3) as total"),
            DB::raw('RANK() OVER (ORDER BY SUM(smfinals.total) / 3 DESC) as rank'),
            'pesertasms.logo' 
        )
        ->leftJoin('pesertasms', 'smfinals.namateam', '=', 'pesertasms.namateam') 
        ->groupBy('smfinals.namateam', 'pesertasms.logo')
        ->orderByDesc('total')
        ->get();

    
        return view('admin/SM/finalSM', compact('final'));      
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
            'skorkrit5' => 'required|integer|min:0|max:100',
            'skorkrit6' => 'required|integer|min:0|max:100',
            'skorkrit7' => 'required|integer|min:0|max:100',
            'skorkrit8' => 'required|integer|min:0|max:100',
            'skorkrit9' => 'required|integer|min:0|max:100',
            'skorkrit10' => 'required|integer|min:0|max:100',
            'note' => 'required',

        ]);
        $tambah['total'] = $tambah['skorkrit1'] + $tambah['skorkrit2'] + $tambah['skorkrit3'] + $tambah['skorkrit4'] + $tambah['skorkrit5'] + $tambah['skorkrit6'] + $tambah['skorkrit7'] + $tambah['skorkrit8'] + $tambah['skorkrit9'] + $tambah['skorkrit10'];
        smfinal::create($tambah);
        return redirect()->route('sm.tampilf');

    }

    public function editf($id) {
        $edit = smfinal::find($id);
        $peserta = DB::table('smsfinals')
    ->select(
        'smsfinals.namateam',
        'smsfinals.peserta1',
        'smsfinals.peserta2',
        'smsfinals.peserta3',
        'smsfinals.peserta4',
        'smsfinals.peserta5',
        DB::raw('SUM(smsfinals.total + COALESCE(smsemifinals.total, 0)) as total')
    )
    ->leftJoin('smsemifinals', 'smsfinals.namateam', '=', 'smsemifinals.namateam')
    ->groupBy('smsfinals.namateam', 'smsfinals.peserta1', 'smsfinals.peserta2', 'smsfinals.peserta3', 'smsfinals.peserta4', 'smsfinals.peserta5') // Tambahkan peserta1-peserta5 ke groupBy
    ->orderByDesc('total')
    ->limit(4)
    ->get();

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
            'skorkrit5' => 'required|integer|min:0|max:100',
            'skorkrit6' => 'required|integer|min:0|max:100',
            'skorkrit7' => 'required|integer|min:0|max:100',
            'skorkrit8' => 'required|integer|min:0|max:100',
            'skorkrit9' => 'required|integer|min:0|max:100',
            'skorkrit10' => 'required|integer|min:0|max:100',
          'note' => 'required',
    ]);
    $data = smfinal::find($id);
    $update['total'] = $update['skorkrit1'] + $update['skorkrit2'] + $update['skorkrit3'] + $update['skorkrit4'] + $update['skorkrit5'] + $update['skorkrit6'] + $update['skorkrit7'] + $update['skorkrit8'] + $update['skorkrit9'] + $update['skorkrit10'];
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
    $final = DB::table('smfinals') 
    ->select(
        'smfinals.namateam',
        DB::raw("ROUND(SUM(smfinals.total) / 3) as total"),
        DB::raw('RANK() OVER (ORDER BY SUM(smfinals.total) / 3 DESC) as rank'),
        'pesertasms.logo' 
    )
    ->leftJoin('pesertasms', 'smfinals.namateam', '=', 'pesertasms.namateam') 
    ->groupBy('smfinals.namateam', 'pesertasms.logo')
    ->orderByDesc('total')
    ->get();


return view('matalomba/sm/final', compact('final'));

}
public function detailf($namateam){
    $namateam = strip_tags(trim($namateam));
    $tambah = smfinal::where('namateam', $namateam)
    ->select(
        '*',
        DB::raw('RANK() OVER (PARTITION BY namateam ORDER BY id) as rank')
    )
    ->get();
    $final = DB::table('smfinals')
    ->select(
        'namateam',
        DB::raw("ROUND(SUM(smfinals.total) / 3) as total"),
        DB::raw('RANK() OVER (ORDER BY SUM(smfinals.total) DESC) as rank')
    )
    ->groupBy('namateam') 
    ->where('namateam', $namateam)
    ->get();
    return view('matalomba/sm/detail/detailskor2', compact('tambah', 'final'));
}

public function detailfadmin($namateam){
    $namateam = strip_tags(trim($namateam));
    $tambah = smfinal::where('namateam', $namateam)
    ->select(
        '*',
        DB::raw('RANK() OVER (PARTITION BY namateam ORDER BY id) as rank')
    )
    ->get();
    $final = DB::table('smfinals')
    ->select(
        'namateam',
        DB::raw("ROUND(SUM(smfinals.total) / 3) as total"),
        DB::raw('RANK() OVER (ORDER BY SUM(smfinals.total) DESC) as rank')
    )
    ->groupBy('namateam') 
    ->where('namateam', $namateam)
    ->get();
    return view('admin/SM/finaldetailSM', compact('tambah', 'final'));
}

 public function pesertaf(){
    $peserta = DB::table('smsfinals')
    ->select(
        'smsfinals.namateam',
       DB::raw('(SUM(smsfinals.total) + COALESCE(SUM(smsemifinals.total), 0)) / 6 as total'),
       'smsfinals.peserta1',
        'smsfinals.peserta2',
        'smsfinals.peserta3',
        'smsfinals.peserta4',
        'smsfinals.peserta5',
    )
    ->leftJoin('smsemifinals', 'smsfinals.namateam', '=', 'smsemifinals.namateam')
    ->groupBy('smsfinals.namateam', 'smsfinals.peserta1', 'smsfinals.peserta2', 'smsfinals.peserta3', 'smsfinals.peserta4', 'smsfinals.peserta5') 
    ->orderByDesc('total')
    ->limit(4)
    ->get();

    
    return view('admin/sm/tambahf', compact('peserta'));
 }
}
