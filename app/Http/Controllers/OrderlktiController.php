<?php

namespace App\Http\Controllers;

use App\Models\orderlkti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class OrderlktiController extends Controller
{
    public function checkout(Request $request){
        $orderlkti = $request->all();
        if($request->hasFile('ktm'))
        {
            $destination_path = 'images/lkti/ktm';
            $image = $request->file('ktm');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('ktm')->storeAS($destination_path,$image_name);

            $orderlkti['ktm'] = $image_name;

        }
        if($request->hasFile('foto'))
        {
            $destination_path = 'images/lkti/foto';
            $image = $request->file('foto');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('foto')->storeAS($destination_path,$image_name);

            $orderlkti['foto'] = $image_name;

        }
        if($request->hasFile('krs'))
        {
            $destination_path = 'images/lkti/krs';
            $image = $request->file('krs');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('krs')->storeAS($destination_path,$image_name);

            $orderlkti['krs'] = $image_name;

        }
        if($request->hasFile('buktifollow'))
        {
            $destination_path = 'images/lkti/bukti';
            $image = $request->file('buktifollow');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('buktifollow')->storeAS($destination_path,$image_name);

            $orderlkti['buktifollow'] = $image_name;

        }
        if($request->hasFile('surat_delegasi'))
        {
            $destination_path = 'document/lkti/surat';
            $image = $request->file('surat_delegasi');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('surat_delegasi')->storeAS($destination_path,$image_name);

            $orderlkti['surat_delegasi'] = $image_name;

        }
        if($request->hasFile('sertifikat'))
        {
            $destination_path = 'document/lkti/sertif';
            $image = $request->file('sertifikat');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('sertifikat')->storeAS($destination_path,$image_name);
            $orderlkti['sertifikat'] = $image_name;

        }else {
            // Jika file sertifikat tidak diunggah, atur nilai sertifikat menjadi null atau default value lainnya (opsional)
            $orderlkti['sertifikat'] = null; // Atau bisa diatur menjadi string kosong ('')
        }
        if($request->hasFile('sertifikat1'))
        {
            $destination_path = 'document/lkti/sertif1';
            $image = $request->file('sertifikat1');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('sertifikat1')->storeAS($destination_path,$image_name);

            $orderlkti['sertifikat1'] = $image_name;

        }else {
            // Jika file sertifikat tidak diunggah, atur nilai sertifikat menjadi null atau default value lainnya (opsional)
            $orderlkti['sertifikat1'] = null; // Atau bisa diatur menjadi string kosong ('')
        }
        if($request->hasFile('sertifikat2'))
        {
            $destination_path = 'document/lkti/sertif2';
            $image = $request->file('sertifikat2');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('sertifikat2')->storeAS($destination_path,$image_name);

            $orderlkti['sertifikat2'] = $image_name;

        }else {
            // Jika file sertifikat tidak diunggah, atur nilai sertifikat menjadi null atau default value lainnya (opsional)
            $orderlkti['sertifikat2'] = null; // Atau bisa diatur menjadi string kosong ('')
        }
        if($request->hasFile('sertifikat3'))
        {
            $destination_path = 'document/lkti/sertif3';
            $image = $request->file('sertifikat3');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('sertifikat3')->storeAS($destination_path,$image_name);

            $orderlkti['sertifikat3'] = $image_name;

        }else {
            // Jika file sertifikat tidak diunggah, atur nilai sertifikat menjadi null atau default value lainnya (opsional)
            $orderlkti['sertifikat3'] = null; // Atau bisa diatur menjadi string kosong ('')
        }
        if($request->hasFile('sertifikat4'))
        {
            $destination_path = 'document/lkti/sertif4';
            $image = $request->file('sertifikat4');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('sertifikat4')->storeAS($destination_path,$image_name);
            $orderlkti['sertifikat4'] = $image_name;

        }else {
            // Jika file sertifikat tidak diunggah, atur nilai sertifikat menjadi null atau default value lainnya (opsional)
            $orderlkti['sertifikat4'] = null; // Atau bisa diatur menjadi string kosong ('')
        }
        if($request->hasFile('sertifikat5'))
        {
            $destination_path = 'document/lkti/sertif5';
            $image = $request->file('sertifikat5');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('sertifikat5')->storeAS($destination_path,$image_name);

            $orderlkti['sertifikat5'] = $image_name;

        }else {
            // Jika file sertifikat tidak diunggah, atur nilai sertifikat menjadi null atau default value lainnya (opsional)
            $orderlkti['sertifikat5'] = null; // Atau bisa diatur menjadi string kosong ('')
        }
        if($request->hasFile('sertifikat6'))
        {
            $destination_path = 'document/lkti/sertif6';
            $image = $request->file('sertifikat6');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('sertifikat6')->storeAS($destination_path,$image_name);

            $orderlkti['sertifikat6'] = $image_name;

        }else {
            // Jika file sertifikat tidak diunggah, atur nilai sertifikat menjadi null atau default value lainnya (opsional)
            $orderlkti['sertifikat6'] = null; // Atau bisa diatur menjadi string kosong ('')
        }
        if($request->hasFile('sertifikat7'))
        {
            $destination_path = 'document/lkti/sertif7';
            $image = $request->file('sertifikat7');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('sertifikat7')->storeAS($destination_path,$image_name);

            $orderlkti['sertifikat7'] = $image_name;

        }else {
            // Jika file sertifikat tidak diunggah, atur nilai sertifikat menjadi null atau default value lainnya (opsional)
            $orderlkti['sertifikat7'] = null; // Atau bisa diatur menjadi string kosong ('')
        }
        if($request->hasFile('sertifikat8'))
        {
            $destination_path = 'document/lkti/sertif8';
            $image = $request->file('sertifikat8');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('sertifikat8')->storeAS($destination_path,$image_name);

            $orderlkti['sertifikat8'] = $image_name;

        }else {
            // Jika file sertifikat tidak diunggah, atur nilai sertifikat menjadi null atau default value lainnya (opsional)
            $orderlkti['sertifikat8'] = null; // Atau bisa diatur menjadi string kosong ('')
        }
        if($request->hasFile('sertifikat9'))
        {
            $destination_path = 'document/lkti/sertif9';
            $image = $request->file('sertifikat9');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('sertifikat9')->storeAS($destination_path,$image_name);

            $orderlkti['sertifikat9'] = $image_name;

        }else {
            // Jika file sertifikat tidak diunggah, atur nilai sertifikat menjadi null atau default value lainnya (opsional)
            $orderlkti['sertifikat9'] = null; // Atau bisa diatur menjadi string kosong ('')
        }

         $additionalData = [
        'price' => 250000,
        'status' => 'Unpaid',
        'kompetisi' => 'Scientific Paper'
    ];

    $orderlkti = array_merge($orderlkti, $additionalData);
    $orderlkti = orderlkti::create($orderlkti);

        cloudinary()->uploadApi();
        $result = $request->file('ktm')->storeOnCloudinary('caturnawa/lkti/images/ktm');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('foto')->storeOnCloudinary('caturnawa/lkti/images/foto');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('krs')->storeOnCloudinary('caturnawa/lkti/images/krs');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('buktifollow')->storeOnCloudinary('caturnawa/lkti/images/buktifollow');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('surat_delegasi')->storeOnCloudinary('caturnawa/lkti/images/surat');
        $result->getFileName();
        $result->getExtension();

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
    'order_id' => $orderlkti->id,
    'gross_amount' => $orderlkti->price,
),
'item_details' => array(
    array(
    'id' => $orderlkti->id,
    'price' => $orderlkti->price,
    'quantity' => 1,
    'name' =>  "Scientific Paper Competition",
    ),
),
'customer_details' => array(
    'first_name' => $request->nama,
    'email' => $request->email,
    'phone' => $request->nomorhp,
),
);

$snapToken = \Midtrans\Snap::getSnapToken($params);
return view('matalomba/lkti/checkout', compact('snapToken', 'orderlkti'));
}
public function callback(Request $request){
    $serverKey = config('midtrans.server_key');
    $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
    if($hashed == $request->signature_key){
        if($request->status == 'capture' or $request-> status == 'settlement'){
            $orderlkti = orderlkti::find ($request->order_id);
            $orderlkti->update(['status' => 'Paid']);
        }
    }
}
public function home($id){
    $orderlkti = orderlkti::find($id);
    return view('/');
}
}

