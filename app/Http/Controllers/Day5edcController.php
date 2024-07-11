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
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class Day5edcController extends Controller
{
    public function tampiledc5(){
        $groupedByRondeAndSesi = DB::table('day5edcs')
        ->orderBy('ronde', 'asc')
        ->get()
        ->groupBy('team')
        ->map(function ($group) {
            return $group->sortBy('ronde')->values()->map(function ($item, $key) {
                $item = (array) $item;
                
                return (object) $item;
            });
        });

    return view('admin/EDC/day5', compact('groupedByRondeAndSesi'));
    }

    public function tambahedc5(Request $request){
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
    
            $day5edc = day5edc::create([
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
    
            $validatedData[] = $day5edc;
        }
        
        return redirect()->route('edc.tampiledc5');
        
    }

    public function editedc5($id) {
        $edit = day5edc::find($id);
        $peserta = pesertaedc::all();
        return view('admin/EDC/editday5', compact('edit', 'peserta'));
    }

    public function updateedc5(Request $request, $id){
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
    $groupedData = DB::table('day5edcs')
    ->select(
        'team',
        'ronde', 
        DB::raw("STRING_AGG(DISTINCT nama1, ', ') as nama1"),
        DB::raw("STRING_AGG(DISTINCT nama2, ', ') as nama2"),
        DB::raw("STRING_AGG(DISTINCT posisi, ', ') as posisi"),
        DB::raw("STRING_AGG(DISTINCT posisi1, ', ') as posisi1"),
        DB::raw("STRING_AGG(DISTINCT posisi2, ', ') as posisi2"),
        DB::raw("STRING_AGG(DISTINCT juri, ', ') as juri"),
        DB::raw('AVG(skorindividu1) as skorindividu1'), 
        DB::raw('AVG(skorindividu2) as skorindividu2'),
        //DB::raw('ROUND(AVG(skorindividu1), 0)::text as skorindividu1'), 
        //DB::raw('ROUND(AVG(skorindividu2), 0)::text as skorindividu2'),
        DB::raw('MAX(vp) as vp')
    )
    ->where('ronde', 1)
    ->groupBy('team', 'ronde')
    ->get();

$final = $groupedData->map(function ($row) {
    $row->skorindividu1 = number_format($row->skorindividu1, 1, '.', '');
    $row->skorindividu2 = number_format($row->skorindividu2, 1, '.', '');
    $row->total = number_format(($row->skorindividu1 + $row->skorindividu2) / 2, 1, '.', '');
    return $row;
})
->sortByDesc('total')
->values()
->map(function ($item, $index) {
    $item->rank = $index + 1;
    return $item;
});
    return view('matalomba/edc/finalronde3', compact('final'));
 }

 public function gabunganf(){
  
    $now = Carbon::now();

    // Waktu target untuk ronde 2 day4edc (disamakan dengan day2edc ronde 1)
    $waktuTargetDay1Ronde2 = $waktuTargetDay2Ronde1 = Carbon::createFromFormat('Y-m-d H:i:s', '2024-05-19 15:00:00', 'Asia/Jakarta');

    // Query untuk day4edc ronde 1
    $totalVpDay1Ronde1 = day4edc::select(
        'team',
        'nama1',
        'nama2',
        DB::raw('MAX(vp) as total')
    )
    ->where('ronde', '1')
    ->groupBy('team', 'nama1', 'nama2')
    ->get();

    // Query untuk day4edc ronde 2 (hanya jika waktunya sudah tiba)
    $totalVpDay1Ronde2 = collect();
    if ($now->gte($waktuTargetDay1Ronde2)) {
        $totalVpDay1Ronde2 = day4edc::select(
            'team',
            'nama1',
            'nama2',
            DB::raw('MAX(vp) as total')
        )
        ->where('ronde', '2')
        ->groupBy('team', 'nama1', 'nama2')
        ->get();
    }

    // Query untuk day5edc ronde 1 (hanya jika waktunya sudah tiba)
    $totalVpDay2Ronde1 = collect();
    if ($now->gte($waktuTargetDay2Ronde1)) {
        $totalVpDay2Ronde1 = day5edc::select(
            'team',
            'nama1',
            'nama2',
            DB::raw('MAX(vp) as total')
        )
        ->where('ronde', '1')
        ->groupBy('team', 'nama1', 'nama2')
        ->get();
    }

    // Gabungkan semua hasil
    $groupedByTeam = $totalVpDay1Ronde1
        ->concat($totalVpDay1Ronde2)
        ->concat($totalVpDay2Ronde1)
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
        $dataa = day4edc::where('ronde', '1')->get();
    $dataa2 = $now->gte($waktuTargetDay1Ronde2) ? day4edc::where('ronde', '2')->get() : collect();
    $dataa3 = $now->gte($waktuTargetDay2Ronde1) ? day5edc::where('ronde', '1')->get() : collect();
    return view('matalomba/edc/final', compact('groupedByTeam', 'dataa', 'dataa2', 'dataa3'));
 }
}
