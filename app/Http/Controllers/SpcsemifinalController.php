<?php

namespace App\Http\Controllers;

use App\Models\pesertaspc;
use App\Models\spcsemifinal;
use App\Models\spcpenyisihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class SpcsemifinalController extends Controller
{
    public function tampilsf()
    {
        $tambah = spcsemifinal::select('*', DB::raw('RANK() OVER (ORDER BY total DESC) as rank'))
        ->orderBy('total', 'DESC')
        ->get();

$groupedData = $tambah->groupBy('namapeserta');
foreach ($groupedData as $namapeserta => $pesertaGroup) {
foreach ($pesertaGroup as $index => $peserta) {
$peserta->rank = $tambah->where('namapeserta', $namapeserta)->pluck('rank')[$index];
}
}

return view('admin/LKTI/semifinalLKTI', compact('groupedData'));
    }

    public function tambahsf(Request $request){
        $tambah = $request->validate([
            'namapeserta' => 'required',
            'juri' => 'required',
            'scorepenyajian' => 'required|integer|min:0|max:100',
            'scoresubs' => 'required|integer|min:0|max:100',
            'scorekualitas' => 'required|integer|min:0|max:100',
            'penyajian' => 'required',
            'subs' => 'required',
            'kualitas' => 'required',

        ]);
        $tambah['total'] = $tambah['scorepenyajian'] + $tambah['scoresubs'] + $tambah['scorekualitas'];
        spcsemifinal::create($tambah);
        return redirect()->route('spc.tampilsf');

    }

    public function editsf($id) {
        $edit = spcsemifinal::find($id);
        $peserta = spcpenyisihan::select(
            '*',
            DB::raw('RANK() OVER (ORDER BY scorecp DESC) as rank') // Perhitungan rank
        )->limit(10)
        ->get();
        return view('admin/LKTI/editsf', compact('edit', 'peserta'));
    }

    public function updatesf(Request $request, $id){
    $update = $request->validate([
            'namapeserta' => 'required',
            'juri' => 'required',
            'scorepenyajian' => 'required|integer|min:0|max:100',
            'scoresubs' => 'required|integer|min:0|max:100',
            'scorekualitas' => 'required|integer|min:0|max:100',
            'penyajian' => 'required',
            'subs' => 'required',
            'kualitas' => 'required',
    ]);
    $data = spcsemifinal::find($id);
    $update['total'] = $update['scorepenyajian'] + $update['scoresubs'] + $update['scorekualitas'];
    $data->update($update);
        return redirect()->route('spc.tampilsf');
}

public function hapussf($id){
    $hapus = spcsemifinal::find($id);
    $hapus->delete();
    return redirect()->route('spc.tampilsf');
}
public function semifinal(){
    $semifinal = DB::table('spcsemifinals')
    ->leftJoin('pesertaspcs', 'spcsemifinals.namapeserta', '=', 'pesertaspcs.nama')
    ->select(
        'spcsemifinals.namapeserta',
        DB::raw("COALESCE(pesertaspcs.logo, 'default_logo.jpg') as logo"), 
        DB::raw('SUM(total) as total'),
        DB::raw('RANK() OVER (ORDER BY SUM(total) DESC) as rank')
    )
    ->groupBy('spcsemifinals.namapeserta','pesertaspcs.logo')
    ->orderBy('rank', 'asc')
    ->get();
    
    
    return view('matalomba/lkti/sfinal', compact('semifinal'));
 }
 public function pesertaasf(){
    $peserta = DB::table('spcpenyisihans')
    ->select('namapeserta', DB::raw('RANK() OVER (ORDER BY scorecp DESC) as rank'))
    ->orderBy('scorecp', 'DESC') 
    ->limit(10)
    ->get();

    
    
    return view('admin/LKTI/tambahsf', compact('peserta'));
 }
 public function detail($namapeserta){
    $namapeserta = strip_tags(trim($namapeserta)); 


    $data = DB::table('spcsemifinals')
        ->select('namapeserta',
                DB::raw("string_agg(scorepenyajian::text, ', ') as scorepenyajian"),
                DB::raw("string_agg(scoresubs::text, ', ') as scoresubs"),
                DB::raw("string_agg(scorekualitas::text, ', ') as scorekualitas"),
                DB::raw("string_agg(penyajian::text, ', ') as penyajian"),
                DB::raw("string_agg(subs::text, ', ') as subs"),
                DB::raw("string_agg(kualitas::text, ', ') as kualitas"),
                DB::raw('SUM(scorepenyajian + scoresubs + scorekualitas) as total'),
                DB::raw("string_agg(juri::text, '! ') as juri"),
                )
        ->where('namapeserta', $namapeserta)
        ->groupBy('namapeserta')
        ->get();
  
    return view('matalomba/lkti/detail/detailskor', compact('data'));
}
}
