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
        $groupedByRondeAndSesi = DB::table('day4kdbis')
        ->orderBy('ronde', 'asc')
        ->get()
        ->groupBy('team')
        ->map(function ($group) {
            return $group->sortBy('ronde')->values()->map(function ($item, $key) {
                $item = (array) $item;
                
                return (object) $item;
            });
        });

    return view('admin/KDBI/day4', compact('groupedByRondeAndSesi'));
    }

    public function tambahkdbi4(Request $request){
        $validatedData = [];

        for ($i = 1; $i <= 4; $i++) {
            $validator = Validator::make($request->all(), [
             
            ]);
    
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
    
            $totalSkorTim = ($request->input('skorindividu1.' . $i) + $request->input('skorindividu2.' . $i)) ;
    
            $day4kdbi = day4kdbi::create([
                'juri' => $request->input('juri.' . $i),
                'ronde' => $request->input('ronde.' . $i),
                'team' => $request->input('team.' . $i),
                'posisi' => $request->input('posisi.' . $i),
                'posisi1' => $request->input('posisi1.' . $i),
                'posisi2' => $request->input('posisi2.' . $i),
                'nama1' => $request->input('nama1.' . $i),
                'nama2' => $request->input('nama2.' . $i),
                'skorindividu1' => $request->input('skorindividu1.' . $i),
                'skorindividu2' => $request->input('skorindividu2.' . $i),
                'total' => $totalSkorTim, 
            ]);
    
            $validatedData[] = $day4kdbi;
        }
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
            'team' => 'required',
            'posisi' => 'required',
            'posisi1' => 'required',
            'posisi2' => 'required',
            'nama1' => 'required',
            'nama2' => 'required',
            'skorindividu1' => 'required|integer|min:0|max:100',
            'skorindividu2' => 'required|integer|min:0|max:100',
    ]);
    $update['total'] = ($update['skorindividu1'] + $update['skorindividu2'])  ;
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
        //DB::raw('ROUND(AVG(skorindividu1), 0)::text as skorindividu1'), 
        //DB::raw('ROUND(AVG(skorindividu2), 0)::text as skorindividu2'),
        DB::raw('AVG(skorindividu1) as skorindividu1'), 
        DB::raw('AVG(skorindividu2) as skorindividu2'),
        DB::raw('MAX(vp) as vp')
    )
    ->where('ronde', 1) // Menambahkan filter untuk ronde 1
    ->groupBy('team', 'ronde')
    ->get();

$final = $groupedData->map(function ($row) {
    $row->skorindividu1 = number_format($row->skorindividu1, 1, '.', '');
    $row->skorindividu2 = number_format($row->skorindividu2, 1, '.', '');
    $row->total = number_format(($row->skorindividu1 + $row->skorindividu2) / 2, 1, '.', '');
    //$row->total = round(($row->skorindividu1 + $row->skorindividu2) / 2);
    return $row;
})
->sortByDesc('total')
->values()
->map(function ($item, $index) {
    $item->rank = $index + 1;
    return $item;
});
    return view('matalomba/kdbi/finalronde1', compact('final'));
 }

 public function day4round2(){
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
    ->where('ronde', 2) // Menambahkan filter untuk ronde 1
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
    return view('matalomba/kdbi/finalronde2', compact('final'));
 }
}
