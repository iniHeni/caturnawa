<?php

namespace App\Http\Controllers;

use App\Models\spcfinal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class SpcfinalController extends Controller
{
    public function tampilf(){
        $tambah = spcfinal::select(
            '*',
            DB::raw('RANK() OVER (ORDER BY total DESC) as rank') // Perhitungan rank
        )->get();
        
        return view('admin/LKTI/finalLKTI', compact('tambah'));
     }

    public function tambahf(Request $request){
        $tambah = $request->validate([
            'university' => 'required|string|max:50',
            'namapeserta' => 'required|string|max:50',
            'juri' => 'required',
            'krit1para1' => 'required|integer|min:0|max:100',
            'krit1para2' => 'required|integer|min:0|max:90',
            'krit1para3' => 'required|integer|min:0|max:80',
            'krit1para4' => 'required|integer|min:0|max:70',
            'krit1para5' => 'required|integer|min:0|max:65',
            'krit1para6' => 'required|integer|min:0|max:60',
            'krit1para7' => 'required|integer|min:0|max:50',
            'krit2para1' => 'required|integer|min:0|max:100',
            'krit2para2' => 'required|integer|min:0|max:90',
            'krit2para3' => 'required|integer|min:0|max:80',
            'krit2para4' => 'required|integer|min:0|max:70',
            'krit2para5' => 'required|integer|min:0|max:65',
            'krit2para6' => 'required|integer|min:0|max:60',
            'krit2para7' => 'required|integer|min:0|max:50',
            'krit3para1' => 'required|integer|min:0|max:100',
            'krit3para2' => 'required|integer|min:0|max:90',
            'krit3para3' => 'required|integer|min:0|max:80',
            'krit3para4' => 'required|integer|min:0|max:70',
            'krit3para5' => 'required|integer|min:0|max:65',
            'krit3para6' => 'required|integer|min:0|max:60',
            'krit3para7' => 'required|integer|min:0|max:50',
        ]);
        $tambah['scorepemaparanmateri'] = $tambah['krit1para1'] + $tambah['krit1para2'] + $tambah['krit1para3'] + $tambah['krit1para4'] + $tambah['krit1para5'] + $tambah['krit1para6'] + $tambah['krit1para7'];
        $tambah['scorepertanyaandanjawaban'] = $tambah['krit2para1'] + $tambah['krit2para2'] + $tambah['krit2para3'] + $tambah['krit2para4'] + $tambah['krit2para5'] + $tambah['krit2para6'] + $tambah['krit2para7'];
        $tambah['scoreaspekkesesuaian'] = $tambah['krit3para1'] + $tambah['krit3para2'] + $tambah['krit3para3'] + $tambah['krit3para4'] + $tambah['krit3para5'] + $tambah['krit3para6'] + $tambah['krit3para7'];
        $tambah['total'] = $tambah['scorepemaparanmateri'] + $tambah['scorepertanyaandanjawaban'] + $tambah['scoreaspekkesesuaian'];
        spcfinal::create($tambah);
        return redirect()->route('spc.tampilf');

    }

    public function editf($id) {
        $edit = spcfinal::find($id);
        return view('admin/LKTI/editf', compact('edit'));
    }

    public function updatef(Request $request, $id){
    $update = $request->validate([
            'university' => 'required|string|max:50',
            'namapeserta' => 'required|string|max:50',
            'juri' => 'required',
            'krit1para1' => 'required|integer|min:0|max:100',
            'krit1para2' => 'required|integer|min:0|max:90',
            'krit1para3' => 'required|integer|min:0|max:80',
            'krit1para4' => 'required|integer|min:0|max:70',
            'krit1para5' => 'required|integer|min:0|max:65',
            'krit1para6' => 'required|integer|min:0|max:60',
            'krit1para7' => 'required|integer|min:0|max:50',
            'krit2para1' => 'required|integer|min:0|max:100',
            'krit2para2' => 'required|integer|min:0|max:90',
            'krit2para3' => 'required|integer|min:0|max:80',
            'krit2para4' => 'required|integer|min:0|max:70',
            'krit2para5' => 'required|integer|min:0|max:65',
            'krit2para6' => 'required|integer|min:0|max:60',
            'krit2para7' => 'required|integer|min:0|max:50',
            'krit3para1' => 'required|integer|min:0|max:100',
            'krit3para2' => 'required|integer|min:0|max:90',
            'krit3para3' => 'required|integer|min:0|max:80',
            'krit3para4' => 'required|integer|min:0|max:70',
            'krit3para5' => 'required|integer|min:0|max:65',
            'krit3para6' => 'required|integer|min:0|max:60',
            'krit3para7' => 'required|integer|min:0|max:50',
    ]);
    $data = spcfinal::find($id);
    $update['scorepemaparanmateri'] = $update['krit1para1'] + $update['krit1para2'] + $update['krit1para3'] + $update['krit1para4'] + $update['krit1para5'] + $update['krit1para6'] + $update['krit1para7'];
    $update['scorepertanyaandanjawaban'] = $update['krit2para1'] + $update['krit2para2'] + $update['krit2para3'] + $update['krit2para4'] + $update['krit2para5'] + $update['krit2para6'] + $update['krit2para7'];
    $update['scoreaspekkesesuaian'] = $update['krit3para1'] + $update['krit3para2'] + $update['krit3para3'] + $update['krit3para4'] + $update['krit3para5'] + $update['krit3para6'] + $update['krit3para7'];
    $update['total'] = $update['scorepemaparanmateri'] + $update['scorepertanyaandanjawaban'] + $update['scoreaspekkesesuaian'];
    $data->update($update);
        return redirect()->route('spc.tampilf');
}

public function hapusf($id){
    $hapus = spcfinal::find($id);
    $hapus->delete();
    return redirect()->route('spc.tampilf');
}
public function final(){
    $final = spcfinal::select(
        '*',
        DB::raw('RANK() OVER (ORDER BY total DESC) as rank') // Perhitungan rank
    )->get();
    
    return view('matalomba/lkti/final', compact('final'));
 }
}