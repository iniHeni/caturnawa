<?php

namespace App\Http\Controllers;

use App\Models\ordersm;
use Illuminate\Http\Request;

class OrdersmController extends Controller
{
    public function checkout(Request $request){
    $file = $request->file('ktm_1');
        $fileName = $request->file('ktm_1')->getClientOriginalName();
        $data['ktm_1'] = $file->storeAs('images/sm/ktm', $fileName);
    $file = $request->file('ktm_2');
        $fileName = $request->file('ktm_2')->getClientOriginalName();
        $data['ktm_2'] = $file->storeAs('images/sm/ktm', $fileName);
    $file = $request->file('ktm_3');
        $fileName = $request->file('ktm_3')->getClientOriginalName();
        $data['ktm_3'] = $file->storeAs('images/sm/ktm', $fileName);
    $file = $request->file('ktm_4');
        $fileName = $request->file('ktm_4')->getClientOriginalName();
        $data['ktm_4'] = $file->storeAs('images/sm/ktm', $fileName);
    $file = $request->file('ktm_5');
        $fileName = $request->file('ktm_5')->getClientOriginalName();
        $data['ktm_5'] = $file->storeAs('images/sm/ktm', $fileName);
    $file = $request->file('foto_1');        
        $fileName = $request->file('foto_1')->getClientOriginalName();
        $data['foto_1'] = $file->storeAs('images/sm/foto', $fileName);
    $file = $request->file('foto_2');        
        $fileName = $request->file('foto_2')->getClientOriginalName();
        $data['foto_2'] = $file->storeAs('images/sm/foto', $fileName);
    $file = $request->file('foto_3');        
        $fileName = $request->file('foto_3')->getClientOriginalName();
        $data['foto_3'] = $file->storeAs('images/sm/foto', $fileName);
    $file = $request->file('foto_4');        
        $fileName = $request->file('foto_4')->getClientOriginalName();
        $data['foto_4'] = $file->storeAs('images/sm/foto', $fileName);
    $file = $request->file('foto_5');        
        $fileName = $request->file('foto_5')->getClientOriginalName();
        $data['foto_5'] = $file->storeAs('images/sm/foto', $fileName);
    $file = $request->file('krs_1');        
        $fileName = $request->file('krs_1')->getClientOriginalName();
        $data['krs_1'] = $file->storeAs('images/sm/krs', $fileName);
    $file = $request->file('krs_2');        
        $fileName = $request->file('krs_2')->getClientOriginalName();
        $data['krs_2'] = $file->storeAs('images/sm/krs', $fileName);
    $file = $request->file('krs_3');        
        $fileName = $request->file('krs_3')->getClientOriginalName();
        $data['krs_3'] = $file->storeAs('images/sm/krs', $fileName);
 $file = $request->file('krs_4');        
        $fileName = $request->file('krs_4')->getClientOriginalName();
        $data['krs_4'] = $file->storeAs('images/sm/krs', $fileName);
    $file = $request->file('krs_5');        
        $fileName = $request->file('krs_5')->getClientOriginalName();
        $data['krs_5'] = $file->storeAs('images/sm/krs', $fileName);
    $file = $request->file('buktifollow_1');        
        $fileName = $request->file('buktifollow_1')->getClientOriginalName();
        $data['bukti_follow_1'] = $file->storeAs('images/sm/bukti', $fileName);
    $file = $request->file('buktifollow_2');        
        $fileName = $request->file('buktifollow_2')->getClientOriginalName();
        $data['bukti_follow_2'] = $file->storeAs('images/sm/bukti', $fileName);
    $file = $request->file('buktifollow_3');        
        $fileName = $request->file('buktifollow_3')->getClientOriginalName();
        $data['bukti_follow_3'] = $file->storeAs('images/sm/bukti', $fileName);
    $file = $request->file('buktifollow_4');        
        $fileName = $request->file('buktifollow_4')->getClientOriginalName();
        $data['bukti_follow_4'] = $file->storeAs('images/sm/bukti', $fileName);
     $file = $request->file('buktifollow_5');        
        $fileName = $request->file('buktifollow_5')->getClientOriginalName();
        $data['bukti_follow_5'] = $file->storeAs('images/sm/bukti', $fileName);
    $fileName = $request->file('surat_delegasi')->getClientOriginalName();
        $data['surat_delegasi'] = $file->storeAs('document/sm', $fileName);

    $request->request->add(['price' => 250000, 'status' => 'Unpaid']);
    $order = ordersm::create($request->all());

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
    'first_name' => $request->nama_1,
    'email' => $request->email_1,
    'last_name' => $request->nama_2,
    'phone' => $request->nomorhp_2,
),
);

$snapToken = \Midtrans\Snap::getSnapToken($params);
return view('matalomba/kdbi/checkout', compact('snapToken', 'order'));
}
public function callback(Request $request){
    $serverKey = config('midtrans.server_key');
    $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
    if($hashed == $request->signature_key){
        if($request->status == 'capture' or $request-> status == 'settlement'){
            $order = ordersm::find ($request->order_id);
            $order->update(['status' => 'Paid']);
        }
    }
}
public function home($id){
    $order = ordersm::find($id);
    return view('/');
}
}
