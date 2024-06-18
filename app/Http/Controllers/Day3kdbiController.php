<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesertakdbi;
use App\Models\day1kdbi;
use App\Models\day2kdbi;
use App\Models\day3kdbi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;

class Day3kdbiController extends Controller
{
    public function tampilkdbi3(){
        $tambah = DB::table('day3kdbis')
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

    return view('admin/KDBI/semifinalKDBI', compact('groupedByRondeAndSesi'));
    }

    public function tambahkdbi3(Request $request){
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
        day3kdbi::create($tambah);
        return redirect()->route('kdbi.tampilkdbi3');
        
    }

    public function editkdbi3($id) {
        $edit = day3kdbi::find($id);
        $peserta = pesertakdbi::all();
        return view('admin/KDBI/editday3', compact('edit', 'peserta'));
    }

    public function updatekdbi3(Request $request, $id){
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
    $data = day3kdbi::find($id);
    $data->update($update);
        return redirect()->route('kdbi.tampilkdbi3');
}

public function hapuskdbi3($id){
    $hapus = day3kdbi::find($id);
    $hapus->delete();
    return redirect()->route('kdbi.tampilkdbi3');
}

 public function pesertakdbisf(){
    $peserta = pesertakdbi::all();
    
    return view('admin/KDBI/tambah3', compact('peserta'));
 }
 public function day3round1(){
    $semifinal = DB::table('day3kdbis')
    ->select(
        '*',
        DB::raw('RANK() OVER (ORDER BY vp DESC, created_at ASC) as rank')
    )
    ->where('ronde', '1')
    ->orderBy('vp', 'desc')
    ->orderBy('created_at', 'asc') 
    ->get();


    return view('matalomba/kdbi/sfinalronde1', compact('semifinal'));
 }

 public function day3round2(){
    $semifinal = DB::table('day3kdbis')
    ->select(
        '*',
        DB::raw('RANK() OVER (ORDER BY vp DESC, created_at ASC) as rank')
    )
    ->where('ronde', '2')
    ->orderBy('vp', 'desc')
    ->orderBy('created_at', 'asc') 
    ->get();
    return view('matalomba/kdbi/sfinalronde2', compact('semifinal'));
 }

 public function gabungankdbisf(){
    $totalVpDay1 = day1kdbi::select('team', 'nama1', 'nama2', DB::raw('SUM(vp) as total'))
    ->groupBy('team', 'nama1', 'nama2')
    ->get();

$totalVpDay2 = day2kdbi::select('team', 'nama1', 'nama2', DB::raw('SUM(vp) as total'))
    ->groupBy('team', 'nama1', 'nama2')
    ->get();

$totalVpDay3 = day3kdbi::select('team', 'nama1', 'nama2', DB::raw('SUM(vp) as total'))
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
        
    return view('matalomba/kdbi/sfinal', compact('groupedByTeam'));
 }
}
