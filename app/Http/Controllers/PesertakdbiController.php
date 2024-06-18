<?php

namespace App\Http\Controllers;
use App\Models\pesertakdbi;
use App\Models\orderkdbi;
use Illuminate\Http\Request;

class PesertakdbiController extends Controller
{
    public function tampilkdbipe(){
        $paidOrders = orderkdbi::where('status', 'Paid')
        ->select('nama_1', 'nama_2', 'instansi', 'email_1', 'email_2', 'foto_1', 'foto_2', 'nomorhp_1', 'nomorhp_2')
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
                'logo' => 'null'
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
        'instansi' => 'required|string|max:50',
            'logo' => 'required|mimes:png,jpeg,jpg|max:5000',
    ]);
    $update = $request->all();
    if($request->hasFile('logo'))
    {
        $destination_path = 'public/images/kdbi/peserta/logo';
        $image = $request->file('logo');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $path = $request->file('logo')->storeAS($destination_path,$image_name);
        $imageUrl = asset('storage/images/kdbi/peserta/logo/' . $image_name);

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

