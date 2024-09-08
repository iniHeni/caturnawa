<?php

namespace App\Http\Controllers;
use App\Models\pesertakdbi;
use App\Models\orderkdbi;
use Illuminate\Http\Request;

class PesertakdbiController extends Controller
{
    public function tampilkdbipe(){
        $paidOrders = orderkdbi::where('status', 'Paid')->OrWhere('status', 'Khusus')
        ->select('nama_1', 'nama_2', 'instansi', 'email_1', 'email_2', 'foto_1', 'foto_2', 'nomorhp_1', 'nomorhp_2', 'namateam')
        ->get();

    foreach ($paidOrders as $order) {
        pesertakdbi::firstOrCreate(
            ['nama' => $order->nama_1],
            [
                'nama1' => $order->nama_2,
                'instansi' => $order->instansi,
                'email' => $order->email_1,
                'email1' => $order->email_2,
                'foto' => $order->foto_1,
                'foto1' => $order->foto_2,
                'nohp' => $order->nomorhp_1,
                'nohp1' => $order->nomorhp_2,
                'namateam' => $order->namateam,
                'logo' => 'null',
                'status' => $order->status,
            ]
        );
    }
        $tambah = pesertakdbi::select()->get();
        
        return view('admin/KDBI/pesertakdbi', compact('tambah'));
}
    public function editkdbipe($id) {
        $edit = pesertakdbi::find($id);
        return view('admin/KDBI/editpe', compact('edit'));
    }

    public function updatekdbipe(Request $request, $id){
    $update = $request->validate([
        'instansi' => 'required',
        'nama' => 'required',
        'nama1' => 'required',
        'email' => 'required',
        'email1' => 'required',
        'nohp' => 'required',
        'nohp1' => 'required',
        'namateam' => 'required',
        'logo' => 'required|mimes:png,jpeg,jpg|max:5000',
    ]);
    $update = $request->all();
    if ($request->hasFile('logo')) {
        $originalFileName = pathinfo($request->file('logo')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('logo')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/kdbi/logo';
        $request->file('logo')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/kdbi/logo/' . $imageName);
        $update['logo'] = $imageUrl;
    }
    $data = pesertakdbi::find($id);
    $data->update($update);
        return redirect()->route('kdbi.tampilkdbipe');
}

public function hapuskdbipe($id){
    $hapus = pesertakdbi::find($id);
    $hapus->delete();
    return redirect()->route('kdbi.tampilkdbipe');
}
public function pesertakdbi(){
    $peserta = pesertakdbi::all();
    
    return view('matalomba/kdbi/kdbi', compact('peserta'));
 }
 public function detailpesertakdbi($id){
    $dataa = pesertakdbi::find($id);
    return view('matalomba/kdbi/detailpeserta', compact('dataa'));
 }
}

