<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\day5kdbi;
use App\Models\day4kdbi;
use App\Models\pesertakdbi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;

class Day5kdbiController extends Controller
{
    public function tampilkdbi5(){
        $tambah = DB::table('day5kdbis')
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

    return view('admin/KDBI/day5', compact('groupedByRondeAndSesi'));
    }

    public function tambahkdbi5(Request $request){
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
        day5kdbi::create($tambah);
        return redirect()->route('kdbi.tampilkdbi5');
        
    }

    public function editkdbi5($id) {
        $edit = day5kdbi::find($id);
        $peserta = pesertakdbi::all();
        return view('admin/KDBI/editday5', compact('edit', 'peserta'));
    }

    public function updatekdbi5(Request $request, $id){
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
    $data = day5kdbi::find($id);
    $data->update($update);
        return redirect()->route('kdbi.tampilkdbi5');
}

public function hapuskdbi5($id){
    $hapus = day5kdbi::find($id);
    $hapus->delete();
    return redirect()->route('kdbi.tampilkdbi5');
}

 public function pesertaday2f(){
    $peserta = pesertakdbi::all();
    
    return view('admin/KDBI/tambah5', compact('peserta'));
 }
 public function day5r1(){
    $groupedData = DB::table('day4kdbis')
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
    ->where('ronde', 1) // Menambahkan filter untuk ronde 1
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
    return view('matalomba/kdbi/finalronde3', compact('final'));
 }

 public function gabungankdbif(){
    $day4Data = day4kdbi::select('team', 'nama1', 'nama2', 'ronde', DB::raw('MIN(vp) as vp')) 
   ->groupBy('team', 'nama1', 'nama2', 'ronde')
   ->get();


$day5Data = day5kdbi::select('team', 'nama1', 'nama2', 'ronde', DB::raw('MIN(vp) as vp')) 
   ->groupBy('team', 'nama1', 'nama2', 'ronde')
   ->get();


$mergedData = $day4Data->concat($day5Data);


$groupedByTeam = $mergedData->groupBy('team')->map(function ($teamData) {
   $totalVpPerRonde = $teamData->groupBy('ronde')->map->sum('vp'); 
   return [
       'team' => $teamData[0]['team'],
       'nama1' => $teamData[0]['nama1'],
       'nama2' => $teamData[0]['nama2'],
       'total_vp_ronde1' => $totalVpPerRonde->get(1, 0), 
       'total_vp_ronde2' => $totalVpPerRonde->get(2, 0),
       'total' => $totalVpPerRonde->sum(), 
   ];
});

// Urutkan berdasarkan total VP dan tambahkan peringkat
$groupedByTeam = $groupedByTeam->sortByDesc('total')->values()->map(function ($item, $index) {
   $item['rank'] = $index + 1;
   return $item;
});
    return view('matalomba/kdbi/final', compact('groupedByTeam'));
 }
}
