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
        ->orderBy('room', 'asc')
        ->orderBy('total', 'desc') 
        ->get();
    
    $groupedByRondeAndSesi = $tambah->groupBy(['ronde', 'room']);
    

    return view('admin/EDC/semifinalEDC', compact('groupedByRondeAndSesi'));
    }

    public function tambahedc3(Request $request){
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
    
            $day3edc = day3edc::create([
                'juri' => $request->input('juri.' . $i),
                'ronde' => $request->input('ronde.' . $i),
                'room' => $request->input('room.' . $i),
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
    
            $validatedData[] = $day3edc;
        }
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
    ->orderBy('room', 'asc') 
    ->orderBy('vp', 'desc')
    ->orderBy('created_at', 'asc') 
    ->get();
    $dataByRoom = $semifinal->groupBy('room');

    return view('matalomba/edc/sfinalronde1', compact('dataByRoom'));
 }

 public function day3round2(){
    $semifinal = DB::table('day3edcs')
    ->select(
        '*',
        DB::raw('RANK() OVER (ORDER BY vp DESC, created_at ASC) as rank')
    )
    ->where('ronde', '2')
    ->orderBy('room', 'asc') 
    ->orderBy('vp', 'desc')
    ->orderBy('created_at', 'asc') 
    ->get();
    $dataByRoom = $semifinal->groupBy('room');
    return view('matalomba/edc/sfinalronde2', compact('dataByRoom'));
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
