<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\day4kdbi;
use App\Models\pesertakdbi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;

class Day4kdbiController extends Controller
{
    public function tampilkdbi4(){
        $tambah = DB::table('day4kdbis')
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

    return view('admin/KDBI/day4', compact('groupedByRondeAndSesi'));
    }

    public function tambahkdbi4(Request $request){
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
        day4kdbi::create($tambah);
        return redirect()->route('kdbi.tampilkdbi4');
        
    }

    public function editkdbi4($id) {
        $edit = day4kdbi::find($id);
        $peserta = pesertakdbi::all();
        return view('admin/KDBI/editday4', compact('edit', 'peserta'));
    }

    public function updatekdbi4(Request $request, $id){
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
    $data = day4kdbi::find($id);
    $data->update($update);
        return redirect()->route('kdbi.tampilkdbi4');
}

public function hapuskdbi4($id){
    $hapus = day4kdbi::find($id);
    $hapus->delete();
    return redirect()->route('kdbi.tampilkdbi4');
}

 public function pesertaday1f(){
    $peserta = pesertakdbi::all();
    
    return view('admin/KDBI/tambah4', compact('peserta'));
 }
 public function day4round1(){
    $final = DB::table('day4kdbis')
    ->select(
        '*',
        DB::raw('RANK() OVER (ORDER BY vp DESC, created_at ASC) as rank')
    )
    ->where('ronde', '1')
    ->orderBy('vp', 'desc')
    ->orderBy('created_at', 'asc') 
    ->get();
    return view('matalomba/kdbi/finalronde1', compact('final'));
 }

 public function day4round2(){
    $final = DB::table('day4kdbis')
    ->select(
        '*',
        DB::raw('RANK() OVER (ORDER BY vp DESC, created_at ASC) as rank')
    )
    ->where('ronde', '2')
    ->orderBy('vp', 'desc')
    ->orderBy('created_at', 'asc') 
    ->get();
    return view('matalomba/kdbi/finalronde2', compact('final'));
 }
}
