<?php

namespace App\Http\Controllers;
use App\Models\pesertaedc;
use App\Models\Order;
use Illuminate\Http\Request;

class PesertaedcController extends Controller
{
    public function tampiledcpe(){
        $paidOrders = Order::where('status', 'Paid')
        ->select('nama_1', 'nama_2', 'instansi', 'email_1', 'email_2', 'foto_1', 'foto_2', 'nomorhp_1', 'nomorhp_2')
        ->get();

    foreach ($paidOrders as $order) {
        pesertaedc::firstOrCreate(
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
        $tambah = pesertaedc::select()->get();
        
        return view('admin/EDC/pesertaedc', compact('tambah'));
}
    public function editedcpe($id) {
        $edit = pesertaedc::find($id);
        return view('admin/EDC/editpe', compact('edit'));
    }

    public function updateedcpe(Request $request, $id){
    $update = $request->validate([
        'instansi' => 'required|string|max:50',
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
    $data = pesertaedc::find($id);
    $data->update($update);
        return redirect()->route('edc.tampiledcpe');
}

public function hapusedcpe($id){
    $hapus = pesertaedc::find($id);
    $hapus->delete();
    return redirect()->route('edc.tampiledcpe');
}
public function pesertaedc(){
    $peserta = pesertaedc::all();
    
    return view('matalomba/edc/edc', compact('peserta'));
 }
 public function detailpesertaedc($id){
    $dataa = pesertaedc::find($id);
    return view('matalomba/edc/detailpeserta', compact('dataa'));
 }
}
