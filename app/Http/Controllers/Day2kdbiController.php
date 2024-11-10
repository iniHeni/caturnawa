<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesertakdbi;
use App\Models\day2kdbi;
use App\Models\day1kdbi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;

class Day2kdbiController extends Controller
{
    public function tampilkdbi2(){
        $tambah = DB::table('day2kdbis')
        ->orderBy('ronde', 'asc')
        ->orderBy('sesi', 'asc')
        ->orderBy('room', 'asc')
        ->orderBy('total', 'desc') 
        ->get();
    
    $groupedByRondeAndSesi = $tambah->groupBy(['ronde', 'sesi', 'room']);
    

    return view('admin/KDBI/day2', compact('groupedByRondeAndSesi'));
    }

    public function tambahkdbi2(Request $request){
        $validatedData = [];

        for ($i = 1; $i <= 4; $i++) {
            $validator = Validator::make($request->all(), [
             
            ]);
    
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
    
            $totalSkorTim = ($request->input('skorindividu1.' . $i) + $request->input('skorindividu2.' . $i)) / 2 ;
    
            $day2kdbi = day2kdbi::create([
                'juri' => $request->input('juri.' . $i),
                'ronde' => $request->input('ronde.' . $i),
                'sesi' => $request->input('sesi.' . $i),
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
    
            $validatedData[] = $day2kdbi;
        }
        return redirect()->route('kdbi.tampilkdbi2');
        
    }

    public function editkdbi2($id) {
        $edit = day2kdbi::find($id);
        $peserta = pesertakdbi::all();
        return view('admin/KDBI/editday2', compact('edit', 'peserta'));
    }

    public function updatekdbi2(Request $request, $id){
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
    $data = day2kdbi::find($id);
    $data->update($update);
        return redirect()->route('kdbi.tampilkdbi2');
}

public function hapuskdbi2($id){
    $hapus = day2kdbi::find($id);
    $hapus->delete();
    return redirect()->route('kdbi.tampilkdbi2');
}

 public function pesertaday2(){
    $peserta =  pesertakdbi::where('status', 'Paid')->orWhere('status', 'KhususUNAS')->get();
    
    return view('admin/KDBI/tambah2', compact('peserta'));
 }
 public function day2round1(){
    $dataa = day2kdbi::where('ronde', '1')->orderBy('sesi')->get();
    return view('matalomba/kdbi/round3', compact('dataa'));
 }
 public function detailday2r1($sesi){
    $dataa = DB::table('day2kdbis')
    ->where('ronde', '1')
    ->where('sesi', $sesi)
    ->orderBy('room', 'asc') 
    ->orderBy('total', 'desc')
    ->get();

$dataa = $dataa->map(function ($item, $key) {
    $item->rank = $key + 1;
    return $item;
});
$dataByRoom = $dataa->groupBy('room');
        
    return view('matalomba/kdbi/detailskor/day2r1', compact('dataByRoom', 'sesi'));
 }
 public function day2round2(){
    $dataa = day2kdbi::where('ronde', '2')->orderBy('sesi')->get();
    return view('matalomba/kdbi/round4', compact('dataa'));
 }
 public function detailday2r2($sesi){
    $dataa = DB::table('day2kdbis')
    ->where('ronde', '2')
    ->where('sesi', $sesi)
    ->orderBy('room', 'asc') 
    ->orderBy('total', 'desc')
    ->get();

$dataa = $dataa->map(function ($item, $key) {
    $item->rank = $key + 1;
    return $item;
});
$dataByRoom = $dataa->groupBy('room');
        
    return view('matalomba/kdbi/detailskor/day2r2', compact('dataByRoom', 'sesi'));
 }
}
