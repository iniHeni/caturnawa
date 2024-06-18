<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\day5edc;
use App\Models\day4edc;
use App\Models\pesertaedc;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;

class Day5edcController extends Controller
{
    public function tampiledc5(){
        $tambah = DB::table('day5edcs')
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

    return view('admin/EDC/day5', compact('groupedByRondeAndSesi'));
    }

    public function tambahedc5(Request $request){
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
        day5edc::create($tambah);
        return redirect()->route('edc.tampiledc5');
        
    }

    public function editedc5($id) {
        $edit = day4edc::find($id);
        $peserta = pesertaedc::all();
        return view('admin/EDC/editday5', compact('edit', 'peserta'));
    }

    public function updateedc5(Request $request, $id){
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
    $data = day5edc::find($id);
    $data->update($update);
        return redirect()->route('edc.tampiledc5');
}

public function hapusedc5($id){
    $hapus = day5edc::find($id);
    $hapus->delete();
    return redirect()->route('edc.tampiledc5');
}

 public function pesertaday2f(){
    $peserta = pesertaedc::all();
    
    return view('admin/EDC/tambah5', compact('peserta'));
 }
 public function day5round1(){
    $final = DB::table('day5edcs')
    ->select(
        '*',
        DB::raw('RANK() OVER (ORDER BY vp DESC, created_at ASC) as rank')
    )
    ->where('ronde', '1')
    ->orderBy('vp', 'desc')
    ->orderBy('created_at', 'asc') 
    ->get();
    return view('matalomba/edc/finalronde3', compact('final'));
 }

 public function gabunganf(){
    $totalVpDay1 = day4edc::select(
        'team',
        'nama1',
        'nama2',
        DB::raw('SUM(vp) as total')
    )
    ->groupBy('team', 'nama1', 'nama2') // Group by nama1 dan nama2 juga
    ->get();
    
    $totalVpDay2 = day5edc::select(
        'team',
        'nama1',
        'nama2',
        DB::raw('SUM(vp) as total')
    )
    ->groupBy('team', 'nama1', 'nama2')
    ->get();
    
    $groupedByTeam = $totalVpDay1->concat($totalVpDay2)
        ->groupBy('team') // Group by team saja untuk penggabungan
        ->map(function ($group) {
            return [
                'team' => $group[0]['team'],
                'nama1' => $group[0]['nama1'],
                'nama2' => $group[0]['nama2'],
                'total' => $group->sum('total')
            ];
        })
        ->sortByDesc('total') 
        ->values()
        ->map(function ($item, $index) {
            $item['rank'] = $index + 1; // Tambahkan peringkat (rank)
            return $item;
        });
        
    return view('matalomba/edc/final', compact('groupedByTeam'));
 }
}
