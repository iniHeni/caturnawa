<?php

namespace App\Http\Controllers;

use App\Models\pesertaspc;
use App\Models\spcfinal;
use App\Models\spcsemifinal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class SpcfinalController extends Controller
{
    public function tampilf(){
        $tambah = spcfinal::select('*', DB::raw('RANK() OVER (ORDER BY total DESC) as rank'))
        ->orderBy('total', 'DESC')
        ->get();

$groupedData = $tambah->groupBy('namapeserta');
foreach ($groupedData as $namapeserta => $pesertaGroup) {
foreach ($pesertaGroup as $index => $peserta) {
$peserta->rank = $tambah->where('namapeserta', $namapeserta)->pluck('rank')[$index];
}
}
        return view('admin/LKTI/finalLKTI', compact('groupedData'));
     }

    public function tambahf(Request $request){
        $tambah = $request->validate([
            'namapeserta' => 'required',
            'juri' => 'required',
            'scorepemaparanmateri' => 'required|integer|min:0|max:100',
            'scorepertanyaandanjawaban' => 'required|integer|min:0|max:100',
            'scoreaspekkesesuaian' => 'required|integer|min:0|max:100',
          'scoreketerampilan' => 'required|integer|min:0|max:100',
            'materi' => 'required',
            'pertanyaandanjawaban' => 'required',
            'kesesuaian' => 'required',
          'keterampilan' => 'required',
        ]);
        $tambah['total'] = $tambah['scorepemaparanmateri'] + $tambah['scorepertanyaandanjawaban'] + $tambah['scoreaspekkesesuaian'] + $tambah['scoreketerampilan'];
        spcfinal::create($tambah);
        return redirect()->route('spc.tampilf');

    }

    public function editf($id) {
        $edit = spcfinal::find($id);
        $peserta = DB::table('spcsemifinals')
    ->select('namapeserta',
            DB::raw("string_agg(scorepenyajian::text, ', ') as scorepenyajian"),
            DB::raw("string_agg(scoresubs::text, ', ') as scoresubs"),
            DB::raw("string_agg(scorekualitas::text, ', ') as scorekualitas"),
            DB::raw("string_agg(penyajian::text, ', ') as penyajian"),
            DB::raw("string_agg(subs::text, ', ') as subs"),
            DB::raw("string_agg(kualitas::text, ', ') as kualitas"),
            DB::raw('SUM(scorepenyajian + scoresubs + scorekualitas) as total'),
            DB::raw("string_agg(juri::text, ', ') as juri"),
            )
    ->where('namapeserta')
    ->groupBy('namapeserta')
    ->limit(6)
    ->get();
        return view('admin/LKTI/editf', compact('edit', 'peserta'));
    }

    public function updatef(Request $request, $id){
    $update = $request->validate([
            'namapeserta' => 'required',
            'juri' => 'required',
            'scorepemaparanmateri' => 'required|integer|min:0|max:100',
            'scorepertanyaandanjawaban' => 'required|integer|min:0|max:100',
            'scoreaspekkesesuaian' => 'required|integer|min:0|max:100',
      		'scoreketerampilan' => 'required|integer|min:0|max:100',
            'materi' => 'required',
            'pertanyaandanjawaban' => 'required',
            'kesesuaian' => 'required',
      		'keterampilan' => 'required',
    ]);
    $data = spcfinal::find($id);
    $update['total'] = $update['scorepemaparanmateri'] + $update['scorepertanyaandanjawaban'] + $update['scoreaspekkesesuaian'] + $update['scoreketerampilan'];
    $data->update($update);
        return redirect()->route('spc.tampilf');
}

public function hapusf($id){
    $hapus = spcfinal::find($id);
    $hapus->delete();
    return redirect()->route('spc.tampilf');
}
public function final(){
    $final = DB::table('spcfinals')
    ->leftJoin('pesertaspcs', 'spcfinals.namapeserta', '=', 'pesertaspcs.nama')
    ->select(
        'spcfinals.namapeserta',
        DB::raw("COALESCE(pesertaspcs.logo, 'default_logo.jpg') as logo"), 
        DB::raw('SUM(total) as total'),
        DB::raw('RANK() OVER (ORDER BY SUM(total) DESC) as rank')
    )
    ->groupBy('spcfinals.namapeserta','pesertaspcs.logo')
    ->orderBy('rank', 'asc')
    ->get();
    
    return view('matalomba/lkti/final', compact('final'));
 }
 public function pesertaaf(){
    $peserta = DB::table('spcsemifinals')
    ->select(
        'namapeserta',
        DB::raw('SUM(total) as total'), 
        DB::raw('RANK() OVER (ORDER BY SUM(total) DESC) as rank') 
    )
    ->groupBy('namapeserta')
    ->orderBy('total', 'DESC')
    ->limit(6)
    ->get();

    
    return view('admin/LKTI/tambahf', compact('peserta'));
 }
 public function detail($namapeserta){
    $namapeserta = strip_tags(trim($namapeserta)); // Contoh pembersihan dasar

    // 2. Ambil data peserta dari database
    $data = DB::table('spcfinals')
        ->select('namapeserta',
                DB::raw("string_agg(scorepemaparanmateri::text, '! ') as scorepemaparanmateri"),
                DB::raw("string_agg(scorepertanyaandanjawaban::text, '! ') as scorepertanyaandanjawaban"),
                DB::raw("string_agg(scoreaspekkesesuaian::text, '! ') as scoreaspekkesesuaian"),
                DB::raw("string_agg(scoreketerampilan::text, '! ') as scoreketerampilan"),
                DB::raw("string_agg(materi::text, '! ') as materi"),
                DB::raw("string_agg(pertanyaandanjawaban::text, '! ') as pertanyaandanjawaban"),
                DB::raw("string_agg(kesesuaian::text, '! ') as kesesuaian"),
                 DB::raw("string_agg(keterampilan::text, '! ') as keterampilan"),
                DB::raw('SUM(scorepemaparanmateri + scorepertanyaandanjawaban + scoreaspekkesesuaian + scoreketerampilan) as total'),
                DB::raw("string_agg(juri::text, '! ') as juri"),
                )
        ->where('namapeserta', $namapeserta)
        ->groupBy('namapeserta')
        ->get();
  
    return view('matalomba/lkti/detail/detailskor1', compact('data'));
}
}