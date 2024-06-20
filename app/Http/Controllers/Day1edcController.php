<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesertaedc;
use App\Models\day1edc;
use App\Models\day2edc;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;

class Day1edcController extends Controller
{
    public function tampiledc(){
        $tambah = DB::table('day1edcs')
        ->orderBy('ronde', 'asc') 
        ->orderBy('sesi', 'asc') 
        ->get();
        

    $tambahCollection = new Collection($tambah);

    $groupedByRondeAndSesi = $tambahCollection->groupBy(['ronde', 'sesi'])->map(function ($group) {
        // Reset and calculate rank within each group
        return $group->sortByDesc('total')->values()->map(function ($item, $key) {
            $item->rank = $key + 1;
            return $item;
        });
    });

    return view('admin/EDC/day1', compact('groupedByRondeAndSesi'));
    }

    public function tambahedc(Request $request){
        $tambah = $request->validate([
            'ronde' => 'required',
            'sesi' => 'required',
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
        day1edc::create($tambah);
        return redirect()->route('edc.tampiledc');
        
    }

    public function editedc($id) {
        $edit = day1edc::find($id);
        $peserta = pesertaedc::all();
        return view('admin/EDC/editday1', compact('edit', 'peserta'));
    }

    public function updateedc(Request $request, $id){
    $update = $request->validate([
        'ronde' => 'required',
            'sesi' => 'required',
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
    $data = day1edc::find($id);
    $data->update($update);
        return redirect()->route('edc.tampiledc');
}

public function hapusedc($id){
    $hapus = day1edc::find($id);
    $hapus->delete();
    return redirect()->route('edc.tampiledc');
}
 public function pesertaday1(){
    $peserta = pesertaedc::all();
    
    return view('admin/EDC/tambah', compact('peserta'));
 }
 public function day1round1(){
    $dataa = day1edc::where('ronde', '1')->orderBy('sesi')->get();
    return view('matalomba/edc/round1', compact('dataa'));
 }
 public function detailday1r1($sesi){
    $dataa = DB::table('day1edcs')
        ->where('ronde', '1')
        ->where('sesi', $sesi)
        ->orderBy('total', 'desc')
        ->get();

    $dataa = $dataa->map(function ($item, $key) {
        $item->rank = $key + 1;
        return $item;
    });

    $perPage = 20; 
    $currentPage = Paginator::resolveCurrentPage();
    $dataa = $dataa->slice(($currentPage - 1) * $perPage, $perPage)->all();
    $paginatedData = new Paginator($dataa, $perPage, $currentPage);
        
    return view('matalomba/edc/detailskor/day1r1', compact('paginatedData'));
 }
 public function day1round2(){
    $dataa = day1edc::where('ronde', '2')->orderBy('sesi')->get();
    return view('matalomba/edc/round2', compact('dataa'));
 }
 public function detailday1r2($sesi){
    $dataa = DB::table('day1edcs')
        ->where('ronde', '2')
        ->where('sesi', $sesi)
        ->orderBy('total', 'desc')
        ->get();

    $dataa = $dataa->map(function ($item, $key) {
        $item->rank = $key + 1;
        return $item;
    });

    $perPage = 20; 
    $currentPage = Paginator::resolveCurrentPage();
    $dataa = $dataa->slice(($currentPage - 1) * $perPage, $perPage)->all();
    $paginatedData = new Paginator($dataa, $perPage, $currentPage);
        
    return view('matalomba/edc/detailskor/day1r2', compact('paginatedData'));
 }
 public function gabungan(){
    $totalVpDay1 = day1edc::select(
        'team',
        'nama1',
        'nama2',
        DB::raw('SUM(vp) as total')
    )
    ->groupBy('team', 'nama1', 'nama2') // Group by nama1 dan nama2 juga
    ->get();
    
    $totalVpDay2 = day2edc::select(
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
    return view('matalomba/edc/penyisihan', compact('groupedByTeam'));
 }
    }
