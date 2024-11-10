<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\smsemifinal;
use App\Models\pesertasm;
use App\Models\smfinal;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class SmfinalController extends Controller
{
    public function tampilf(){  

        $final = DB::table('smfinals')
        ->select(
            'smfinals.namateam',
            'pesertasms.logo',
            DB::raw("
                ROUND(
                    (SUM(smfinals.total) / 3 * 30/100) + 
                    COALESCE((
                        SELECT ROUND(SUM(smsemifinals.total) / 3 * 70/100) 
                        FROM smsemifinals 
                        WHERE smsemifinals.namateam = smfinals.namateam
                    ), 0)
                ) as total
            "),
            DB::raw('RANK() OVER (ORDER BY 
                (SUM(smfinals.total) / 3 * 30/100) + 
                COALESCE((
                    SELECT ROUND(SUM(smsemifinals.total) / 3 * 70/100) 
                    FROM smsemifinals 
                    WHERE smsemifinals.namateam = smfinals.namateam
                ), 0) DESC) as rank')
        )
        ->leftJoin('pesertasms', 'smfinals.namateam', '=', 'pesertasms.namateam')
        ->groupBy('smfinals.namateam', 'pesertasms.logo')
        ->orderByDesc('total')
        ->get();
    
    
        return view('admin/SM/finalSM', compact('final'));      
     }

    public function tambahf(Request $request){
        $tambah = $request->validate([
            'namateam' => 'required',
            'peserta1' => 'required',
            'peserta2' => 'required',
            'peserta3' => 'required',
            'peserta4' => 'required',
            'peserta5' => 'required',
            'juri' => 'required',
            'skorkrit1' => 'required|integer|min:0|max:100',
            'skorkrit2' => 'required|integer|min:0|max:100',
            'krit1' => 'required',
            'krit2' => 'required',

        ]);
        $tambah['total'] = $tambah['skorkrit1'] + $tambah['skorkrit2'] ;
        smfinal::create($tambah);
        return redirect()->route('sm.tampilf');

    }

    public function editf($id) {
        $edit = smfinal::find($id);
        $peserta = DB::table('smsemifinals')
        ->select(
            'namateam',
            DB::raw('SUM(total) as total'), 
            DB::raw('RANK() OVER (ORDER BY SUM(total) DESC) as rank'),
            'peserta1',
            'peserta2',
            'peserta3',
            'peserta4',
            'peserta5'
        )
        ->groupBy('namateam', 'peserta1', 'peserta2', 'peserta3', 'peserta4', 'peserta5') // Group by semua kolom yang dipilih
        ->orderByDesc('total')
        ->limit(7)
        ->get();

        return view('admin/SM/editsmf', compact('edit', 'peserta'));
    }

    public function updatef(Request $request, $id){
    $update = $request->validate([
        'namateam' => 'required',
        'peserta1' => 'required',
        'peserta2' => 'required',
        'peserta3' => 'required',
        'peserta4' => 'required',
        'peserta5' => 'required',
            'juri' => 'required',
            'skorkrit1' => 'required|integer|min:0|max:100',
            'skorkrit2' => 'required|integer|min:0|max:100',
          'krit1' => 'required',
          'krit2' => 'required',
    ]);
    $data = smfinal::find($id);
    $update['total'] = $update['skorkrit1'] + $update['skorkrit2'] ;
    $data->update($update);
        return redirect()->route('sm.tampilf');
}

public function hapusf($id){
    $hapus = smfinal::find($id);
    $hapus->delete();
    return redirect()->route('sm.tampilf');
}

public function final()
{
    $final = DB::table('smfinals')
        ->select(
            'smfinals.namateam',
            'pesertasms.logo',
            DB::raw("
                ROUND(
                    (SUM(smfinals.total) / 3 * 30/100) + 
                    COALESCE((
                        SELECT ROUND(SUM(smsemifinals.total) / 3 * 70/100) 
                        FROM smsemifinals 
                        WHERE smsemifinals.namateam = smfinals.namateam
                    ), 0)
                ) as total
            "),
            DB::raw('RANK() OVER (ORDER BY 
                (SUM(smfinals.total) / 3 * 30/100) + 
                COALESCE((
                    SELECT ROUND(SUM(smsemifinals.total) / 3 * 70/100) 
                    FROM smsemifinals 
                    WHERE smsemifinals.namateam = smfinals.namateam
                ), 0) DESC) as rank')
        )
        ->leftJoin('pesertasms', 'smfinals.namateam', '=', 'pesertasms.namateam')
        ->groupBy('smfinals.namateam', 'pesertasms.logo')
        ->orderByDesc('total')
        ->get();


return view('matalomba/sm/final', compact('final'));

}
public function detailf($namateam){
    $namateam = strip_tags(trim($namateam));
    $tambah = smfinal::where('namateam', $namateam)
    ->select(
        '*',
        DB::raw('RANK() OVER (PARTITION BY namateam ORDER BY id) as rank')
    )
    ->get();
    $final = DB::table('smfinals')
    ->select(
        'namateam',
        DB::raw("ROUND(SUM(smfinals.total) / 3 * 30/100) as total"),
        DB::raw('RANK() OVER (ORDER BY SUM(smfinals.total) DESC) as rank')
    )
    ->groupBy('namateam') 
    ->where('namateam', $namateam)
    ->get();
    return view('matalomba/sm/detail/detailskor2', compact('tambah', 'final'));
}

public function detailfadmin($namateam){
    $namateam = strip_tags(trim($namateam));
    $tambah = smfinal::where('namateam', $namateam)
    ->select(
        '*',
        DB::raw('RANK() OVER (PARTITION BY namateam ORDER BY id) as rank')
    )
    ->get();
    $final = DB::table('smfinals')
    ->select(
        'namateam',
        DB::raw("ROUND(SUM(smfinals.total) / 3 * 30/100) as total"),
        DB::raw('RANK() OVER (ORDER BY SUM(smfinals.total) DESC) as rank')
    )
    ->groupBy('namateam') 
    ->where('namateam', $namateam)
    ->get();
    return view('admin/SM/finaldetailSM', compact('tambah', 'final'));
}

 public function pesertaf(){
    $peserta = DB::table('smsemifinals')
    ->select(
        'namateam',
        DB::raw('SUM(total) as total'), 
        DB::raw('RANK() OVER (ORDER BY SUM(total) DESC) as rank'),
        'peserta1',
        'peserta2',
        'peserta3',
        'peserta4',
        'peserta5'
    )
    ->groupBy('namateam', 'peserta1', 'peserta2', 'peserta3', 'peserta4', 'peserta5') // Group by semua kolom yang dipilih
    ->orderByDesc('total')
    ->limit(4)
    ->get();

    
    return view('admin/SM/tambahf', compact('peserta'));
 }
}
