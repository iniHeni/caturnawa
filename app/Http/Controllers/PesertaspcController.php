<?php

namespace App\Http\Controllers;

use App\Models\pesertaspc;
use App\Models\orderlkti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class PesertaspcController extends Controller
{
    public function tampilpe(){
        $paidOrders = orderlkti::where('status', 'Paid')
        ->select('nama', 'instansi', 'email', 'foto', 'nomorhp')
        ->get();

    foreach ($paidOrders as $order) {
        pesertaspc::firstOrCreate(
            ['nama' => $order->nama], // Kondisi unik berdasarkan 'nama'
            [
                'instansi' => $order->instansi,
                'email' => $order->email,
                'foto' => $order->foto,
                'nohp' => $order->nomorhp,
                'logo' => 'null'
            ]
        );
    }
        $tambah = pesertaspc::select()->get();
        
        return view('admin/LKTI/pesertaspc', compact('tambah'));
}
    public function editpe($id) {
        $edit = pesertaspc::find($id);
        return view('admin/LKTI/editpe', compact('edit'));
    }

    public function updatepe(Request $request, $id){
    $update = $request->validate([
        'instansi' => 'required|string|max:50',
            'nama' => 'required|string|max:50',
            'email' => 'required|email',
            'nohp' => 'required',
            'logo' => 'required|mimes:png,jpeg,jpg|max:5000',
    ]);
    $update = $request->all();
    if($request->hasFile('logo'))
    {
        $destination_path = 'public/images/lkti/peserta/logo';
        $image = $request->file('logo');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $path = $request->file('logo')->storeAS($destination_path,$image_name);
        $imageUrl = asset('storage/images/lkti/peserta/logo/' . $image_name);

        $update['logo'] = $imageUrl;

    }
    $data = pesertaspc::find($id);
    $data->update($update);
        return redirect()->route('spc.tampilpe');
}

public function hapuspe($id){
    $hapus = pesertaspc::find($id);
    $hapus->delete();
    return redirect()->route('spc.tampilpe');
}
public function pesertaspc(){
    $peserta = pesertaspc::all();
    
    return view('matalomba/lkti/lkti', compact('peserta'));
 }
 public function detailpesertaspc($id){
    $dataa = pesertaspc::find($id);
    return view('matalomba/lkti/detailpeserta', compact('dataa'));
 }

}
