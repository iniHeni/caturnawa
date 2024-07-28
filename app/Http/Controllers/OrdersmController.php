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
            'npm_1' => 'required',
            'npm_2' => 'required',
            'npm_3' => 'required',
            'npm_4' => 'required',
            'npm_5' => 'required',
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
            'nomorhp_1'=> 'required|string',
            'nomorhp_2' => 'required|string',
            'nomorhp_3'=> 'required|string',
            'nomorhp_4' => 'required|string',
            'nomorhp_5'=> 'required|string',
            'namateam' => 'required|string|max:50',
            'instansi' => 'required|string|max:50',
            'ktm_1' => 'required|mimes:png,jpeg,jpg|max:3000',
            'ktm_2' => 'required|mimes:png,jpeg,jpg|max:3000',
            'ktm_3' => 'required|mimes:png,jpeg,jpg|max:3000',
            'ktm_4' => 'required|mimes:png,jpeg,jpg|max:3000',
            'ktm_5' => 'required|mimes:png,jpeg,jpg|max:3000',
            'foto_1' => 'required|mimes:png,jpeg,jpg|max:3000',
            'foto_2' => 'required|mimes:png,jpeg,jpg|max:3000',
            'foto_3' => 'required|mimes:png,jpeg,jpg|max:3000',
            'foto_4' => 'required|mimes:png,jpeg,jpg|max:3000',
            'foto_5' => 'required|mimes:png,jpeg,jpg|max:3000',
            'krs_1'=> 'required|mimes:png,jpeg,jpg|max:3000',
            'krs_2' => 'required|mimes:png,jpeg,jpg|max:3000',
            'krs_3'=> 'required|mimes:png,jpeg,jpg|max:3000',
            'krs_4' => 'required|mimes:png,jpeg,jpg|max:3000',
            'krs_5'=> 'required|mimes:png,jpeg,jpg|max:3000',
            'buktifollow_1' => 'required|mimes:pdf|max:3000',
            'buktifollow_2' => 'required|mimes:pdf|max:3000',
            'buktifollow_3' => 'required|mimes:pdf|max:3000',
            'buktifollow_4' => 'required|mimes:pdf|max:3000',
            'buktifollow_5' => 'required|mimes:pdf|max:3000',
            'twibbon_1' => 'required|mimes:png,jpeg,jpg|max:3000',
            'twibbon_2' => 'required|mimes:png,jpeg,jpg|max:3000',
            'twibbon_3' => 'required|mimes:png,jpeg,jpg|max:3000',
            'twibbon_4' => 'required|mimes:png,jpeg,jpg|max:3000',
            'twibbon_5' => 'required|mimes:png,jpeg,jpg|max:3000',
            'surat_delegasi' => 'required|mimes:pdf|max:3000',
            'bio' => 'required|mimes:pdf|max:3000',
        ]);     
        $ordersm = $request->all();
        if ($request->hasFile('ktm_1')) {
            $originalFileName = pathinfo($request->file('ktm_1')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('ktm_1')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/ktm_1';
            $request->file('ktm_1')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/ktm_1/' . $imageName);
            $ordersm['ktm_1'] = $imageUrl;
        }

        if ($request->hasFile('ktm_2')) {
            $originalFileName = pathinfo($request->file('ktm_2')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('ktm_2')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/ktm_2';
            $request->file('ktm_2')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/ktm_2/' . $imageName);
            $ordersm['ktm_2'] = $imageUrl;
        }

        if ($request->hasFile('ktm_3')) {
            $originalFileName = pathinfo($request->file('ktm_3')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('ktm_3')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/ktm_3';
            $request->file('ktm_3')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/ktm_3/' . $imageName);
            $ordersm['ktm_3'] = $imageUrl;
        }
        if ($request->hasFile('ktm_4')) {
            $originalFileName = pathinfo($request->file('ktm_4')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('ktm_4')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/ktm_4';
            $request->file('ktm_4')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/ktm_4/' . $imageName);
            $ordersm['ktm_4'] = $imageUrl;
        }
        if ($request->hasFile('ktm_5')) {
            $originalFileName = pathinfo($request->file('ktm_5')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('ktm_5')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/ktm_5';
            $request->file('ktm_5')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/ktm_5/' . $imageName);
            $ordersm['ktm_5'] = $imageUrl;
        }
        if ($request->hasFile('foto_1')) {
            $originalFileName = pathinfo($request->file('foto_1')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('foto_1')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/foto_1';
            $request->file('foto_1')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/foto_1/' . $imageName);
            $ordersm['foto_1'] = $imageUrl;
        }
        if ($request->hasFile('foto_2')) {
            $originalFileName = pathinfo($request->file('foto_2')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('foto_2')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/foto_2';
            $request->file('foto_2')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/foto_2/' . $imageName);
            $ordersm['foto_2'] = $imageUrl;
        }
        if ($request->hasFile('foto_3')) {
            $originalFileName = pathinfo($request->file('foto_3')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('foto_3')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/foto_3';
            $request->file('foto_3')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/foto_3/' . $imageName);
            $ordersm['foto_3'] = $imageUrl;
        }
        if ($request->hasFile('foto_4')) {
            $originalFileName = pathinfo($request->file('foto_4')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('foto_4')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/foto_4';
            $request->file('foto_4')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/foto_4/' . $imageName);
            $ordersm['foto_4'] = $imageUrl;
        }
        if ($request->hasFile('foto_5')) {
            $originalFileName = pathinfo($request->file('foto_5')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('foto_5')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/foto_5';
            $request->file('foto_5')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/foto_5/' . $imageName);
            $ordersm['foto_5'] = $imageUrl;
        }
        if ($request->hasFile('krs_1')) {
            $originalFileName = pathinfo($request->file('krs_1')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('krs_1')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/krs_1';
            $request->file('krs_1')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/krs_1/' . $imageName);
            $ordersm['krs_1'] = $imageUrl;
        }
        if ($request->hasFile('krs_2')) {
            $originalFileName = pathinfo($request->file('krs_2')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('krs_2')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/krs_2';
            $request->file('krs_2')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/krs_2/' . $imageName);
            $ordersm['krs_2'] = $imageUrl;
        }
        if ($request->hasFile('krs_3')) {
            $originalFileName = pathinfo($request->file('krs_3')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('krs_3')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/krs_3';
            $request->file('krs_3')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/krs_3/' . $imageName);
            $ordersm['krs_3'] = $imageUrl;
        }
        if ($request->hasFile('krs_4')) {
            $originalFileName = pathinfo($request->file('krs_4')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('krs_4')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/krs_4';
            $request->file('krs_4')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/krs_4/' . $imageName);
            $ordersm['krs_4'] = $imageUrl;
        }
        if ($request->hasFile('krs_5')) {
            $originalFileName = pathinfo($request->file('krs_5')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('krs_5')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/krs_5';
            $request->file('krs_5')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/krs_5/' . $imageName);
            $ordersm['krs_5'] = $imageUrl;
        }
        if ($request->hasFile('buktifollow_1')) {
            $originalFileName = pathinfo($request->file('buktifollow_1')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('buktifollow_1')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/sm/buktifollow_1';
            $request->file('buktifollow_1')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/sm/buktifollow_1/' . $imageName);
            $ordersm['buktifollow_1'] = $imageUrl;
        }
        if ($request->hasFile('buktifollow_2')) {
            $originalFileName = pathinfo($request->file('buktifollow_2')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('buktifollow_2')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/sm/buktifollow_2';
            $request->file('buktifollow_2')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/sm/buktifollow_2/' . $imageName);
            $ordersm['buktifollow_2'] = $imageUrl;
        }
        if ($request->hasFile('buktifollow_3')) {
            $originalFileName = pathinfo($request->file('buktifollow_3')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('buktifollow_3')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/sm/buktifollow_3';
            $request->file('buktifollow_3')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/sm/buktifollow_3/' . $imageName);
            $ordersm['buktifollow_3'] = $imageUrl;
        }
        if ($request->hasFile('buktifollow_4')) {
            $originalFileName = pathinfo($request->file('buktifollow_4')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('buktifollow_4')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/sm/buktifollow_4';
            $request->file('buktifollow_4')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/sm/buktifollow_4/' . $imageName);
            $ordersm['buktifollow_4'] = $imageUrl;
        }
        if ($request->hasFile('buktifollow_5')) {
            $originalFileName = pathinfo($request->file('buktifollow_5')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('buktifollow_5')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/sm/buktifollow_5';
            $request->file('buktifollow_5')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/sm/buktifollow_5/' . $imageName);
            $ordersm['buktifollow_5'] = $imageUrl;
        }
        if ($request->hasFile('twibbon_1')) {
            $originalFileName = pathinfo($request->file('twibbon_1')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('twibbon_1')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/twibbon_1';
            $request->file('twibbon_1')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/twibbon_1/' . $imageName);
            $ordersm['twibbon_1'] = $imageUrl;
        }
        if ($request->hasFile('twibbon_2')) {
            $originalFileName = pathinfo($request->file('twibbon_2')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('twibbon_2')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/twibbon_2';
            $request->file('twibbon_2')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/twibbon_2/' . $imageName);
            $ordersm['twibbon_2'] = $imageUrl;
        }
        if ($request->hasFile('twibbon_3')) {
            $originalFileName = pathinfo($request->file('twibbon_3')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('twibbon_3')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/twibbon_3';
            $request->file('twibbon_3')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/twibbon_3/' . $imageName);
            $ordersm['twibbon_3'] = $imageUrl;
        }
        if ($request->hasFile('twibbon_4')) {
            $originalFileName = pathinfo($request->file('twibbon_4')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('twibbon_4')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/twibbon_4';
            $request->file('twibbon_4')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/twibbon_4/' . $imageName);
            $ordersm['twibbon_4'] = $imageUrl;
        }
        if ($request->hasFile('twibbon_5')) {
            $originalFileName = pathinfo($request->file('twibbon_5')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('twibbon_5')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/twibbon_5';
            $request->file('twibbon_5')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/twibbon_5/' . $imageName);
            $ordersm['twibbon_5'] = $imageUrl;
        }
        if ($request->hasFile('surat_delegasi')) {
            $originalFileName = pathinfo($request->file('surat_delegasi')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('surat_delegasi')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/surat_delegasi';
            $request->file('surat_delegasi')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/surat_delegasi/' . $imageName);
            $ordersm['surat_delegasi'] = $imageUrl;
        }
        if ($request->hasFile('bio')) {
            $originalFileName = pathinfo($request->file('bio')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('bio')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/sm/bio';
            $request->file('bio')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/sm/bio/' . $imageName);
            $ordersm['bio'] = $imageUrl;
        }

        $now = Carbon::now('Asia/Jakarta');
        if ($now->between('2024-07-23', '2024-07-28')) {
            $price = 300000; 
        } elseif ($now->between('2024-07-29', '2024-08-11')) {
            $price = 400000; 
        } elseif ($now->between('2024-08-12', '2024-08-23')) {
            $price = 450000; 
        } else {
            $price = 9999999; 
        }
         $additionalData = [
        'price' => $price,
        'status' => 'Unpaid',
        'order' => 'SM' . '-' .rand(),
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
    'order_id' => $ordersm->order,
    'gross_amount' => $ordersm->price,
),
'item_details' => array(
    array(
    'id' => $ordersm->id,
    'price' => $ordersm->price,
    'quantity' => 1,
    'name' =>  "Short Movie Competition",
    ),
),
'customer_details' => array(
    'first_name' => $ordersm->instansi . '-' . $ordersm->namateam,
    'email' => $request->email_1,
    'phone' => $request->nomorhp_1,
),
);

$snapToken = \Midtrans\Snap::getSnapToken($params); 
return view('matalomba/sm/checkout', compact('snapToken', 'ordersm'));
}
public function callback(Request $request){
    $serverKey = config('midtrans.server_key');
    $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
    if($hashed == $request->signature_key){
        if($request->transaction_status == 'capture'){
            $ordersm = ordersm::find ($request->order_id);
            $ordersm->update(['status' => 'Paid']);
        } elseif ($request->transaction_status == 'expire' || $request->transaction_status == 'deny') {
            return response()->json([
                'reload_page' => true
            ]);
        }
    }
}
public function homesm($id){
    $orderlkti = ordersm::find($id);
    $orderlkti->update(['status' => 'Paid']);
    $whatsappGroupUrl = "https://chat.whatsapp.com/BQFJQw63gC20FT4BkmbOBk"; 

    return redirect()->away($whatsappGroupUrl);
}

public function checkout1(Request $request){
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
        'npm_1' => 'required',
        'npm_2' => 'required',
        'npm_3' => 'required',
        'npm_4' => 'required',
        'npm_5' => 'required',
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
        'nomorhp_1'=> 'required|string',
        'nomorhp_2' => 'required|string',
        'nomorhp_3'=> 'required|string',
        'nomorhp_4' => 'required|string',
        'nomorhp_5'=> 'required|string',
        'namateam' => 'required|string|max:50',
        'ktm_1' => 'required|mimes:png,jpeg,jpg|max:3000',
        'ktm_2' => 'required|mimes:png,jpeg,jpg|max:3000',
        'ktm_3' => 'required|mimes:png,jpeg,jpg|max:3000',
        'ktm_4' => 'required|mimes:png,jpeg,jpg|max:3000',
        'ktm_5' => 'required|mimes:png,jpeg,jpg|max:3000',
        'foto_1' => 'required|mimes:png,jpeg,jpg|max:3000',
        'foto_2' => 'required|mimes:png,jpeg,jpg|max:3000',
        'foto_3' => 'required|mimes:png,jpeg,jpg|max:3000',
        'foto_4' => 'required|mimes:png,jpeg,jpg|max:3000',
        'foto_5' => 'required|mimes:png,jpeg,jpg|max:3000',
        'krs_1'=> 'required|mimes:png,jpeg,jpg|max:3000',
        'krs_2' => 'required|mimes:png,jpeg,jpg|max:3000',
        'krs_3'=> 'required|mimes:png,jpeg,jpg|max:3000',
        'krs_4' => 'required|mimes:png,jpeg,jpg|max:3000',
        'krs_5'=> 'required|mimes:png,jpeg,jpg|max:3000',
        'buktifollow_1' => 'required|mimes:pdf|max:3000',
        'buktifollow_2' => 'required|mimes:pdf|max:3000',
        'buktifollow_3' => 'required|mimes:pdf|max:3000',
        'buktifollow_4' => 'required|mimes:pdf|max:3000',
        'buktifollow_5' => 'required|mimes:pdf|max:3000',
        'twibbon_1' => 'required|mimes:png,jpeg,jpg|max:3000',
        'twibbon_2' => 'required|mimes:png,jpeg,jpg|max:3000',
        'twibbon_3' => 'required|mimes:png,jpeg,jpg|max:3000',
        'twibbon_4' => 'required|mimes:png,jpeg,jpg|max:3000',
        'twibbon_5' => 'required|mimes:png,jpeg,jpg|max:3000',
        'surat_delegasi' => 'required|mimes:pdf|max:3000',
        'bio' => 'required|mimes:pdf|max:3000',
    ]);     
    $ordersm = $request->all();
    if ($request->hasFile('ktm_1')) {
        $originalFileName = pathinfo($request->file('ktm_1')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('ktm_1')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/ktm_1';
        $request->file('ktm_1')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/ktm_1/' . $imageName);
        $ordersm['ktm_1'] = $imageUrl;
    }

    if ($request->hasFile('ktm_2')) {
        $originalFileName = pathinfo($request->file('ktm_2')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('ktm_2')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/ktm_2';
        $request->file('ktm_2')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/ktm_2/' . $imageName);
        $ordersm['ktm_2'] = $imageUrl;
    }

    if ($request->hasFile('ktm_3')) {
        $originalFileName = pathinfo($request->file('ktm_3')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('ktm_3')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/ktm_3';
        $request->file('ktm_3')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/ktm_3/' . $imageName);
        $ordersm['ktm_3'] = $imageUrl;
    }
    if ($request->hasFile('ktm_4')) {
        $originalFileName = pathinfo($request->file('ktm_4')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('ktm_4')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/ktm_4';
        $request->file('ktm_4')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/ktm_4/' . $imageName);
        $ordersm['ktm_4'] = $imageUrl;
    }
    if ($request->hasFile('ktm_5')) {
        $originalFileName = pathinfo($request->file('ktm_5')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('ktm_5')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/ktm_5';
        $request->file('ktm_5')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/ktm_5/' . $imageName);
        $ordersm['ktm_5'] = $imageUrl;
    }
    if ($request->hasFile('foto_1')) {
        $originalFileName = pathinfo($request->file('foto_1')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('foto_1')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/foto_1';
        $request->file('foto_1')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/foto_1/' . $imageName);
        $ordersm['foto_1'] = $imageUrl;
    }
    if ($request->hasFile('foto_2')) {
        $originalFileName = pathinfo($request->file('foto_2')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('foto_2')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/foto_2';
        $request->file('foto_2')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/foto_2/' . $imageName);
        $ordersm['foto_2'] = $imageUrl;
    }
    if ($request->hasFile('foto_3')) {
        $originalFileName = pathinfo($request->file('foto_3')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('foto_3')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/foto_3';
        $request->file('foto_3')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/foto_3/' . $imageName);
        $ordersm['foto_3'] = $imageUrl;
    }
    if ($request->hasFile('foto_4')) {
        $originalFileName = pathinfo($request->file('foto_4')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('foto_4')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/foto_4';
        $request->file('foto_4')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/foto_4/' . $imageName);
        $ordersm['foto_4'] = $imageUrl;
    }
    if ($request->hasFile('foto_5')) {
        $originalFileName = pathinfo($request->file('foto_5')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('foto_5')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/foto_5';
        $request->file('foto_5')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/foto_5/' . $imageName);
        $ordersm['foto_5'] = $imageUrl;
    }
    if ($request->hasFile('krs_1')) {
        $originalFileName = pathinfo($request->file('krs_1')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('krs_1')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/krs_1';
        $request->file('krs_1')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/krs_1/' . $imageName);
        $ordersm['krs_1'] = $imageUrl;
    }
    if ($request->hasFile('krs_2')) {
        $originalFileName = pathinfo($request->file('krs_2')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('krs_2')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/krs_2';
        $request->file('krs_2')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/krs_2/' . $imageName);
        $ordersm['krs_2'] = $imageUrl;
    }
    if ($request->hasFile('krs_3')) {
        $originalFileName = pathinfo($request->file('krs_3')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('krs_3')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/krs_3';
        $request->file('krs_3')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/krs_3/' . $imageName);
        $ordersm['krs_3'] = $imageUrl;
    }
    if ($request->hasFile('krs_4')) {
        $originalFileName = pathinfo($request->file('krs_4')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('krs_4')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/krs_4';
        $request->file('krs_4')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/krs_4/' . $imageName);
        $ordersm['krs_4'] = $imageUrl;
    }
    if ($request->hasFile('krs_5')) {
        $originalFileName = pathinfo($request->file('krs_5')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('krs_5')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/krs_5';
        $request->file('krs_5')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/krs_5/' . $imageName);
        $ordersm['krs_5'] = $imageUrl;
    }
    if ($request->hasFile('buktifollow_1')) {
        $originalFileName = pathinfo($request->file('buktifollow_1')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('buktifollow_1')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/document/sm/buktifollow_1';
        $request->file('buktifollow_1')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/document/sm/buktifollow_1/' . $imageName);
        $ordersm['buktifollow_1'] = $imageUrl;
    }
    if ($request->hasFile('buktifollow_2')) {
        $originalFileName = pathinfo($request->file('buktifollow_2')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('buktifollow_2')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/document/sm/buktifollow_2';
        $request->file('buktifollow_2')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/document/sm/buktifollow_2/' . $imageName);
        $ordersm['buktifollow_2'] = $imageUrl;
    }
    if ($request->hasFile('buktifollow_3')) {
        $originalFileName = pathinfo($request->file('buktifollow_3')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('buktifollow_3')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/document/sm/buktifollow_3';
        $request->file('buktifollow_3')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/document/sm/buktifollow_3/' . $imageName);
        $ordersm['buktifollow_3'] = $imageUrl;
    }
    if ($request->hasFile('buktifollow_4')) {
        $originalFileName = pathinfo($request->file('buktifollow_4')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('buktifollow_4')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/document/sm/buktifollow_4';
        $request->file('buktifollow_4')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/document/sm/buktifollow_4/' . $imageName);
        $ordersm['buktifollow_4'] = $imageUrl;
    }
    if ($request->hasFile('buktifollow_5')) {
        $originalFileName = pathinfo($request->file('buktifollow_5')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('buktifollow_5')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/document/sm/buktifollow_5';
        $request->file('buktifollow_5')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/document/sm/buktifollow_5/' . $imageName);
        $ordersm['buktifollow_5'] = $imageUrl;
    }
    if ($request->hasFile('twibbon_1')) {
        $originalFileName = pathinfo($request->file('twibbon_1')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('twibbon_1')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/twibbon_1';
        $request->file('twibbon_1')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/twibbon_1/' . $imageName);
        $ordersm['twibbon_1'] = $imageUrl;
    }
    if ($request->hasFile('twibbon_2')) {
        $originalFileName = pathinfo($request->file('twibbon_2')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('twibbon_2')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/twibbon_2';
        $request->file('twibbon_2')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/twibbon_2/' . $imageName);
        $ordersm['twibbon_2'] = $imageUrl;
    }
    if ($request->hasFile('twibbon_3')) {
        $originalFileName = pathinfo($request->file('twibbon_3')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('twibbon_3')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/twibbon_3';
        $request->file('twibbon_3')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/twibbon_3/' . $imageName);
        $ordersm['twibbon_3'] = $imageUrl;
    }
    if ($request->hasFile('twibbon_4')) {
        $originalFileName = pathinfo($request->file('twibbon_4')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('twibbon_4')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/twibbon_4';
        $request->file('twibbon_4')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/twibbon_4/' . $imageName);
        $ordersm['twibbon_4'] = $imageUrl;
    }
    if ($request->hasFile('twibbon_5')) {
        $originalFileName = pathinfo($request->file('twibbon_5')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('twibbon_5')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/twibbon_5';
        $request->file('twibbon_5')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/twibbon_5/' . $imageName);
        $ordersm['twibbon_5'] = $imageUrl;
    }
    if ($request->hasFile('surat_delegasi')) {
        $originalFileName = pathinfo($request->file('surat_delegasi')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('surat_delegasi')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/surat_delegasi';
        $request->file('surat_delegasi')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/surat_delegasi/' . $imageName);
        $ordersm['surat_delegasi'] = $imageUrl;
    }
    if ($request->hasFile('bio')) {
        $originalFileName = pathinfo($request->file('bio')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('bio')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/sm/bio';
        $request->file('bio')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/sm/bio/' . $imageName);
        $ordersm['bio'] = $imageUrl;
    }

    $now = Carbon::now('Asia/Jakarta');
    if ($now->between('2024-07-23', '2024-07-28')) {
        $price = 300000; 
    } elseif ($now->between('2024-07-29', '2024-08-11')) {
        $price = 400000; 
    } elseif ($now->between('2024-08-12', '2024-08-23')) {
        $price = 450000; 
    } else {
        $price = 9999999; 
    }
     $additionalData = [
    'price' => $price,
    'instansi' => 'Universitas Nasional',
    'status' => 'Unpaid',
    'order' => 'SM' . '-' .rand(),
    'kompetisi' => 'ShortMovie Competition',
];

$ordersm = array_merge($ordersm, $additionalData);
$ordersm = ordersm::create($ordersm);


return view('matalomba/sm/checkoutunas', compact('ordersm'));
}
public function homesm1($id){
    $orderlkti = ordersm::find($id);
    $orderlkti->update(['status' => 'Khusus']);
    $whatsappGroupUrl = "https://chat.whatsapp.com/BQFJQw63gC20FT4BkmbOBk"; 

    return redirect()->away($whatsappGroupUrl);
}
}
