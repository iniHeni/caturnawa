<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function checkout(Request $request){
        $file = $request->file('ktm_1');
            $fileName = $request->file('ktm_1')->getClientOriginalName();
            $data['ktm_1'] = $file->storeAs('images/edc/ktm', $fileName);
        $file = $request->file('ktm_2');
            $fileName = $request->file('ktm_2')->getClientOriginalName();
            $data['ktm_2'] = $file->storeAs('images/edc/ktm', $fileName);
            $file = $request->file('foto_1');
        $fileName = $request->file('foto_1')->getClientOriginalName();
            $data['foto_1'] = $file->storeAs('images/edc/foto', $fileName);
            $file = $request->file('foto_2');
        $fileName = $request->file('foto_2')->getClientOriginalName();
            $data['foto_2'] = $file->storeAs('images/edc/foto', $fileName);
            $file = $request->file('krs_1');
        $fileName = $request->file('krs_1')->getClientOriginalName();
            $data['krs_1'] = $file->storeAs('images/edc/krs', $fileName);
            $file = $request->file('krs_2');
        $fileName = $request->file('krs_2')->getClientOriginalName();
            $data['krs_2'] = $file->storeAs('images/edc/krs', $fileName);
            $file = $request->file('buktifollow_1');
        $fileName = $request->file('buktifollow_1')->getClientOriginalName();
            $data['buktifollow_1'] = $file->storeAs('images/edc/buktifollow', $fileName);
            $file = $request->file('buktifollow_2');
        $fileName = $request->file('buktifollow_2')->getClientOriginalName();
            $data['buktifollow_2'] = $file->storeAs('images/edc/buktifollow', $fileName);
            $file = $request->file('surat_delegasi');
        $fileName = $request->file('surat_delegasi')->getClientOriginalName();
            $data['surat_delegasi'] = $file->storeAs('document/edc', $fileName);

        $request->request->add(['price' => 250000, 'status' => 'Unpaid']);
        $order = Order::create($request->all());

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
return view('matalomba/edc/checkout', compact('snapToken', 'order'));
    }
    public function callback(Request $request){
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->status == 'capture' or $request-> status == 'settlement'){
                $order = Order::find ($request->order_id);
                $order->update(['status' => 'Paid']);
            }
        }
    }
    public function home($id){
        $order = Order::find($id);
        return view('index');
    }
}
