<?php

namespace App\Http\Controllers;

use App\Models\ordersm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class OrdersmController extends Controller
{
    public function checkout(Request $request){
        $ordersm = $request->validate([
            'nama_1' => 'required|string|max:50',
            'nama_2' => 'required|string|max:50',
            'nama_3' => 'required|string|max:50',
            'nama_4' => 'required|string|max:50',
            'nama_5' => 'required|string|max:50',
            'email_1' => 'required|email',
            'email_2' => 'required|email',
            'email_3' => 'required|email',
            'email_4' => 'required|email',
            'email_5' => 'required|email',
            'fakultas_1'=> 'required|string|max:50',
            'fakultas_2' => 'required|string|max:50',
            'fakultas_3'=> 'required|string|max:50',
            'fakultas_4' => 'required|string|max:50',
            'fakultas_5'=> 'required|string|max:50',
            'prodi_1' =>'required|string|max:50',
            'prodi_2' => 'required|string|max:50',
            'prodi_3' =>'required|string|max:50',
            'prodi_4' => 'required|string|max:50',
            'prodi_5' =>'required|string|max:50',
            'npm_1' => 'required|string|max:50',
            'npm_2' => 'required|string|max:50',
            'npm_3' => 'required|string|max:50',
            'npm_4' => 'required|string|max:50',
            'npm_5' => 'required|string|max:50',
            'jeniskelamin_1' => 'required',
            'jeniskelamin_2' => 'required',
            'jeniskelamin_3' => 'required',
            'jeniskelamin_4' => 'required',
            'jeniskelamin_5' => 'required',
            'alamatlengkap_1' => 'required',
            'alamatlengkap_2' => 'required',
            'alamatlengkap_3' => 'required',
            'alamatlengkap_4' => 'required',
            'alamatlengkap_5' => 'required',
            'nomorhp_1'=> 'required',
            'nomorhp_2' => 'required',
            'nomorhp_3'=> 'required',
            'nomorhp_4' => 'required',
            'nomorhp_5'=> 'required',
            'instansi' => 'required|string|max:50',
            'ktm_1' => 'required|mimes:png,jpeg,jpg|max:5000',
            'ktm_2' => 'required|mimes:png,jpeg,jpg|max:5000',
            'ktm_3' => 'required|mimes:png,jpeg,jpg|max:5000',
            'ktm_4' => 'required|mimes:png,jpeg,jpg|max:5000',
            'ktm_5' => 'required|mimes:png,jpeg,jpg|max:5000',
            'foto_1' => 'required|mimes:png,jpeg,jpg|max:5000',
            'foto_2' => 'required|mimes:png,jpeg,jpg|max:5000',
            'foto_3' => 'required|mimes:png,jpeg,jpg|max:5000',
            'foto_4' => 'required|mimes:png,jpeg,jpg|max:5000',
            'foto_5' => 'required|mimes:png,jpeg,jpg|max:5000',
            'krs_1'=> 'required|mimes:png,jpeg,jpg|max:5000',
            'krs_2' => 'required|mimes:png,jpeg,jpg|max:5000',
            'krs_3'=> 'required|mimes:png,jpeg,jpg|max:5000',
            'krs_4' => 'required|mimes:png,jpeg,jpg|max:5000',
            'krs_5'=> 'required|mimes:png,jpeg,jpg|max:5000',
            'buktifollow_1' => 'required|mimes:png,jpeg,jpg|max:5000',
            'buktifollow_2' => 'required|mimes:png,jpeg,jpg|max:5000',
            'buktifollow_3' => 'required|mimes:png,jpeg,jpg|max:5000',
            'buktifollow_4' => 'required|mimes:png,jpeg,jpg|max:5000',
            'buktifollow_5' => 'required|mimes:png,jpeg,jpg|max:5000',
            'surat_delegasi' => 'required|mimes:pdf|max:5000'
        ]);     
        $ordersm = $request->all();
        if($request->hasFile('ktm_1'))
        {
            $destination_path = 'images/sm/ktm1';
            $image = $request->file('ktm_1');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('ktm_1')->storeAS($destination_path,$image_name);

            $ordersm['ktm_1'] = $image_name;

        }
        if($request->hasFile('ktm_2'))
        {
            $destination_path = 'images/sm/ktm2';
            $image = $request->file('ktm_2');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('ktm_2')->storeAS($destination_path,$image_name);

            $ordersm['ktm_2'] = $image_name;

        }
        if($request->hasFile('ktm_3'))
        {
            $destination_path = 'images/sm/ktm3';
            $image = $request->file('ktm_3');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('ktm_3')->storeAS($destination_path,$image_name);

            $ordersm['ktm_3'] = $image_name;

        }
        if($request->hasFile('ktm_4'))
        {
            $destination_path = 'images/sm/ktm4';
            $image = $request->file('ktm_4');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('ktm_4')->storeAS($destination_path,$image_name);

            $ordersm['ktm_4'] = $image_name;

        }
        if($request->hasFile('ktm_5'))
        {
            $destination_path = 'images/sm/ktm5';
            $image = $request->file('ktm_5');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('ktm_5')->storeAS($destination_path,$image_name);

            $ordersm['ktm_5'] = $image_name;

        }
        if($request->hasFile('foto_1'))
        {
            $destination_path = 'images/sm/foto1';
            $image = $request->file('foto_1');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('foto_1')->storeAS($destination_path,$image_name);

            $ordersm['foto_1'] = $image_name;

        }
        if($request->hasFile('foto_2'))
        {
            $destination_path = 'images/sn/foto2';
            $image = $request->file('foto_2');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('foto_2')->storeAS($destination_path,$image_name);

            $ordersm['foto_2'] = $image_name;

        }
        if($request->hasFile('foto_3'))
        {
            $destination_path = 'images/sn/foto3';
            $image = $request->file('foto_3');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('foto_3')->storeAS($destination_path,$image_name);

            $ordersm['foto_3'] = $image_name;

        }
        if($request->hasFile('foto_4'))
        {
            $destination_path = 'images/sm/foto4';
            $image = $request->file('foto_4');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('foto_4')->storeAS($destination_path,$image_name);

            $ordersm['foto_4'] = $image_name;

        }
        if($request->hasFile('foto_5'))
        {
            $destination_path = 'images/sm/foto5';
            $image = $request->file('foto_5');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('foto_5')->storeAS($destination_path,$image_name);

            $ordersm['foto_5'] = $image_name;

        }
        if($request->hasFile('krs_1'))
        {
            $destination_path = 'images/sm/krs1';
            $image = $request->file('krs_1');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('krs_1')->storeAS($destination_path,$image_name);

            $ordersm['krs_1'] = $image_name;

        }
        if($request->hasFile('krs_2'))
        {
            $destination_path = 'images/sm/krs2';
            $image = $request->file('krs_2');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('krs_2')->storeAS($destination_path,$image_name);
            $ordersm['krs_2'] = $image_name;

        }
        if($request->hasFile('krs_3'))
        {
            $destination_path = 'images/sm/krs3';
            $image = $request->file('krs_3');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('krs_3')->storeAS($destination_path,$image_name);

            $ordersm['krs_3'] = $image_name;

        }
        if($request->hasFile('krs_4'))
        {
            $destination_path = 'images/sm/krs4';
            $image = $request->file('krs_4');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('krs_4')->storeAS($destination_path,$image_name);
            $ordersm['krs_4'] = $image_name;

        }
        if($request->hasFile('krs_5'))
        {
            $destination_path = 'images/sm/krs5';
            $image = $request->file('krs_5');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('krs_5')->storeAS($destination_path,$image_name);

            $ordersm['krs_5'] = $image_name;

        }
        if($request->hasFile('buktifollow_1'))
        {
            $destination_path = 'images/sm/bukti1';
            $image = $request->file('buktifollow_1');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('buktifollow_1')->storeAS($destination_path,$image_name);

            $ordersm['buktifollow_1'] = $image_name;

        }
        if($request->hasFile('buktifollow_2'))
        {
            $destination_path = 'images/sm/bukti2';
            $image = $request->file('buktifollow_2');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('buktifollow_2')->storeAS($destination_path,$image_name);

            $ordersm['buktifollow_2'] = $image_name;

        }
        if($request->hasFile('buktifollow_3'))
        {
            $destination_path = 'images/sm/bukti3';
            $image = $request->file('buktifollow_3');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('buktifollow_3')->storeAS($destination_path,$image_name);

            $ordersm['buktifollow_3'] = $image_name;

        }
        if($request->hasFile('buktifollow_4'))
        {
            $destination_path = 'images/sm/bukti4';
            $image = $request->file('buktifollow_4');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('buktifollow_4')->storeAS($destination_path,$image_name);

            $ordersm['buktifollow_4'] = $image_name;

        }
        if($request->hasFile('buktifollow_5'))
        {
            $destination_path = 'images/sm/bukti5';
            $image = $request->file('buktifollow_5');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('buktifollow_5')->storeAS($destination_path,$image_name);

            $ordersm['buktifollow_5'] = $image_name;

        }
        if($request->hasFile('surat_delegasi'))
        {
            $destination_path = 'document/sm/surat';
            $image = $request->file('surat_delegasi');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('surat_delegasi')->storeAS($destination_path,$image_name);

            $ordersm['surat_delegasi'] = $image_name;

        }

         $additionalData = [
        'price' => 250000,
        'status' => 'Unpaid',
        'kompetisi' => 'ShortMovie Competition'
    ];

    $ordersm = array_merge($ordersm, $additionalData);
    $ordersm = ordersm::create($ordersm);

        cloudinary()->uploadApi();
        $result = $request->file('ktm_1')->storeOnCloudinary('caturnawa/sm/images/ktm_1');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('ktm_2')->storeOnCloudinary('caturnawa/sm/images/ktm_2');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('ktm_3')->storeOnCloudinary('caturnawa/sm/images/ktm_3');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('ktm_4')->storeOnCloudinary('caturnawa/sm/images/ktm_4');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('ktm_5')->storeOnCloudinary('caturnawa/sm/images/ktm_5');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('foto_1')->storeOnCloudinary('caturnawa/sm/images/foto1');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('foto_2')->storeOnCloudinary('caturnawa/sm/images/foto2');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('foto_3')->storeOnCloudinary('caturnawa/sm/images/foto3');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('foto_4')->storeOnCloudinary('caturnawa/sm/images/foto4');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('foto_5')->storeOnCloudinary('caturnawa/sm/images/foto5');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('krs_1')->storeOnCloudinary('caturnawa/sm/images/krs1');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('krs_2')->storeOnCloudinary('caturnawa/sm/images/krs2');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('krs_3')->storeOnCloudinary('caturnawa/sm/images/krs3');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('krs_4')->storeOnCloudinary('caturnawa/sm/images/krs4');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('krs_5')->storeOnCloudinary('caturnawa/sm/images/krs5');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('buktifollow_1')->storeOnCloudinary('caturnawa/sm/images/bukti1');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('buktifollow_2')->storeOnCloudinary('caturnawa/sm/images/bukti2');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('buktifollow_3')->storeOnCloudinary('caturnawa/sm/images/bukti3');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('buktifollow_4')->storeOnCloudinary('caturnawa/sm/images/bukti4');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('buktifollow_5')->storeOnCloudinary('caturnawa/sm/images/bukti5');
        $result->getFileName();
        $result->getExtension();
        $result = $request->file('surat_delegasi')->storeOnCloudinary('caturnawa/sm/images/surat');
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
    'order_id' => $ordersm->id,
    'gross_amount' => $ordersm->price,
),
'item_details' => array(
    array(
    'id' => $ordersm->id,
    'price' => $ordersm->price,
    'quantity' => 1,
    'name' =>  "ShortMovie Competition",
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
return view('matalomba/sm/checkout', compact('snapToken', 'ordersm'));
}
public function callback(Request $request){
    $serverKey = config('midtrans.server_key');
    $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
    if($hashed == $request->signature_key){
        if($request->status == 'capture' or $request-> status == 'settlement'){
            $ordersm = ordersm::find ($request->order_id);
            $ordersm->update(['status' => 'Paid']);
        }
    }
}
public function home($id){
    $ordersm = ordersm::find($id);
    return view('/');
}
}
