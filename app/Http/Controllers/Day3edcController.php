<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesertaedc;
use App\Models\day1edc;
use App\Models\day2edc;
use App\Models\day3edc;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;

class Day3edcController extends Controller
{
    public function tampiledc3(){
        $tambah = DB::table('day3edcs')
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

    return view('admin/EDC/semifinalEDC', compact('groupedByRondeAndSesi'));
    }

    public function tambahedc3(Request $request){
        $tambah = $request->validate([
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
        $tambah['total'] = ($tambah['skorindividu1'] + $tambah['skorindividu2']) / 2 ;
        day3edc::create($tambah);
        return redirect()->route('edc.tampiledc3');
        
    }

    public function editedc3($id) {
        $edit = day3edc::find($id);
        $peserta = pesertaedc::all();
        return view('admin/EDC/editday3', compact('edit', 'peserta'));
    }

    public function updateedc3(Request $request, $id){
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
    $data = day3edc::find($id);
    $data->update($update);
        return redirect()->route('edc.tampiledc3');
}

public function hapusedc3($id){
    $hapus = day3edc::find($id);
    $hapus->delete();
    return redirect()->route('edc.tampiledc3');
}

 public function pesertaedcsf(){
    $peserta = pesertaedc::all();
    
    return view('admin/EDC/tambah3', compact('peserta'));
 }
 public function day3round1(){
    $semifinal = DB::table('day3edcs')
    ->select(
        '*',
        DB::raw('RANK() OVER (ORDER BY vp DESC, created_at ASC) as rank')
    )
    ->where('ronde', '1')
    ->orderBy('vp', 'desc')
    ->orderBy('created_at', 'asc') 
    ->get();


    return view('matalomba/edc/sfinalronde1', compact('semifinal'));
 }

 public function day3round2(){
    $semifinal = DB::table('day3edcs')
    ->select(
        '*',
        DB::raw('RANK() OVER (ORDER BY vp DESC, created_at ASC) as rank')
    )
    ->where('ronde', '2')
    ->orderBy('vp', 'desc')
    ->orderBy('created_at', 'asc') 
    ->get();
    return view('matalomba/edc/sfinalronde2', compact('semifinal'));
 }

 public function gabungansf(){
    $totalVpDay1 = day1edc::select('team', 'nama1', 'nama2', DB::raw('SUM(vp) as total'))
    ->groupBy('team', 'nama1', 'nama2')
    ->get();

$totalVpDay2 = day2edc::select('team', 'nama1', 'nama2', DB::raw('SUM(vp) as total'))
    ->groupBy('team', 'nama1', 'nama2')
    ->get();

$totalVpDay3 = day3edc::select('team', 'nama1', 'nama2', DB::raw('SUM(vp) as total'))
    ->groupBy('team', 'nama1', 'nama2')
    ->get();

$groupedByTeam = $totalVpDay1->concat($totalVpDay2)->concat($totalVpDay3)
    ->groupBy('team')
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
        $item['rank'] = $index + 1;
        return $item;
    });
        
    return view('matalomba/edc/sfinal', compact('groupedByTeam'));
 }
}
