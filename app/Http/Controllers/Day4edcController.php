<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\day4edc;
use App\Models\pesertaedc;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;

class Day4edcController extends Controller
{
    public function tampiledc4(){
        $tambah = DB::table('day4edcs')
        ->orderBy('ronde', 'asc')
        ->get();

    $tambahCollection = new Collection($tambah);

    $groupedByRondeAndSesi = $tambahCollection->groupBy('ronde')->map(function ($group, $ronde) { // Pass $ronde as argument
        return $group->sortByDesc('total')->values()->map(function ($item, $key) use ($ronde) { // Pass $ronde to the inner map
            $item = (array) $item;
            $item['rank'] = $key + 1;
            $item['ronde'] = $ronde; // Tambahkan properti ronde kembali
            return (object) $item;
        });
    });

    return view('admin/EDC/day4', compact('groupedByRondeAndSesi'));
    }

    public function tambahedc4(Request $request){
        $tambah = $request->validate([
            'ronde' => 'required',
            'juri' => 'required',
            'team' => 'required',
            'posisi' => 'required',
            'posisi1' => 'required',
            'posisi2' => 'required',
            'nama1' => 'required',
            'nama2' => 'required',
            'skorindividu1' => 'required|integer|min:0|max:100',
            'skorindividu2' => 'required|integer|min:0|max:100',
            
        ]);
        $tambah['total'] = ($tambah['skorindividu1'] + $tambah['skorindividu2']) / 2 ;
        day4edc::create($tambah);
        return redirect()->route('edc.tampiledc4');
        
    }

    public function editedc4($id) {
        $edit = day4edc::find($id);
        $peserta = pesertaedc::all();
        return view('admin/EDC/editday4', compact('edit', 'peserta'));
    }

    public function updateedc4(Request $request, $id){
    $update = $request->validate([
        'ronde' => 'required',
            'juri' => 'required',
            'room' => 'required',
            'team' => 'required',
            'posisi' => 'required',
            'posisi1' => 'required',
            'posisi2' => 'required',
            'nama1' => 'required',
            'nama2' => 'required',
            'skorindividu1' => 'required|integer|min:0|max:100',
            'skorindividu2' => 'required|integer|min:0|max:100',
    ]);
    $update['total'] = ($update['skorindividu1'] + $update['skorindividu2']) / 2 ;
    $data = day4edc::find($id);
    $data->update($update);
        return redirect()->route('edc.tampiledc4');
}

public function hapusedc4($id){
    $hapus = day4edc::find($id);
    $hapus->delete();
    return redirect()->route('edc.tampiledc4');
}

 public function pesertaday1f(){
    $peserta = pesertaedc::all();
    
    return view('admin/EDC/tambah4', compact('peserta'));
 }
 public function day4round1(){
    $groupedData = DB::table('day4edcs')
    ->select(
        'team',
        'ronde',
        DB::raw("STRING_AGG(DISTINCT nama1, ', ') as nama1"),
        DB::raw("STRING_AGG(DISTINCT nama2, ', ') as nama2"),
        DB::raw("STRING_AGG(DISTINCT posisi, ', ') as posisi"),
        DB::raw("STRING_AGG(DISTINCT posisi1, ', ') as posisi1"),
        DB::raw("STRING_AGG(DISTINCT posisi2, ', ') as posisi2"),
        DB::raw("STRING_AGG(DISTINCT juri, ', ') as juri"),
        DB::raw('ROUND(AVG(skorindividu1), 0)::text as skorindividu1'), 
        DB::raw('ROUND(AVG(skorindividu2), 0)::text as skorindividu2'),
        DB::raw('MAX(vp) as vp')
    )
    ->where('ronde', 1)
    ->groupBy('team', 'ronde')
    ->get();

$final = $groupedData->map(function ($row) {
    $row->total = round(($row->skorindividu1 + $row->skorindividu2) / 2);
    return $row;
})
->sortByDesc('total')
->values()
->map(function ($item, $index) {
    $item->rank = $index + 1;
    return $item;
});
    return view('matalomba/edc/finalronde1', compact('final'));
 }

 public function day4round2(){
    $groupedData = DB::table('day4edcs')
    ->select(
        'team',
        'ronde', 
        DB::raw("STRING_AGG(DISTINCT nama1, ', ') as nama1"),
        DB::raw("STRING_AGG(DISTINCT nama2, ', ') as nama2"),
        DB::raw("STRING_AGG(DISTINCT posisi, ', ') as posisi"),
        DB::raw("STRING_AGG(DISTINCT posisi1, ', ') as posisi1"),
        DB::raw("STRING_AGG(DISTINCT posisi2, ', ') as posisi2"),
        DB::raw("STRING_AGG(DISTINCT juri, ', ') as juri"),
        DB::raw('ROUND(AVG(skorindividu1), 0)::text as skorindividu1'), 
        DB::raw('ROUND(AVG(skorindividu2), 0)::text as skorindividu2'),
        DB::raw('MAX(vp) as vp')
    )
    ->where('ronde', 2) 
    ->groupBy('team', 'ronde')
    ->get();

$final = $groupedData->map(function ($row) {
    $row->total = round(($row->skorindividu1 + $row->skorindividu2) / 2);
    return $row;
})
->sortByDesc('total')
->values()
->map(function ($item, $index) {
    $item->rank = $index + 1;
    return $item;
});
    return view('matalomba/edc/finalronde2', compact('final'));
 }

}
