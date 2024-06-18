<?php

namespace App\Http\Controllers;

use App\Models\ordersm;
use Illuminate\Http\Request;
use Carbon\Carbon;
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
            'namateam' => 'required|string|max:50',
            'instansi' => 'required|string|max:50',
            'linkvidio' => 'required',
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
            'twibbon_1' => 'required|mimes:png,jpeg,jpg|max:5000',
            'twibbon_2' => 'required|mimes:png,jpeg,jpg|max:5000',
            'twibbon_3' => 'required|mimes:png,jpeg,jpg|max:5000',
            'twibbon_4' => 'required|mimes:png,jpeg,jpg|max:5000',
            'twibbon_5' => 'required|mimes:png,jpeg,jpg|max:5000',
            'surat_delegasi' => 'required|mimes:pdf|max:5000',
        ]);     
        $ordersm = $request->all();
        if($request->hasFile('ktm_1'))
        {
            $destination_path = 'public/images/sm/ktm1';
            $image = $request->file('ktm_1');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('ktm_1')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/ktm1/' . $image_name);

            $ordersm['ktm_1'] = $imageUrl;

        }
        if($request->hasFile('ktm_2'))
        {
            $destination_path = 'public/images/sm/ktm2';
            $image = $request->file('ktm_2');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('ktm_2')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/ktm2/' . $image_name);

            $ordersm['ktm_2'] = $imageUrl;

        }
        if($request->hasFile('ktm_3'))
        {
            $destination_path = 'public/images/sm/ktm3';
            $image = $request->file('ktm_3');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('ktm_3')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/ktm3/' . $image_name);

            $ordersm['ktm_3'] = $imageUrl;

        }
        if($request->hasFile('ktm_4'))
        {
            $destination_path = 'public/images/sm/ktm4';
            $image = $request->file('ktm_4');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('ktm_4')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/ktm4/' . $image_name);

            $ordersm['ktm_4'] = $imageUrl;

        }
        if($request->hasFile('ktm_5'))
        {
            $destination_path = 'public/images/sm/ktm5';
            $image = $request->file('ktm_5');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('ktm_5')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/ktm5/' . $image_name);

            $ordersm['ktm_5'] = $imageUrl;

        }
        if($request->hasFile('foto_1'))
        {
            $destination_path = 'public/images/sm/foto1';
            $image = $request->file('foto_1');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('foto_1')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/foto1/' . $image_name);

            $ordersm['foto_1'] = $imageUrl;

        }
        if($request->hasFile('foto_2'))
        {
            $destination_path = 'public/images/sn/foto2';
            $image = $request->file('foto_2');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('foto_2')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/foto2/' . $image_name);

            $ordersm['foto_2'] = $imageUrl;

        }
        if($request->hasFile('foto_3'))
        {
            $destination_path = 'public/images/sn/foto3';
            $image = $request->file('foto_3');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('foto_3')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/foto3/' . $image_name);

            $ordersm['foto_3'] = $imageUrl;

        }
        if($request->hasFile('foto_4'))
        {
            $destination_path = 'public/images/sm/foto4';
            $image = $request->file('foto_4');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('foto_4')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/foto4/' . $image_name);

            $ordersm['foto_4'] = $imageUrl;

        }
        if($request->hasFile('foto_5'))
        {
            $destination_path = 'public/images/sm/foto5';
            $image = $request->file('foto_5');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('foto_5')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/foto5/' . $image_name);

            $ordersm['ktm_2'] = $imageUrl;

        }
        if($request->hasFile('krs_1'))
        {
            $destination_path = 'public/images/sm/krs1';
            $image = $request->file('krs_1');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('krs_1')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/krs1/' . $image_name);

            $ordersm['krs_1'] = $imageUrl;

        }
        if($request->hasFile('krs_2'))
        {
            $destination_path = 'public/images/sm/krs2';
            $image = $request->file('krs_2');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('krs_2')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/krs2/' . $image_name);

            $ordersm['krs_2'] = $imageUrl;

        }
        if($request->hasFile('krs_3'))
        {
            $destination_path = 'public/images/sm/krs3';
            $image = $request->file('krs_3');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('krs_3')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/krs3/' . $image_name);

            $ordersm['krs_3'] = $imageUrl;

        }
        if($request->hasFile('krs_4'))
        {
            $destination_path = 'public/images/sm/krs4';
            $image = $request->file('krs_4');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('krs_4')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/krs4/' . $image_name);

            $ordersm['krs_4'] = $imageUrl;

        }
        if($request->hasFile('krs_5'))
        {
            $destination_path = 'public/images/sm/krs5';
            $image = $request->file('krs_5');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('krs_5')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/krs5/' . $image_name);

            $ordersm['krs_5'] = $imageUrl;

        }
        if($request->hasFile('buktifollow_1'))
        {
            $destination_path = 'public/images/sm/bukti1';
            $image = $request->file('buktifollow_1');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('buktifollow_1')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/bukti1/' . $image_name);

            $ordersm['buktifollow_1'] = $imageUrl;

        }
        if($request->hasFile('buktifollow_2'))
        {
            $destination_path = 'public/images/sm/bukti2';
            $image = $request->file('buktifollow_2');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('buktifollow_2')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/bukti2/' . $image_name);

            $ordersm['buktifollow_2'] = $imageUrl;

        }
        if($request->hasFile('buktifollow_3'))
        {
            $destination_path = 'public/images/sm/bukti3';
            $image = $request->file('buktifollow_3');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('buktifollow_3')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/bukti3/' . $image_name);

            $ordersm['buktifollow_3'] = $imageUrl;

        }
        if($request->hasFile('buktifollow_4'))
        {
            $destination_path = 'public/images/sm/bukti4';
            $image = $request->file('buktifollow_4');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('buktifollow_4')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/bukti4/' . $image_name);

            $ordersm['buktifollow_4'] = $imageUrl;
        }
        if($request->hasFile('buktifollow_5'))
        {
            $destination_path = 'public/images/sm/bukti5';
            $image = $request->file('buktifollow_5');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('buktifollow_5')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/bukti5/' . $image_name);

            $ordersm['buktifollow_5'] = $imageUrl;
        }
        if($request->hasFile('twibbon_1'))
        {
            $destination_path = 'public/images/sm/twibbon1';
            $image = $request->file('twibbon_1');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('twibbon_1')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/twibbon1/' . $image_name);

            $ordersm['twibbon_1'] = $imageUrl;

        }
        if($request->hasFile('twibbon_2'))
        {
            $destination_path = 'public/images/sm/twibbon2';
            $image = $request->file('twibbon_2');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('twibbon_2')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/twibbon2/' . $image_name);

            $ordersm['twibbon_2'] = $imageUrl;

        }
        if($request->hasFile('twibbon_3'))
        {
            $destination_path = 'public/images/sm/twibbon3';
            $image = $request->file('twibbon_3');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('twibbon_3')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/twibbon3/' . $image_name);

            $ordersm['twibbon_3'] = $imageUrl;

        }
        if($request->hasFile('twibbon_4'))
        {
            $destination_path = 'public/images/sm/twibbon4';
            $image = $request->file('twibbon_4');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('twibbon_4')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/twibbon4/' . $image_name);

            $ordersm['twibbon_4'] = $imageUrl;

        }
        if($request->hasFile('twibbon_5'))
        {
            $destination_path = 'public/images/sm/twibbon5';
            $image = $request->file('twibbon_5');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('twibbon_5')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/twibbon5/' . $image_name);

            $ordersm['twibbon_5'] = $imageUrl;

        }
        if($request->hasFile('surat_delegasi'))
        {
            $destination_path = 'public/document/sm/surat';
            $image = $request->file('surat_delegasi');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('surat_delegasi')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/sm/surat/' . $image_name);

            $ordersm['surat_delegasi'] = $imageUrl;

        }

        $now = Carbon::now();
        if ($now->between('2024-07-23', '2024-07-26')) {
            $price = 350000; 
        } elseif ($now->between('2024-07-27', '2024-08-11')) {
            $price = 500000; 
        } elseif ($now->between('2024-08-12', '2024-08-23')) {
            $price = 550000; 
        } else {
            $price = 9999999; // Default or registration closed
        }
         $additionalData = [
        'price' => $price,
        'status' => 'Unpaid',
        'order' => rand(),
        'kompetisi' => 'ShortMovie Competition',
    ];

    $ordersm = array_merge($ordersm, $additionalData);
    $ordersm = ordersm::create($ordersm);

       

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
    'order_id' => "SM" . '-' . $ordersm->order,
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
public function callbacks(Request $request){
    $serverKey = config('midtrans.server_key');
    $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
    if($hashed == $request->signature_key){
        if($request->transaction_status == 'capture' or $request->transaction_status == 'settlement'){
            $ordersm = ordersm::find ($request->order_id);
            $ordersm->update(['status' => 'Paid']);
        }
    }
}
public function homesm($id){
    $orderlkti = ordersm::find($id);
    $orderlkti->update(['status' => 'Paid']);
    return view('index',);
}
}
