<?php

namespace App\Http\Controllers;

use App\Models\orderlkti;
use Illuminate\Http\Request;

class OrderlktiController extends Controller
{
    public function checkout(Request $request){
    $file = $request->file('ktm');
        $fileName = $request->file('ktm')->getClientOriginalName();
        $data['ktm'] = $file->storeAs('images/lkti/ktm', $fileName);
    $file = $request->file('foto');    
        $fileName = $request->file('foto')->getClientOriginalName();
        $data['foto'] = $file->storeAs('images/lkti/foto', $fileName);
        $file = $request->file('krs');
    $fileName = $request->file('krs')->getClientOriginalName();
        $data['krs'] = $file->storeAs('images/lkti/krs', $fileName);
        $file = $request->file('buktifollow');
    $fileName = $request->file('buktifollow')->getClientOriginalName();
        $data['buktifollow'] = $file->storeAs('images/lkti/bukti', $fileName);
        $file = $request->file('surat_delegasi');
    $fileName = $request->file('surat_delegasi')->getClientOriginalName();
        $data['surat_delegasi'] = $file->storeAs('document/lkti', $fileName);
        $file = $request->file('sertifikat');
    $fileName = $request->file('sertifikat')->getClientOriginalName();
        $data['sertifikat'] = $file->storeAs('document/lkti/sertif1', $fileName);
        $file = $request->file('sertifikat1');
    $fileName = $request->file('sertifikat1')->getClientOriginalName();
        $data['sertifikat1'] = $file->storeAs('document/lkti/sertif2', $fileName);
        $file = $request->file('sertifikat2');
    $fileName = $request->file('sertifikat2')->getClientOriginalName();
        $data['sertifikat2'] = $file->storeAs('document/lkti/sertif3', $fileName);
        $file = $request->file('sertifikat3');
    $fileName = $request->file('sertifikat3')->getClientOriginalName();
        $data['sertifikat3'] = $file->storeAs('document/lkti/sertif4', $fileName);
        $file = $request->file('sertifikat4');
    $fileName = $request->file('sertifikat4')->getClientOriginalName();
        $data['sertifikat4'] = $file->storeAs('document/lkti/sertif5', $fileName);
        $file = $request->file('sertifikat5');
    $fileName = $request->file('sertifikat5')->getClientOriginalName();
        $data['sertifikat5'] = $file->storeAs('document/lkti/sertif6', $fileName);
        $file = $request->file('sertifikat6');
    $fileName = $request->file('sertifikat6')->getClientOriginalName();
        $data['sertifikat6'] = $file->storeAs('document/lkti/sertif7', $fileName);
        $file = $request->file('sertifikat7');
    $fileName = $request->file('sertifikat7')->getClientOriginalName();
        $data['sertifikat7'] = $file->storeAs('document/lkti/sertif8', $fileName);
        $file = $request->file('sertifikat8');
    $fileName = $request->file('sertifikat8')->getClientOriginalName();
        $data['sertifikat8'] = $file->storeAs('document/lkti/sertif9', $fileName);
        $file = $request->file('sertifikat9');
    $fileName = $request->file('sertifikat9')->getClientOriginalName();
        $data['sertifikat9'] = $file->storeAs('document/lkti/sertif10', $fileName);

    $request->request->add(['price' => 250000, 'status' => 'Unpaid']);
    $order = orderlkti::create($request->all());

   // Set your Merchant Server Key
\Midtrans\Config::$serverKey = config('midtrans.server_key');
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;

$params = array(
'transaction_details' => array(
    'order_id' => $order->id,
    'gross_amount' => $order->price,
),
'customer_details' => array(
    'first_name' => $request->nama,
    'email' => $request->email,
    'phone' => $request->nomorhp,
),
);

$snapToken = \Midtrans\Snap::getSnapToken($params);
return view('matalomba/lkti/checkout', compact('snapToken', 'order'));
}
public function callback(Request $request){
    $serverKey = config('midtrans.server_key');
    $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
    if($hashed == $request->signature_key){
        if($request->status == 'capture' or $request-> status == 'settlement'){
            $order = orderlkti::find ($request->order_id);
            $order->update(['status' => 'Paid']);
        }
    }
}
public function home($id){
    $order = orderlkti::find($id);
    return view('/');
}
}

