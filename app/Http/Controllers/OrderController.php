<?php

namespace App\Http\Controllers;


use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class OrderController extends Controller
{
    public function checkout(Request $request){
        $order = $request->validate([
            'nama_1' => 'required|string|max:50',
            'nama_2' => 'required|string|max:50',
            'email_1' => 'required|email',
            'email_2' => 'required|email',
            'fakultas_1'=> 'required|string|max:50',
            'fakultas_2' => 'required|string|max:50',
            'prodi_1' =>'required|string|max:50',
            'prodi_2' => 'required|string|max:50',
            'npm_1' => 'required|string|max:50',
            'npm_2' => 'required|string|max:50',
            'jeniskelamin_1' => 'required',
            'jeniskelamin_2' => 'required',
            'alamatlengkap_1' => 'required',
            'alamatlengkap_2' => 'required',
            'nomorhp_1'=> 'required',
            'nomorhp_2' => 'required',
            'instansi' => 'required|string|max:50',
            'ktm_1' => 'required|mimes:png,jpeg,jpg|max:5000',
            'ktm_2' => 'required|mimes:png,jpeg,jpg|max:5000',
            'foto_1' => 'required|mimes:png,jpeg,jpg|max:5000',
            'foto_2' => 'required|mimes:png,jpeg,jpg|max:5000',
            'krs_1'=> 'required|mimes:png,jpeg,jpg|max:5000',
            'krs_2' => 'required|mimes:png,jpeg,jpg|max:5000',
            'buktifollow_1' => 'required|mimes:png,jpeg,jpg|max:5000',
            'buktifollow_2' => 'required|mimes:png,jpeg,jpg|max:5000',
            'twibbon' => 'required|mimes:png,jpeg,jpg|max:5000',
            'twibbon2' => 'required|mimes:png,jpeg,jpg|max:5000',
            'surat_delegasi' => 'required|mimes:pdf|max:5000',
        ]);     
        $order = $request->all();
        if($request->hasFile('ktm_1'))
        {
            $destination_path = 'public/images/edc/ktm1';
            $image = $request->file('ktm_1');
            $image_name = time() . '_';
            $path = $request->file('ktm_1')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/edc/ktm1/' . $image_name);

            $order['ktm_1'] = $imageUrl;

        }
        if($request->hasFile('ktm_2'))
        {
            $destination_path = 'public/images/edc/ktm2';
            $image = $request->file('ktm_2');
            $image_name = time() . '_';
            $path = $request->file('ktm_2')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/edc/ktm2/' . $image_name);

            $order['ktm_2'] = $imageUrl;

        }
        if($request->hasFile('foto_1'))
        {
            $destination_path = 'public/images/edc/foto1';
            $image = $request->file('foto_1');
            $image_name = time() . '_';
            $path = $request->file('foto_1')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/edc/foto1/' . $image_name);

            $order['foto_1'] = $imageUrl;

        }
        if($request->hasFile('foto_2'))
        {
            $destination_path = 'public/images/edc/foto2';
            $image = $request->file('foto_2');
            $image_name = time() . '_';
            $path = $request->file('foto_2')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/edc/foto2/' . $image_name);

            $order['foto_2'] = $imageUrl;

        }
        if($request->hasFile('krs_1'))
        {
            $destination_path = 'public/images/edc/krs1';
            $image = $request->file('krs_1');
            $image_name = time() . '_';
            $path = $request->file('krs_1')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/edc/krs1/' . $image_name);

            $order['krs_1'] = $imageUrl;

        }
        if($request->hasFile('krs_2'))
        {
            $destination_path = 'public/images/edc/krs2';
            $image = $request->file('krs_2');
            $image_name = time() . '_';
            $path = $request->file('krs_2')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/edc/krs2/' . $image_name);

            $order['krs_2'] = $imageUrl;

        }
        if($request->hasFile('buktifollow_1'))
        {
            $destination_path = 'public/images/edc/bukti1';
            $image = $request->file('buktifollow_1');
            $image_name = time() . '_';
            $path = $request->file('buktifollow_1')->storeAS($destination_path,$image_name);

            $imageUrl = asset('storage/images/edc/bukti1/' . $image_name);

            $order['buktifollow_1'] = $imageUrl;
        }
        if($request->hasFile('buktifollow_2'))
        {
            $destination_path = 'public/images/edc/bukti2';
            $image = $request->file('buktifollow_2');
            $image_name = time() . '_';
            $path = $request->file('buktifollow_2')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/edc/bukti2/' . $image_name);

            $order['buktifollow_2'] = $imageUrl;

        }
        if($request->hasFile('twibbon'))
        {
            $destination_path = 'public/images/edc/twibbon';
            $image = $request->file('twibbon');
            $image_name = time() . '_';
            $path = $request->file('twibbon')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/edc/twibbon/' . $image_name);

            $order['twibbon'] = $imageUrl;

        }
        if($request->hasFile('twibbon2'))
        {
            $destination_path = 'public/images/edc/twibbon2';
            $image = $request->file('twibbon2');
            $image_name = time() . '_';
            $path = $request->file('twibbon2')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/edc/twibbon2/' . $image_name);

            $order['twibbon2'] = $imageUrl;
        }
        if($request->hasFile('surat_delegasi'))
        {
            $destination_path = 'public/document/edc/surat';
            $image = $request->file('surat_delegasi');
            $image_name = time() . '_';
            $path = $request->file('surat_delegasi')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/edc/surat/' . $image_name);

            $order['surat_delegasi'] = $imageUrl;

        }

         $additionalData = [
        'price' => 350000,
        'status' => 'Unpaid',
        'order' => rand(),
        'kompetisi' => 'English Debate Competition',
    ];

    $order = array_merge($order, $additionalData);
    $order = Order::create($order);

      

       // Set your Merchant Server Key
\Midtrans\Config::$serverKey = config('midtrans.server_key');
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;

$paramss = array(
    'transaction_details' => array(
        'order_id' => $order->order,
        'gross_amount' => $order->price,
    ),
    'item_details' => array(
        array(
        'id' => $order->id,
        'price' => $order->price,
        'quantity' => 1,
        'name' =>  "English Debate Competition",
        ),
    ),
    'customer_details' => array(
        'first_name' => $request->nama_1,
        'email' => $request->email_1,
        'last_name' => $request->nama_2,
        'phone' => $request->nomorhp_2,
    ),
);

$snapToken = \Midtrans\Snap::getSnapToken($paramss);
return view('matalomba/edc/checkout', compact('snapToken', 'order'));
    }
    public function callback(Request $request){
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            $request->status == 'capture' or $request-> status == 'settlement';
                
            
        }
    }
    public function home($id){
        $order = Order::find($id);
        return view('index');
    }
}
