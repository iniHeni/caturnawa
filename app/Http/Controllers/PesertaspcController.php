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
        $paidOrders = orderlkti::select('nama', 'instansi', 'email', 'foto', 'nomorhp', 'status')
        ->get();

    foreach ($paidOrders as $order) {
        pesertaspc::firstOrCreate(
            ['nama' => $order->nama], // Kondisi unik berdasarkan 'nama'
            [
                'instansi' => $order->instansi,
                'email' => $order->email,
                'foto' => $order->foto,
                'nohp' => $order->nomorhp,
                'status' => $order->status,
                'logo' => 'nullable',
                'status' => $order->status,
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
        'instansi' => 'required|string',
            'nama' => 'required|string',
            'email' => 'required|email',
            'nohp' => 'required',
            'logo' => 'required|mimes:png,jpeg,jpg|max:3000',
            'status' => 'required',
    ]);
    $update = $request->all();
    if ($request->hasFile('logo')) {
        $originalFileName = pathinfo($request->file('logo')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('logo')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/spc/logo';
        $request->file('logo')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/spc/logo/' . $imageName);
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
    $peserta = pesertaspc::where('status', 'Paid')->orWhere('status', 'KhususUNAS')->get();
    
    return view('matalomba/lkti/lkti', compact('peserta'));
 }
 public function detailpesertaspc($id){
    $dataa = pesertaspc::find($id);
    return view('matalomba/lkti/detailpeserta', compact('dataa'));
 }

}
