<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\day1kdbi;
use App\Models\day2kdbi;
use App\Models\day3kdbi;
use App\Models\day4kdbi;
use App\Models\day5kdbi;
use App\Models\pesertakdbi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;

class Day4kdbiController extends Controller
{
    public function tampilkdbi4(){
        $tambah= DB::table('day4kdbis')
          ->orderBy('team')
        ->orderBy('ronde', 'asc')
        ->get();
    $groupedByRondeAndSesi = $tambah->groupBy(['team', 'ronde']);
       $groupedByRondeAndSesi = $tambah->groupBy(['team', 'ronde']);
          $now = Carbon::now();

    // Waktu target untuk ronde 2 day4edc (disamakan dengan day2edc ronde 1)
    $waktuTargetDay1Ronde2 = $waktuTargetDay2Ronde1 = Carbon::createFromFormat('Y-m-d H:i:s', '2023-05-19 15:00:00', 'Asia/Jakarta');

    // Query untuk day4edc ronde 1
    $totalVpDay1Ronde1 = day4kdbi::select(
        'team',
        'nama1',
        'nama2',
        DB::raw('MAX(vp) as totall'),
      	DB::raw('AVG(total) as rata')
    )
    ->where('ronde', '1')
    ->groupBy('team', 'nama1', 'nama2')
    ->get();

    // Query untuk day4edc ronde 2 (hanya jika waktunya sudah tiba)
    $totalVpDay1Ronde2 = collect();
    if ($now->gte($waktuTargetDay1Ronde2)) {
        $totalVpDay1Ronde2 = day4kdbi::select(
            'team',
            'nama1',
            'nama2',
            DB::raw('MAX(vp) as totall'),
          DB::raw('AVG(total) as rata')
        )
        ->where('ronde', '2')
        ->groupBy('team', 'nama1', 'nama2')
        ->get();
    }


    // Gabungkan semua hasil
    $groupedByTeam = $totalVpDay1Ronde1
        ->concat($totalVpDay1Ronde2)
        ->groupBy('team')
        ->map(function ($group) {
            return [
                'team' => $group[0]['team'],
                'nama1' => $group[0]['nama1'],
                'nama2' => $group[0]['nama2'],
                'totall' => $group->sum('totall'),
              	'rata' => round($group->avg('rata'), 2),
            ];
        })
      ->sortByDesc('rata')
        ->sortByDesc('totall')
        ->values()
        ->map(function ($item, $index) {
            $item['rank'] = $index + 1;
            return $item;
        });

    return view('admin/KDBI/day4', compact('groupedByRondeAndSesi', 'groupedByTeam'));
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
    
            $totalSkorTim = ($request->input('skorindividu1.' . $i) + $request->input('skorindividu2.' . $i)) / 2;
    
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
    $update['total'] = ($update['skorindividu1'] + $update['skorindividu2']) / 2  ;
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
       $totalVpDay1 = day1kdbi::select('team', 'nama1', 'nama2', DB::raw('SUM(vp) as totall'), DB::raw('SUM(total) as rata'))
    ->groupBy('team', 'nama1', 'nama2')
    ->get();

$totalVpDay2 = day2kdbi::select('team', 'nama1', 'nama2', DB::raw('SUM(vp) as totall'), DB::raw('SUM(total) as rata'))
    ->groupBy('team', 'nama1', 'nama2')
    ->get();
$totalVpDay3 = day3kdbi::select('team', 'nama1', 'nama2', DB::raw('SUM(vp) as totall'), DB::raw('SUM(total) as rata'))
    ->groupBy('team', 'nama1', 'nama2')
    ->get();



$peserta = $totalVpDay1->concat($totalVpDay2)->concat($totalVpDay3)
    ->groupBy('team')
    ->map(function ($group) {
        return [
            'team' => $group[0]['team'],
            'nama1' => $group[0]['nama1'],
            'nama2' => $group[0]['nama2'],
            'totall' => $group->sum('totall'),
          'rata' => $group->sum('rata') / 6
        ];
    })
    ->sortByDesc('rata')
  ->sortByDesc('totall')
    ->values()
    ->map(function ($item, $index) {
        $item['rank'] = $index + 1;
        return $item;
    })
  ->take('4');
    
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
        DB::raw("STRING_AGG(DISTINCT juri, '<br>') as juri"),
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
  ->sortByDesc('vp')
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
        DB::raw("STRING_AGG(DISTINCT juri, '<br>') as juri"),
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
  ->sortByDesc('vp')
->sortByDesc('total')
->values()
->map(function ($item, $index) {
    $item->rank = $index + 1;
    return $item;
});
    return view('matalomba/kdbi/finalronde2', compact('final'));
 }
}
