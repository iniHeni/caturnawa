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
            'twibbon' => 'required|mimes:png,jpeg,jpg|max:5000',
            'twibbon2' => 'required|mimes:png,jpeg,jpg|max:5000',
            'surat_delegasi' => 'required|mimes:pdf|max:5000',
        ]); 

        
       
        $orderkdbi = $request->all();
        if($request->hasFile('ktm_1'))
        {
            $destination_path = 'public/images/kdbi/ktm1';
            $image = $request->file('ktm_1');
            $image_name = time() . '_';
            $path = $request->file('ktm_1')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/kdbi/ktm_1/' . $image_name);

            $orderlkti['ktm_1'] = $imageUrl;

        }
        if($request->hasFile('ktm_2'))
        {
            $destination_path = 'public/images/kdbi/ktm2';
            $image = $request->file('ktm_2');
            $image_name = time() . '_';
            $path = $request->file('ktm_2')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/kdbi/ktm2/' . $image_name);

            $orderlkti['ktm_2'] = $imageUrl;

        }
        if($request->hasFile('foto_1'))
        {
            $destination_path = 'public/images/kdbi/foto1';
            $image = $request->file('foto_1');
            $image_name = time() . '_';
            $path = $request->file('foto_1')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/kdbi/foto1/' . $image_name);

            $orderlkti['foto_1'] = $imageUrl;

        }
        if($request->hasFile('foto_2'))
        {
            $destination_path = 'public/images/kdbi/foto2';
            $image = $request->file('foto_2');
            $image_name = time() . '_';
            $path = $request->file('foto_2')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/kdbi/foto2/' . $image_name);

            $orderlkti['foto_2'] = $imageUrl;

        }
        if($request->hasFile('krs_1'))
        {
            $destination_path = 'public/images/kdbi/krs1';
            $image = $request->file('krs_1');
            $image_name = time() . '_';
            $path = $request->file('krs_1')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/kdbi/krs1/' . $image_name);

            $orderlkti['krs_1'] = $imageUrl;

        }
        if($request->hasFile('krs_2'))
        {
            $destination_path = 'public/images/kdbi/krs2';
            $image = $request->file('krs_2');
            $image_name = time() . '_';
            $path = $request->file('krs_2')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/kdbi/krs2/' . $image_name);

            $orderlkti['krs_2'] = $imageUrl;

        }
        if($request->hasFile('buktifollow_1'))
        {
            $destination_path = 'public/images/kdbi/bukti1';
            $image = $request->file('buktifollow_1');
            $image_name = time() . '_';
            $path = $request->file('buktifollow_1')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/kdbi/bukti1/' . $image_name);

            $orderlkti['buktifollow_1'] = $imageUrl;

        }
        if($request->hasFile('buktifollow_2'))
        {
            $destination_path = 'public/images/kdbi/bukti2';
            $image = $request->file('buktifollow_2');
            $image_name = time() . '_';
            $path = $request->file('buktifollow_2')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/kdbi/bukti2/' . $image_name);

            $orderlkti['buktifollow_2'] = $imageUrl;

        }
        if($request->hasFile('twibbon'))
        {
            $destination_path = 'public/images/kdbi/twibbon';
            $image = $request->file('twibbon');
            $image_name = time() . '_';
            $path = $request->file('twibbon')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/kdbi/twibbon/' . $image_name);

            $orderlkti['twibbon'] = $imageUrl;
        }
        if($request->hasFile('twibbon2'))
        {
            $destination_path = 'public/images/kdbi/twibbon2';
            $image = $request->file('twibbon2');
            $image_name = time() . '_';
            $path = $request->file('twibbon2')->storeAS($destination_path,$image_name);

            $imageUrl = asset('storage/images/kdbi/twibbon2/' . $image_name);

            $orderlkti['twibbon2'] = $imageUrl;

        }
        if($request->hasFile('surat_delegasi'))
        {
            $destination_path = 'public/document/kdbi/surat';
            $image = $request->file('surat_delegasi');
            $image_name = time() . '_';
            $path = $request->file('surat_delegasi')->storeAS($destination_path,$image_name);

            $imageUrl = asset('storage/document/kdbi/surat/' . $image_name);

            $orderlkti['surat_delegasi'] = $imageUrl;

        }

         $additionalData = [
        'price' => 300000,
        'status' => 'Unpaid',
        'order' => rand(),
        'kompetisi' => 'Debate Bahasa Indonesia Competition',
    ];

    $orderkdbi = array_merge($orderkdbi, $additionalData);
        $orderkdbi = orderkdbi::create($orderkdbi);

       

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
    'order_id' => $orderkdbi->order,
    'gross_amount' => $orderkdbi->price,
),
'item_details' => array(
    array(
    'id' => $orderkdbi->id,
    'price' => $orderkdbi->price,
    'quantity' => 1,
    'name' =>  "Kompetisi Debate Bahasa Indonesia",
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
public function callbackk(Request $request){
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
    return view('index');
}
}
