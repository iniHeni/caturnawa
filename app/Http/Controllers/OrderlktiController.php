<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\orderlkti;
use App\Models\pesertaspc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class OrderlktiController extends Controller
{
    public function checkout(Request $request){
        $orderlkti = $request->validate([
            'nama' => 'required|string|max:50',
            'email' => 'required|email',
            'fakultas' => 'required|string|max:50',
            'prodi' => 'required|string|max:50',
            'npm' => 'required|string|max:50',
            'jeniskelamin' => 'required',
            'alamatlengkap' => 'required|string|max:150',
            'nomorhp' => 'required',
            'instansi' => 'required|string|max:50',
            'ktm' => 'required|mimes:png,jpeg,jpg|max:5000',
            'foto' => 'required|mimes:png,jpeg,jpg|max:5000',
            'krs' => 'required|mimes:png,jpeg,jpg|max:5000',
            'buktifollow' => 'required|mimes:png,jpeg,jpg|max:5000',
            'twibbon' => 'required|mimes:png,jpeg,jpg|max:5000',
            'surat_delegasi' => 'required|mimes:pdf|max:5000',
            'nama_kegiatan' => 'required|string|max:50',
            'jenis_kegiatan' => 'required|string|max:50',
            'tingkat_kegiatan' => 'required',
            'nama_kegiatan1' => 'nullable|string|max:50',
            'jenis_kegiatan1' => 'nullable|string|max:50',
            'tingkat_kegiatan1' => 'nullable',
            'nama_kegiatan2' => 'nullable|string|max:50',
            'jenis_kegiatan2' => 'nullable|string|max:50',
            'tingkat_kegiatan2' => 'nullable',
            'nama_kegiatan3' => 'nullable|string|max:50',
            'jenis_kegiatan3' => 'nullable|string|max:50',
            'tingkat_kegiatan3' => 'nullable',
            'nama_kegiatan4' => 'nullable|string|max:50',
            'jenis_kegiatan4' => 'nullable|string|max:50',
            'tingkat_kegiatan4' => 'nullable',
            'nama_kegiatan5' => 'nullable|string|max:50',
            'jenis_kegiatan5' => 'nullable|string|max:50',
            'tingkat_kegiatan5' => 'nullable',
            'nama_kegiatan6' => 'nullable|string|max:50',
            'jenis_kegiatan6' => 'nullable|string|max:50',
            'tingkat_kegiatan6' => 'nullable',
            'nama_kegiatan7' => 'nullable|string|max:50',
            'jenis_kegiatan7' => 'nullable|string|max:50',
            'tingkat_kegiatan7' => 'nullable',
            'nama_kegiatan8' => 'nullable|string|max:50',
            'jenis_kegiatan8' => 'nullable|string|max:50',
            'tingkat_kegiatan8' => 'nullable',
            'nama_kegiatan9' => 'nullable|string|max:50',
            'jenis_kegiatan9' => 'nullable|string|max:50',
            'tingkat_kegiatan9' => 'nullable',
            'sertifikat' => 'required|mimes:pdf|max:5000',
            'sertifikat1' => 'nullable|mimes:pdf|max:5000',
            'sertifikat2' => 'nullable|mimes:pdf|max:5000',
            'sertifikat3' => 'nullable|mimes:pdf|max:5000',
            'sertifikat4' => 'nullable|mimes:pdf|max:5000',
            'sertifikat5' => 'nullable|mimes:pdf|max:5000',
            'sertifikat6' => 'nullable|mimes:pdf|max:5000',
            'sertifikat7' => 'nullable|mimes:pdf|max:5000',
            'sertifikat8' => 'nullable|mimes:pdf|max:5000',
            'sertifikat9' => 'nullable|mimes:pdf|max:5000',
            
        ]); 
        $orderlkti = $request->all();
        if($request->hasFile('ktm'))
        {
            $destination_path = 'public/images/lkti/ktm';
            $image = $request->file('ktm');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('ktm')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/lkti/ktm/' . $image_name);

            $orderlkti['ktm'] = $imageUrl;

        }
        if($request->hasFile('foto'))
        {
            $destination_path = 'public/images/lkti/foto';
            $image = $request->file('foto');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('foto')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/lkti/foto/' . $image_name);

            $orderlkti['foto'] = $imageUrl;

        }
        if($request->hasFile('krs'))
        {
            $destination_path = 'public/images/lkti/krs';
            $image = $request->file('krs');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('krs')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/lkti/krs/' . $image_name);

            $orderlkti['krs'] = $imageUrl;

        }
        if($request->hasFile('buktifollow'))
        {
            $destination_path = 'public/images/lkti/bukti';
            $image = $request->file('buktifollow');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('buktifollow')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/lkti/bukti/' . $image_name);

            $orderlkti['buktifollow'] = $imageUrl;

        }
        if($request->hasFile('twibbon'))
        {
            $destination_path = 'public/images/lkti/twibbon';
            $image = $request->file('twibbon');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('twibbon')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/lkti/twibbon/' . $image_name);

            $orderlkti['twibbon'] = $imageUrl;

        }
        if($request->hasFile('surat_delegasi'))
        {
            $destination_path = 'public/document/lkti/surat';
            $image = $request->file('surat_delegasi');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('surat_delegasi')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/lkti/surat/' . $image_name);

            $orderlkti['surat_delegasi'] = $imageUrl;
        }
        if($request->hasFile('sertifikat'))
        {
            $destination_path = 'public/document/lkti/sertif';
            $image = $request->file('sertifikat');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('sertifikat')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/lkti/sertif/' . $image_name);

            $orderlkti['sertifikat'] = $imageUrl;

        }
        if($request->hasFile('sertifikat1'))
        {
            $destination_path = 'public/document/lkti/sertif1';
            $image = $request->file('sertifikat1');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('sertifikat1')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/lkti/sertif1/' . $image_name);

            $orderlkti['sertifikat1'] = $imageUrl;
        }else {
           
            $orderlkti['sertifikat1'] = null;
        }
        if($request->hasFile('sertifikat2'))
        {
            $destination_path = 'public/document/lkti/sertif2';
            $image = $request->file('sertifikat2');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('sertifikat2')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/lkti/sertif2/' . $image_name);

            $orderlkti['sertifikat2'] = $imageUrl;
        }else {
            
            $orderlkti['sertifikat2'] = null; 
        }
        if($request->hasFile('sertifikat3'))
        {
            $destination_path = 'public/document/lkti/sertif3';
            $image = $request->file('sertifikat3');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('sertifikat3')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/lkti/sertif3/' . $image_name);

            $orderlkti['sertifikat3'] = $imageUrl;

        }else {
          
            $orderlkti['sertifikat3'] = null;
        }
        if($request->hasFile('sertifikat4'))
        {
            $destination_path = 'public/document/lkti/sertif4';
            $image = $request->file('sertifikat4');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('sertifikat4')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/lkti/sertif4/' . $image_name);

            $orderlkti['sertifikat4'] = $imageUrl;

        }else {
           
            $orderlkti['sertifikat4'] = null;
        }
        if($request->hasFile('sertifikat5'))
        {
            $destination_path = 'public/document/lkti/sertif5';
            $image = $request->file('sertifikat5');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('sertifikat5')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/lkti/sertif5/' . $image_name);

            $orderlkti['sertifikat5'] = $imageUrl;

        }else {
           
            $orderlkti['sertifikat5'] = null; 
        }
        if($request->hasFile('sertifikat6'))
        {
            $destination_path = 'public/document/lkti/sertif6';
            $image = $request->file('sertifikat6');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('sertifikat6')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/lkti/sertif6/' . $image_name);

            $orderlkti['sertifikat6'] = $imageUrl;

        }else {
            
            $orderlkti['sertifikat6'] = null; 
        }
        if($request->hasFile('sertifikat7'))
        {
            $destination_path = 'public/document/lkti/sertif7';
            $image = $request->file('sertifikat7');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('sertifikat7')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/lkti/sertif7/' . $image_name);

            $orderlkti['sertifikat7'] = $imageUrl;

        }else {
            
            $orderlkti['sertifikat7'] = null; 
        }
        if($request->hasFile('sertifikat8'))
        {
            $destination_path = 'public/document/lkti/sertif8';
            $image = $request->file('sertifikat8');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('sertifikat8')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/lkti/sertif8/' . $image_name);

            $orderlkti['sertifikat8'] = $imageUrl;

        }else {
            
            $orderlkti['sertifikat8'] = null; 
        }
        if($request->hasFile('sertifikat9'))
        {
            $destination_path = 'public/document/lkti/sertif9';
            $image = $request->file('sertifikat9');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('sertifikat9')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/lkti/sertif9/' . $image_name);

            $orderlkti['sertifikat9'] = $imageUrl;

        }else {
            
            $orderlkti['sertifikat9'] = null; 
        }

        $now = Carbon::now();
        
        $asalInstansi = $request->input('instansi'); 
        $asalInstansi = Str::lower($asalInstansi); 
        $asalInstansi = str_replace(' ', '', $asalInstansi);

if ($asalInstansi === 'universitasnasional' && $now->between('2024-07-23', '2024-07-26')) {
    $price = 85000;
} elseif ($asalInstansi === 'universitasnasional') {
    $price = 100000;
} elseif ($now->between('2024-07-23', '2024-08-11')) {
            $price = 170000; 
        } elseif ($now->between('2024-08-12', '2024-08-23')) {
            $price = 200000; 
        }else {
            $price = 9999999; 
        }
         $additionalData = [
        'price' => $price,
        'status' => 'Unpaid',
        'order' => rand(),
        'kompetisi' => 'Scientific Paper',
    ];

    $orderlkti = array_merge($orderlkti, $additionalData);
    $orderlkti = orderlkti::create($orderlkti);

        
       

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
    'order_id' => "LKTI" . '-' . $orderlkti->order,
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
public function callbackl(Request $request){
    $serverKey = config('midtrans.server_key');
    $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
    if($hashed == $request->signature_key){
        if($request->transaction_status == 'settlement'){
            $orderlkti = orderlkti::find ($request->order_id);
            $orderlkti->update(['status' => 'Paid']);
        }
    }
}
public function homespc($id){
    $orderlkti = orderlkti::find($id);
    $orderlkti->update(['status' => 'Paid']);
    return view('index',);
}

}

