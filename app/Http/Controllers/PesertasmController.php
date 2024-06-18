<?php

namespace App\Http\Controllers;

use App\Models\pesertasm;
use App\Models\ordersm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class PesertasmController extends Controller
{
    public function tampilpee(){
        $paidOrders = ordersm::where('status', 'Paid')
        ->select('nama_1', 'nama_2', 'nama_3', 'nama_4', 'nama_5' , 'instansi', 'namateam', 'email_1', 'email_2', 'email_3', 'email_4', 'email_5', 'foto_1', 'foto_2', 'foto_3', 'foto_4', 'foto_5', 'nomorhp_1', 'nomorhp_2', 'nomorhp_3', 'nomorhp_4', 'nomorhp_5',)
        ->get();

    foreach ($paidOrders as $order) {
        pesertasm::firstOrCreate(
            ['namateam' => $order->namateam],
            [
            'nama' => $order->nama_1,
            'nama1' => $order->nama_2,
            'nama2' => $order->nama_3,
            'nama3' => $order->nama_4,
            'nama4' => $order->nama_5,
            'instansi' => $order->instansi,
            'email' => $order->email_1,
            'email1' => $order->email_2,
            'email2' => $order->email_3,
            'email3' => $order->email_4,
            'email4' => $order->email_5,
            'foto' => $order->foto_1,
            'foto1' => $order->foto_2,
            'foto2' => $order->foto_3,
            'foto3' => $order->foto_4,
            'foto4' => $order->foto_5,
            'nohp' => $order->nomorhp_1,
            'nohp1' => $order->nomorhp_2,
            'nohp2' => $order->nomorhp_3,
            'nohp3' => $order->nomorhp_4,
            'nohp4' => $order->nomorhp_5,
            'logo' => 'nullable',
        ]);
    }
        $tambah = pesertasm::select()->get();
        
        return view('admin/sm/pesertasm', compact('tambah'));
     }

    public function editpee($id) {
        $edit = pesertasm::find($id);
        return view('admin/sm/editpeserta', compact('edit'));
    }

    public function updatepee(Request $request, $id){
    $update = $request->validate([
        'instansi' => 'required|string|max:50',
        'namateam' => 'required|string|max:50',
            'nama' => 'required|string|max:50',
            'nama1' => 'required|string|max:50',
            'nama2' => 'required|string|max:50',
            'nama3' => 'required|string|max:50',
            'nama4' => 'required|string|max:50',
            'email' => 'required|email',
            'email1' => 'required|email',
            'email2' => 'required|email',
            'email3' => 'required|email',
            'email4' => 'required|email',
            'nohp' => 'required',
            'nohp1' => 'required',
            'nohp2' => 'required',
            'nohp3' => 'required',
            'nohp4' => 'required',
            'logo' => 'required|mimes:png,jpeg,jpg|max:5000',
    ]);
    $update = $request->all();
    if($request->hasFile('logo'))
    {
        $destination_path = 'public/images/sm/peserta/logo';
        $image = $request->file('logo');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $path = $request->file('logo')->storeAS($destination_path,$image_name);
        $imageUrl = asset('storage/images/sm/peserta/logo/' . $image_name);

        $update['logo'] = $imageUrl;

    }
    $data = pesertasm::find($id);
    $data->update($update);
        return redirect()->route('sm.tampilpee');
}

public function hapuspee($id){
    $hapus = pesertasm::find($id);
    $hapus->delete();
    return redirect()->route('sm.tampilpee');
}
public function peserta(){
    $peserta = pesertasm::all();
    
    return view('matalomba/sm/sm', compact('peserta'));
 }
 public function detailpeserta($id){
    $dataa = pesertasm::find($id);
    return view('matalomba/sm/detailpeserta', compact('dataa'));
 }
}
