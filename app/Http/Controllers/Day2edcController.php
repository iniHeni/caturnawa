<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesertaedc;
use App\Models\day2edc;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;

class Day2edcController extends Controller
{
    public function tampiledc2(){
        $tambah = DB::table('day2edcs')
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

    return view('admin/EDC/day2', compact('groupedByRondeAndSesi'));
    }

    public function tambahedc2(Request $request){
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
        day2edc::create($tambah);
        return redirect()->route('edc.tampiledc2');
        
    }

    public function editedc2($id) {
        $edit = day2edc::find($id);
        $peserta = pesertaedc::all();
        return view('admin/EDC/editday2', compact('edit', 'peserta'));
    }

    public function updateedc2(Request $request, $id){
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
    $data = day2edc::find($id);
    $data->update($update);
        return redirect()->route('edc.tampiledc2');
}

public function hapusedc2($id){
    $hapus = day2edc::find($id);
    $hapus->delete();
    return redirect()->route('edc.tampiledc2');
}

 public function pesertaday2(){
    $peserta = pesertaedc::all();
    
    return view('admin/EDC/tambah2', compact('peserta'));
 }
 public function day2round1(){
    $dataa = day2edc::where('ronde', '1')->orderBy('sesi')->get();
    return view('matalomba/edc/round3', compact('dataa'));
 }
 public function detailday2r1($sesi){
    $dataa = DB::table('day2edcs')
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
        
    return view('matalomba/edc/detailskor/day2r1', compact('paginatedData'));
 }
 public function day2round2(){
    $dataa = day2edc::where('ronde', '2')->orderBy('sesi')->get();
    return view('matalomba/edc/round4', compact('dataa'));
 }
 public function detailday2r2($sesi){
    $dataa = DB::table('day2edcs')
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
        
    return view('matalomba/edc/detailskor/day2r2', compact('paginatedData'));
 }
    }
