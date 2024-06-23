<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesertasm;
use App\Models\smsfinal;
use App\Models\smsemiinal;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\DB;

class SmsfinalController extends Controller
{
    public function tampilsf(){  
        $tambah = smsfinal::select(
            '*',
        DB::raw('RANK() OVER (ORDER BY total DESC) as rank')
        )->get();
        return view('admin/sm/semifinalsm', compact('tambah'));      
     }

    public function tambahsf(Request $request){
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
            'krit1' => 'required',
            'krit2' => 'required',
            'krit3' => 'required',
            'krit4' => 'required',
            'krit5' => 'required',
            'krit6' => 'required',
            'krit7' => 'required',
            'krit8' => 'required',
            'krit9' => 'required',
            'krit10' => 'required',
            'krit11' => 'required',
            'krit12' => 'required',
        ]);
        $tambah['total'] = $tambah['skorkrit1'] + $tambah['skorkrit2'] + $tambah['skorkrit3'] + $tambah['skorkrit4'] + $tambah['skorkrit5'] + $tambah['skorkrit6'] + $tambah['skorkrit7'] + $tambah['skorkrit8'] + $tambah['skorkrit9'] + $tambah['skorkrit10'] + $tambah['skorkrit11'] + $tambah['skorkrit12'];
        smsfinal::create($tambah);
        return redirect()->route('sm.tampilsf');

    }

    public function editsf($id) {
        $edit = smsfinal::find($id);
        $peserta = pesertasm::all();
        return view('admin/SM/editsfsm', compact('edit', 'peserta'));
    }

    public function updatesf(Request $request, $id){
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
            'krit1' => 'required',
            'krit2' => 'required',
            'krit3' => 'required',
            'krit4' => 'required',
            'krit5' => 'required',
            'krit6' => 'required',
            'krit7' => 'required',
            'krit8' => 'required',
            'krit9' => 'required',
            'krit10' => 'required',
            'krit11' => 'required',
            'krit12' => 'required',
    ]);
    $data = smsfinal::find($id);
    $update['total'] = $update['skorkrit1'] + $update['skorkrit2'] + $update['skorkrit3'] + $update['skorkrit4'] + $update['skorkrit5'] + $update['skorkrit6'] + $update['skorkrit7'] + $update['skorkrit8'] + $update['skorkrit9'] + $update['skorkrit10'] + $update['skorkrit11'] + $update['skorkrit12'];
    $data->update($update);
        return redirect()->route('sm.tampilsf');
}

public function hapussf($id){
    $hapus = smsfinal::find($id);
    $hapus->delete();
    return redirect()->route('sm.tampilsf');
}
public function sfinal(){
    $semifinal = DB::table('smsfinals')
    ->select('smsfinals.namateam', DB::raw('SUM(smsfinals.total + COALESCE(smsemifinals.total, 0)) as total'))
    ->leftJoin('smsemifinals', 'smsfinals.namateam', '=', 'smsemifinals.namateam')
    ->groupBy('smsfinals.namateam')
    ->orderByDesc('total')
    ->get();
    return view('matalomba/sm/smsfinal', compact('semifinal'));
 }
 public function detailsf($id){
    $dataa = smsfinal::find($id);
    return view('matalomba/sm/detail/detailskor3', compact('dataa'));
 }

 public function pesertap(){
    $peserta = pesertasm::all();
    
    return view('admin/sm/tambahsf', compact('peserta'));
 }
 
}
