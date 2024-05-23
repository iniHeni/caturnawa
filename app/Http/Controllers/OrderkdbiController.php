<?php

namespace App\Http\Controllers;


use App\Models\orderkdbi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class OrderkdbiController extends Controller
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
            'surat_delegasi' => 'required|mimes:pdf|max:5000',
        ]); 

        
       
        $orderkdbi = $request->all();
        if($request->hasFile('ktm_1'))
        {
            $destination_path = 'images/kdbi/ktm1';
            $image = $request->file('ktm_1');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('ktm_1')->storeAS($destination_path,$image_name);

            $orderkdbi['ktm_1'] = $image_name;

        }
        if($request->hasFile('ktm_2'))
        {
            $destination_path = 'images/kdbi/ktm2';
            $image = $request->file('ktm_2');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('ktm_2')->storeAS($destination_path,$image_name);

            $orderkdbi['ktm_2'] = $image_name;

        }
        if($request->hasFile('foto_1'))
        {
            $destination_path = 'images/kdbi/foto1';
            $image = $request->file('foto_1');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('foto_1')->storeAS($destination_path,$image_name);

            $orderkdbi['foto_1'] = $image_name;

        }
        if($request->hasFile('foto_2'))
        {
            $destination_path = 'images/kdbi/foto2';
            $image = $request->file('foto_2');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('foto_2')->storeAS($destination_path,$image_name);

            $orderkdbi['foto_2'] = $image_name;

        }
        if($request->hasFile('krs_1'))
        {
            $destination_path = 'images/kdbi/krs1';
            $image = $request->file('krs_1');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('krs_1')->storeAS($destination_path,$image_name);

            $orderkdbi['krs_1'] = $image_name;

        }
        if($request->hasFile('krs_2'))
        {
            $destination_path = 'images/kdbi/krs2';
            $image = $request->file('krs_2');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('krs_2')->storeAS($destination_path,$image_name);
            $orderkdbi['krs_2'] = $image_name;

        }
        if($request->hasFile('buktifollow_1'))
        {
            $destination_path = 'images/kdbi/bukti1';
            $image = $request->file('buktifollow_1');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('buktifollow_1')->storeAS($destination_path,$image_name);

            $orderkdbi['buktifollow_1'] = $image_name;

        }
        if($request->hasFile('buktifollow_2'))
        {
            $destination_path = 'images/kdbi/bukti2';
            $image = $request->file('buktifollow_2');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('buktifollow_2')->storeAS($destination_path,$image_name);

            $orderkdbi['buktifollow_2'] = $image_name;

        }
        if($request->hasFile('surat_delegasi'))
        {
            $destination_path = 'document/kdbi/surat';
            $image = $request->file('surat_delegasi');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('surat_delegasi')->storeAS($destination_path,$image_name);

            $orderkdbi['surat_delegasi'] = $image_name;

        }

         $additionalData = [
        'price' => 300000,
        'status' => 'Unpaid',
        'kompetisi' => 'Debate Bahasa Indonesia Competition',
    ];

    $orderkdbi = array_merge($orderkdbi, $additionalData);
        $orderkdbi = orderkdbi::create($orderkdbi);

        cloudinary()->uploadApi();
        $result = $request->file('ktm_1')->storeOnCloudinary('caturnawa/kdbi/images/ktm_1');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('ktm_2')->storeOnCloudinary('caturnawa/kdbi/images/ktm_2');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('foto_1')->storeOnCloudinary('caturnawa/kdbi/images/foto1');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('foto_2')->storeOnCloudinary('caturnawa/kdbi/images/foto2');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('krs_1')->storeOnCloudinary('caturnawa/kdbi/images/krs1');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('krs_2')->storeOnCloudinary('caturnawa/kdbi/images/krs2');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('buktifollow_1')->storeOnCloudinary('caturnawa/kdbi/images/bukti1');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('buktifollow_2')->storeOnCloudinary('caturnawa/kdbi/images/bukti2');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('surat_delegasi')->storeOnCloudinary('caturnawa/kdbi/images/surat');
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
    'order_id' => $orderkdbi->id,
    'gross_amount' => $orderkdbi->price,
),
'item_details' => array(
    array(
    'id' => 'order_id',
    'price' => $orderkdbi->price,
    'quantity' => 1,
    'name' =>  "Debate Bahasa Indonesia Competition",
    ),
),
'customer_details' => array(
    'first_name' => $request->nama_1,
    'email' => $request->email_1,
    'last_name' => $request->nama_2,
    'phone' => $request->nomorhp_2,
),
);

$snapToken = \Midtrans\Snap::getSnapToken($params);
return view('matalomba/kdbi/checkout', compact('snapToken', 'orderkdbi'));
}
public function callback(Request $request){
    $serverKey = config('midtrans.server_key');
    $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
    if($hashed == $request->signature_key){
        if($request->status == 'capture' or $request-> status == 'settlement'){
            $orderkdbi = orderkdbi::find ($request->order_id);
            $orderkdbi->update(['status' => 'Paid']);
        }
    }
}
public function home($id){
    $orderkdbi = orderkdbi::find($id);
    return view('/');
}
}
