<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesertakdbi;
use App\Models\day1kdbi;
use App\Models\day2kdbi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;


class Day1kdbiController extends Controller
{
    public function tampilkdbi(){
        $tambah = DB::table('day1kdbis')
        ->orderBy('ronde', 'asc')
        ->orderBy('sesi', 'asc')
        ->orderBy('room', 'asc')
        ->orderBy('total', 'desc') 
        ->get();
    
    $groupedByRondeAndSesi = $tambah->groupBy(['ronde', 'sesi', 'room']);
    
    return view('admin/KDBI/day1', compact('groupedByRondeAndSesi'));
    }

    public function tambahkdbi(Request $request){
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
    
            $day1kdbi = day1kdbi::create([
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
    
            $validatedData[] = $day1kdbi;
        }
        return redirect()->route('kdbi.tampilkdbi');
        
    }

    public function editkdbi($id) {
        $edit = day1kdbi::find($id);
        $peserta = pesertakdbi::all();
        return view('admin/KDBI/editday1', compact('edit', 'peserta'));
    }

    public function updatekdbi(Request $request, $id){
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
    $update['total'] = ($update['skorindividu1'] + $update['skorindividu2']) / 2;
    $data = day1kdbi::find($id);
    $data->update($update);
        return redirect()->route('kdbi.tampilkdbi');
}

public function hapuskdbi($id){
    $hapus = day1kdbi::find($id);
    $hapus->delete();
    return redirect()->route('kdbi.tampilkdbi');
}
 public function pesertaday1(){
    $peserta = pesertakdbi::where('status', 'Paid')->orWhere('status', 'KhususUNAS')->get();
    
    return view('admin/KDBI/tambah', compact('peserta'));
 }

 public function detailday1r1($sesi){
    $dataa = DB::table('day1kdbis')
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
        
    return view('matalomba/kdbi/detailskor/day1r1', compact('dataByRoom', 'sesi'));
 }

 public function detailday1r2($sesi){
    $dataa = DB::table('day1kdbis')
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
        
    return view('matalomba/kdbi/detailskor/day1r2', compact('dataByRoom', 'sesi'));
 }
   public function detailday1r1s2($sesi = 2){
    $dataa = DB::table('day1kdbis')
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
        
    return view('matalomba/kdbi/detailskor/day1r1s2', compact('dataByRoom'));
 }
  
 public function gabungankdbi(){
    $now = Carbon::now();

    // Waktu target untuk ronde 2 day1edc
    $waktuTargetDay1Ronde2 = Carbon::createFromFormat('Y-m-d H:i:s', '2023-09-19 20:00:00', 'Asia/Jakarta'); 
    $waktuTargetDay1Sesi2 = Carbon::createFromFormat('Y-m-d H:i:s', '2023-09-18 20:00:00', 'Asia/Jakarta'); 
    // Waktu target untuk ronde 1 day2edc
    $waktuTargetDay2Ronde1 = Carbon::createFromFormat('Y-m-d H:i:s', '2023-09-19 20:00:00', 'Asia/Jakarta'); 

    // Waktu target untuk ronde 2 day2edc
    $waktuTargetDay2Ronde2s2 = Carbon::createFromFormat('Y-m-d H:i:s', '2023-09-19 20:00:00', 'Asia/Jakarta'); 

    // Query untuk day1edc ronde 1
    $totalVpDay1Ronde1 = day1kdbi::select(
        'team',
        'nama1',
        'nama2',
        DB::raw('SUM(vp) as totalvp'),
        DB::raw('SUM(total) as tt')
    )
    ->where('ronde', '1') 
    ->groupBy('team', 'nama1', 'nama2')
    ->get();

    // Query untuk day1edc ronde 2 (hanya jika waktunya sudah tiba)
    $totalVpDay1Ronde2 = collect();
    if ($now->gte($waktuTargetDay1Ronde2)) {
        $totalVpDay1Ronde2 = day1kdbi::select(
            'team',
            'nama1',
            'nama2',
            DB::raw('SUM(vp) as totalvp'),
            DB::raw('SUM(total) as tt')
        )
        ->where('ronde', '2') 
        ->groupBy('team', 'nama1', 'nama2')
        ->get();
    }

    // Query untuk day2edc ronde 1 (hanya jika waktunya sudah tiba)
    $totalVpDay2Ronde1 = collect();
    if ($now->gte($waktuTargetDay2Ronde1)) {
        $totalVpDay2Ronde1 = day2kdbi::select(
            'team',
            'nama1',
            'nama2',
            DB::raw('SUM(vp) as totalvp'),
            DB::raw('SUM(total) as tt')
        )
        ->where('ronde', '1') 
        ->groupBy('team', 'nama1', 'nama2')
        ->get();
    }

    $totalVpDay2Ronde2 = day2kdbi::select(
        'team',
        'nama1',
        'nama2',
        DB::raw('SUM(vp) as totalvp'),
        DB::raw('SUM(total) as tt')
    )
    ->where('ronde', '2') 
    ->where('sesi', '1') 
    ->groupBy('team', 'nama1', 'nama2')
    ->get();

    $totalVpDay2Ronde2s2 = collect();
    if ($now->gte($waktuTargetDay2Ronde2s2)) {
        $totalVpDay2Ronde2s2 = day2kdbi::select(
            'team',
            'nama1',
            'nama2',
            DB::raw('SUM(vp) as totalvp'),
            DB::raw('SUM(total) as tt')
        )
        ->where('ronde', '2')
        ->where('sesi', '2')
        ->groupBy('team', 'nama1', 'nama2')
        ->get();
    }

    // Gabungkan semua hasil
$groupedByTeam = $totalVpDay1Ronde1
->concat($totalVpDay1Ronde2)
->concat($totalVpDay2Ronde1)
->concat($totalVpDay2Ronde2) 
->concat($totalVpDay2Ronde2s2) 
->groupBy('team')
->map(function ($group) {
    return [
        'team' => $group[0]['team'],
        'nama1' => $group[0]['nama1'],
        'nama2' => $group[0]['nama2'],
        'totalvp' => $group->sum('totalvp'),
        'bp' => $group->sum('tt') / 4
    ];
})
->sortByDesc('bp')
  ->sortByDesc('totalvp')
    ->values()
    ->map(function ($item, $index) {
        $item['rank'] = $index + 1;
        return $item;
    });

    // Ambil data pertandingan berdasarkan ronde dan waktu (jika sudah tiba)
$dataa = day1kdbi::where('ronde', '1')->where('sesi', '1')->orderBy('sesi')->get();
    $dataa6 = $now->gte($waktuTargetDay1Sesi2) ? day1kdbi::where('ronde', '1')->where('sesi', '2')->orderBy('sesi')->get() : collect();
    $dataa2 = $now->gte($waktuTargetDay1Ronde2) ? day1kdbi::where('ronde', '2')->orderBy('sesi')->get() : collect();
    $dataa3 = $now->gte($waktuTargetDay2Ronde1) ? day2kdbi::where('ronde', '1')->orderBy('sesi')->get() : collect();
    $dataa4 = day2kdbi::where('ronde', '2')->where('sesi', '1')->orderBy('sesi')->get();
    $dataa5 = $now->gte($waktuTargetDay2Ronde2s2) ? day2kdbi::where('ronde', '2')->where('sesi', '2')->orderBy('sesi')->get() : collect();

    return view('matalomba/kdbi/penyisihan', compact('groupedByTeam', 'dataa', 'dataa2', 'dataa3', 'dataa4', 'dataa5', 'dataa6'));
 }

    }
