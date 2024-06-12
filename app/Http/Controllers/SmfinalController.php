<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\smsemifinal;
use App\Models\smfinal;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class SmfinalController extends Controller
{
    public function tampilf(){  
        $tambah = smfinal::select(
            '*',
        DB::raw('RANK() OVER (ORDER BY total DESC) as rank')
        )->get();
        return view('admin/SM/finalSM', compact('tambah'));      
     }

    public function tambahf(Request $request){
        $tambah = $request->validate([
            'namateam' => 'required|string|max:50',
           'peserta1' => 'required|string|max:50',
            'peserta2' => 'required|string|max:50',
            'peserta3' => 'required|string|max:50',
            'peserta4' => 'required|string|max:50',
            'peserta5' => 'required|string|max:50',
            'juri' => 'required',
            'skorkrit1' => 'required|integer|min:0|max:100',
            'skorkrit2' => 'required|integer|min:0|max:100',
            'skorkrit3' => 'required|integer|min:0|max:100',
            'skorkrit4' => 'required|integer|min:0|max:100',
            'krit1' => 'required|string|max:100',
            'krit2' => 'required|string|max:100',
            'krit3' => 'required|string|max:100',
            'krit4' => 'required|string|max:100',
        ]);
        $tambah['total'] = $tambah['skorkrit1'] + $tambah['skorkrit2'] + $tambah['skorkrit3'] + $tambah['skorkrit4'];
        smfinal::create($tambah);
        return redirect()->route('sm.tampilf');

    }

    public function editf($id) {
        $edit = smfinal::find($id);
        return view('admin/SM/editsmf', compact('edit'));
    }

    public function updatef(Request $request, $id){
    $update = $request->validate([
        'namateam' => 'required|string|max:50',
            'peserta1' => 'required|string|max:50',
            'peserta2' => 'required|string|max:50',
            'peserta3' => 'required|string|max:50',
            'peserta4' => 'required|string|max:50',
            'peserta5' => 'required|string|max:50',
            'juri' => 'required',
            'skorkrit1' => 'required|integer|min:0|max:100',
            'skorkrit2' => 'required|integer|min:0|max:100',
            'skorkrit3' => 'required|integer|min:0|max:100',
            'skorkrit4' => 'required|integer|min:0|max:100',
            'krit1' => 'required|string|max:100',
            'krit2' => 'required|string|max:100',
            'krit3' => 'required|string|max:100',
            'krit4' => 'required|string|max:100',
    ]);
    $data = smfinal::find($id);
    $update['total'] = $update['skorkrit1'] + $update['skorkrit2'] + $update['skorkrit3'] + $update['skorkrit4'];
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
    $final = DB::table('smsemifinals')
    ->select('smsemifinals.namateam', DB::raw('SUM(smsemifinals.total + smfinals.total) as total'))
    ->join('smfinals', 'smsemifinals.namateam', '=', 'smfinals.namateam')
    ->groupBy('smsemifinals.namateam')
    ->orderByDesc('total')
    ->get();

return view('matalomba/sm/final', compact('final'));

}
public function detailf($id){
    $dataa = smfinal::find($id);
    return view('matalomba/sm/detail/detailskor2', compact('dataa'));
 }

}
