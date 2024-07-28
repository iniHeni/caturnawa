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
            'nama' => 'required|string',
            'email' => 'required|email',
            'fakultas' => 'required|string',
            'prodi' => 'required|string',
            'npm' => 'required|string',
            'jeniskelamin' => 'required',
            'alamatlengkap' => 'required|string',
            'nomorhp' => 'required',
            'instansi' => 'required|string',
            'ktm' => 'required|mimes:png,jpeg,jpg|max:3000',
            'foto' => 'required|mimes:png,jpeg,jpg|max:3000',
            'krs' => 'required|mimes:png,jpeg,jpg|max:3000',
            'buktifollow' => 'required|mimes:pdf|max:3000',
            'twibbon' => 'required|mimes:png,jpeg,jpg|max:3000',
            'surat_delegasi' => 'required|mimes:pdf|max:3000',
            'nama_kegiatan' => 'required|string',
            'jenis_kegiatan' => 'required',
            'baru' => 'required',
            'tingkat_kegiatan' => 'required',
            'nama_kegiatan1' => 'nullable|string',
            'jenis_kegiatan1' => 'nullable',
            'tingkat_kegiatan1' => 'nullable',
            'nama_kegiatan2' => 'nullable|string',
            'jenis_kegiatan2' => 'nullable',
            'tingkat_kegiatan2' => 'nullable',
            'nama_kegiatan3' => 'nullable|string',
            'jenis_kegiatan3' => 'nullable',
            'tingkat_kegiatan3' => 'nullable',
            'nama_kegiatan4' => 'nullable|string',
            'jenis_kegiatan4' => 'nullable',
            'tingkat_kegiatan4' => 'nullable',
            'nama_kegiatan5' => 'nullable|string',
            'jenis_kegiatan5' => 'nullable',
            'tingkat_kegiatan5' => 'nullable',
            'nama_kegiatan6' => 'nullable|string',
            'jenis_kegiatan6' => 'nullable',
            'tingkat_kegiatan6' => 'nullable',
            'nama_kegiatan7' => 'nullable|string',
            'jenis_kegiatan7' => 'nullable',
            'tingkat_kegiatan7' => 'nullable',
            'nama_kegiatan8' => 'nullable|string',
            'jenis_kegiatan8' => 'nullable',
            'tingkat_kegiatan8' => 'nullable',
            'nama_kegiatan9' => 'nullable|string',
            'jenis_kegiatan9' => 'nullable',
            'tingkat_kegiatan9' => 'nullable',
            'sertifikat' => 'required|mimes:pdf|max:3000',
            'sertifikat1' => 'nullable|mimes:pdf|max:3000',
            'sertifikat2' => 'nullable|mimes:pdf|max:3000',
            'sertifikat3' => 'nullable|mimes:pdf|max:3000',
            'sertifikat4' => 'nullable|mimes:pdf|max:3000',
            'sertifikat5' => 'nullable|mimes:pdf|max:3000',
            'sertifikat6' => 'nullable|mimes:pdf|max:3000',
            'sertifikat7' => 'nullable|mimes:pdf|max:3000',
            'sertifikat8' => 'nullable|mimes:pdf|max:3000',
            'sertifikat9' => 'nullable|mimes:pdf|max:3000',
            'baru1' => 'nullable',
            'baru2' => 'nullable',
            'baru3' => 'nullable',
            'baru4' => 'nullable',
            'baru5' => 'nullable',
            'baru6' => 'nullable',
            'baru7' => 'nullable',
            'baru8' => 'nullable',
            'baru9' => 'nullable',
            
        ]); 
        $orderlkti = $request->all();
        if ($request->hasFile('ktm')) {
            $originalFileName = pathinfo($request->file('ktm')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('ktm')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/lkti/ktm';
            $request->file('ktm')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/lkti/ktm/' . $imageName);
            $orderlkti['ktm'] = $imageUrl;
        }
        if ($request->hasFile('foto')) {
            $originalFileName = pathinfo($request->file('foto')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('foto')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/lkti/foto';
            $request->file('foto')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/lkti/foto/' . $imageName);
            $orderlkti['foto'] = $imageUrl;
        }
        if ($request->hasFile('krs')) {
            $originalFileName = pathinfo($request->file('krs')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('krs')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/lkti/krs';
            $request->file('krs')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/lkti/krs/' . $imageName);
            $orderlkti['krs'] = $imageUrl;
        }
        if ($request->hasFile('buktifollow')) {
            $originalFileName = pathinfo($request->file('buktifollow')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('buktifollow')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/lkti/bukti';
            $request->file('buktifollow')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/lkti/bukti/' . $imageName);
            $orderlkti['buktifollow'] = $imageUrl;
        }
        if ($request->hasFile('twibbon')) {
            $originalFileName = pathinfo($request->file('twibbon')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('twibbon')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/lkti/twibbon';
            $request->file('twibbon')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/lkti/twibbon/' . $imageName);
            $orderlkti['twibbon'] = $imageUrl;
        }
        if ($request->hasFile('surat_delegasi')) {
            $originalFileName = pathinfo($request->file('surat_delegasi')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
            $extension = $request->file('surat_delegasi')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/lkti/surat_delegasi';
            $request->file('surat_delegasi')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/lkti/surat_delegasi/' . $imageName);
            $orderlkti['surat_delegasi'] = $imageUrl;
        }
        if ($request->hasFile('sertifikat')) {
            $originalFileName = pathinfo($request->file('sertifikat')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
            $extension = $request->file('sertifikat')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/lkti/sertifikat';
            $request->file('sertifikat')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/lkti/sertifikat/' . $imageName);
            $orderlkti['sertifikat'] = $imageUrl;
        }
        if ($request->hasFile('sertifikat1')) {
            $originalFileName = pathinfo($request->file('sertifikat1')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
            $extension = $request->file('sertifikat1')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/lkti/sertifikat1';
            $request->file('sertifikat1')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/lkti/sertifikat1/' . $imageName);
            $orderlkti['sertifikat1'] = $imageUrl;
        }else {
           
            $orderlkti['sertifikat1'] = null;
        }
        if ($request->hasFile('sertifikat2')) {
            $originalFileName = pathinfo($request->file('sertifikat2')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
            $extension = $request->file('sertifikat2')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/lkti/sertifikat2';
            $request->file('sertifikat2')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/lkti/sertifikat2/' . $imageName);
            $orderlkti['sertifikat2'] = $imageUrl;
        }else {
            
            $orderlkti['sertifikat2'] = null; 
        }
        if ($request->hasFile('sertifikat3')) {
            $originalFileName = pathinfo($request->file('sertifikat3')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
            $extension = $request->file('sertifikat3')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/lkti/sertifikat3';
            $request->file('sertifikat3')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/lkti/sertifikat3/' . $imageName);
            $orderlkti['sertifikat3'] = $imageUrl;
        }else {
          
            $orderlkti['sertifikat3'] = null;
        }
        if ($request->hasFile('sertifikat4')) {
            $originalFileName = pathinfo($request->file('sertifikat4')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
            $extension = $request->file('sertifikat4')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/lkti/sertifikat4';
            $request->file('sertifikat4')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/lkti/sertifikat4/' . $imageName);
            $orderlkti['sertifikat4'] = $imageUrl;
        }else {
           
            $orderlkti['sertifikat4'] = null;
        }
        if ($request->hasFile('sertifikat5')) {
            $originalFileName = pathinfo($request->file('sertifikat5')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
            $extension = $request->file('sertifikat5')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/lkti/sertifikat5';
            $request->file('sertifikat5')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/lkti/sertifikat5/' . $imageName);
            $orderlkti['sertifikat5'] = $imageUrl;
        }else {
           
            $orderlkti['sertifikat5'] = null; 
        }
        if ($request->hasFile('sertifikat6')) {
            $originalFileName = pathinfo($request->file('sertifikat6')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
            $extension = $request->file('sertifikat6')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/lkti/sertifikat6';
            $request->file('sertifikat6')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/lkti/sertifikat6/' . $imageName);
            $orderlkti['sertifikat6'] = $imageUrl;
        }else {
            
            $orderlkti['sertifikat6'] = null; 
        }
        if ($request->hasFile('sertifikat7')) {
            $originalFileName = pathinfo($request->file('sertifikat7')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
            $extension = $request->file('sertifikat7')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/lkti/sertifikat7';
            $request->file('sertifikat7')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/lkti/sertifikat7/' . $imageName);
            $orderlkti['sertifikat7'] = $imageUrl;
        }else {
            
            $orderlkti['sertifikat7'] = null; 
        }
        if ($request->hasFile('sertifikat8')) {
            $originalFileName = pathinfo($request->file('sertifikat8')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
            $extension = $request->file('sertifikat8')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/lkti/sertifikat8';
            $request->file('sertifikat8')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/lkti/sertifikat8/' . $imageName);
            $orderlkti['sertifikat8'] = $imageUrl;
        }else {
            
            $orderlkti['sertifikat8'] = null; 
        }
        if ($request->hasFile('sertifikat9')) {
            $originalFileName = pathinfo($request->file('sertifikat9')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
            $extension = $request->file('sertifikat9')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/lkti/sertifikat9';
            $request->file('sertifikat9')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/lkti/sertifikat9/' . $imageName);
            $orderlkti['sertifikat9'] = $imageUrl;
        }else {
            
            $orderlkti['sertifikat9'] = null; 
        }

        $now = Carbon::now('Asia/Jakarta');

        if ($now->between('2024-07-23', '2024-08-11')) {
                $price = 170000; 
            } elseif ($now->between('2024-08-12', '2024-08-23')) {
                $price = 200000; 
            }else {
                $price = 9999999; 
            }
         $additionalData = [
        'price' => $price,
        'status' => 'Unpaid',
        'order' =>  'LKTI' . '-' . rand(),
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
    'order_id' => $orderlkti->order,
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
        if($request->transaction_status == 'capture'){
            $orderlkti = orderlkti::find ($request->order_id);
            $orderlkti->update(['status' => 'Paid']);
        } elseif ($request->transaction_status == 'expire' || $request->transaction_status == 'deny') {
            return response()->json([
                'reload_page' => true
            ]);
        }
    }
}
public function homespc($id){
    $orderlkti = orderlkti::find($id);
    $orderlkti->update(['status' => 'Paid']);
    $whatsappGroupUrl = "https://chat.whatsapp.com/BK3iznWJNxt0UJHA66pAFL"; 

    return redirect()->away($whatsappGroupUrl);
}
public function checkout1(Request $request){
    $orderlkti = $request->validate([
        'nama' => 'required|string',
        'email' => 'required|email',
        'fakultas' => 'required|string',
        'prodi' => 'required|string',
        'npm' => 'required|string',
        'jeniskelamin' => 'required',
        'alamatlengkap' => 'required|string',
        'nomorhp' => 'required',
        'ktm' => 'required|mimes:png,jpeg,jpg|max:3000',
        'foto' => 'required|mimes:png,jpeg,jpg|max:3000',
        'krs' => 'required|mimes:png,jpeg,jpg|max:3000',
        'buktifollow' => 'required|mimes:pdf|max:3000',
        'twibbon' => 'required|mimes:png,jpeg,jpg|max:3000',
        'surat_delegasi' => 'required|mimes:pdf|max:3000',
        'nama_kegiatan' => 'required|string',
        'jenis_kegiatan' => 'required',
        'baru' => 'required',
        'tingkat_kegiatan' => 'required',
        'nama_kegiatan1' => 'nullable|string',
        'jenis_kegiatan1' => 'nullable',
        'tingkat_kegiatan1' => 'nullable',
        'nama_kegiatan2' => 'nullable|string',
        'jenis_kegiatan2' => 'nullable',
        'tingkat_kegiatan2' => 'nullable',
        'nama_kegiatan3' => 'nullable|string',
        'jenis_kegiatan3' => 'nullable',
        'tingkat_kegiatan3' => 'nullable',
        'nama_kegiatan4' => 'nullable|string',
        'jenis_kegiatan4' => 'nullable',
        'tingkat_kegiatan4' => 'nullable',
        'nama_kegiatan5' => 'nullable|string',
        'jenis_kegiatan5' => 'nullable',
        'tingkat_kegiatan5' => 'nullable',
        'nama_kegiatan6' => 'nullable|string',
        'jenis_kegiatan6' => 'nullable',
        'tingkat_kegiatan6' => 'nullable',
        'nama_kegiatan7' => 'nullable|string',
        'jenis_kegiatan7' => 'nullable',
        'tingkat_kegiatan7' => 'nullable',
        'nama_kegiatan8' => 'nullable|string',
        'jenis_kegiatan8' => 'nullable',
        'tingkat_kegiatan8' => 'nullable',
        'nama_kegiatan9' => 'nullable|string',
        'jenis_kegiatan9' => 'nullable',
        'tingkat_kegiatan9' => 'nullable',
        'sertifikat' => 'required|mimes:pdf|max:3000',
        'sertifikat1' => 'nullable|mimes:pdf|max:3000',
        'sertifikat2' => 'nullable|mimes:pdf|max:3000',
        'sertifikat3' => 'nullable|mimes:pdf|max:3000',
        'sertifikat4' => 'nullable|mimes:pdf|max:3000',
        'sertifikat5' => 'nullable|mimes:pdf|max:3000',
        'sertifikat6' => 'nullable|mimes:pdf|max:3000',
        'sertifikat7' => 'nullable|mimes:pdf|max:3000',
        'sertifikat8' => 'nullable|mimes:pdf|max:3000',
        'sertifikat9' => 'nullable|mimes:pdf|max:3000',
        'baru1' => 'nullable',
        'baru2' => 'nullable',
        'baru3' => 'nullable',
        'baru4' => 'nullable',
        'baru5' => 'nullable',
        'baru6' => 'nullable',
        'baru7' => 'nullable',
        'baru8' => 'nullable',
        'baru9' => 'nullable',
        
    ]); 
    $orderlkti = $request->all();
    if ($request->hasFile('ktm')) {
        $originalFileName = pathinfo($request->file('ktm')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('ktm')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/lkti/ktm';
        $request->file('ktm')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/lkti/ktm/' . $imageName);
        $orderlkti['ktm'] = $imageUrl;
    }
    if ($request->hasFile('foto')) {
        $originalFileName = pathinfo($request->file('foto')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('foto')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/lkti/foto';
        $request->file('foto')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/lkti/foto/' . $imageName);
        $orderlkti['foto'] = $imageUrl;
    }
    if ($request->hasFile('krs')) {
        $originalFileName = pathinfo($request->file('krs')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('krs')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/lkti/krs';
        $request->file('krs')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/lkti/krs/' . $imageName);
        $orderlkti['krs'] = $imageUrl;
    }
    if ($request->hasFile('buktifollow')) {
        $originalFileName = pathinfo($request->file('buktifollow')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('buktifollow')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/document/lkti/bukti';
        $request->file('buktifollow')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/document/lkti/bukti/' . $imageName);
        $orderlkti['buktifollow'] = $imageUrl;
    }
    if ($request->hasFile('twibbon')) {
        $originalFileName = pathinfo($request->file('twibbon')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('twibbon')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/lkti/twibbon';
        $request->file('twibbon')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/lkti/twibbon/' . $imageName);
        $orderlkti['twibbon'] = $imageUrl;
    }
    if ($request->hasFile('surat_delegasi')) {
        $originalFileName = pathinfo($request->file('surat_delegasi')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
        $extension = $request->file('surat_delegasi')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/document/lkti/surat_delegasi';
        $request->file('surat_delegasi')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/document/lkti/surat_delegasi/' . $imageName);
        $orderlkti['surat_delegasi'] = $imageUrl;
    }
    if ($request->hasFile('sertifikat')) {
        $originalFileName = pathinfo($request->file('sertifikat')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
        $extension = $request->file('sertifikat')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/document/lkti/sertifikat';
        $request->file('sertifikat')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/document/lkti/sertifikat/' . $imageName);
        $orderlkti['sertifikat'] = $imageUrl;
    }
    if ($request->hasFile('sertifikat1')) {
        $originalFileName = pathinfo($request->file('sertifikat1')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
        $extension = $request->file('sertifikat1')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/document/lkti/sertifikat1';
        $request->file('sertifikat1')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/document/lkti/sertifikat1/' . $imageName);
        $orderlkti['sertifikat1'] = $imageUrl;
    }else {
       
        $orderlkti['sertifikat1'] = null;
    }
    if ($request->hasFile('sertifikat2')) {
        $originalFileName = pathinfo($request->file('sertifikat2')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
        $extension = $request->file('sertifikat2')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/document/lkti/sertifikat2';
        $request->file('sertifikat2')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/document/lkti/sertifikat2/' . $imageName);
        $orderlkti['sertifikat2'] = $imageUrl;
    }else {
        
        $orderlkti['sertifikat2'] = null; 
    }
    if ($request->hasFile('sertifikat3')) {
        $originalFileName = pathinfo($request->file('sertifikat3')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
        $extension = $request->file('sertifikat3')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/document/lkti/sertifikat3';
        $request->file('sertifikat3')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/document/lkti/sertifikat3/' . $imageName);
        $orderlkti['sertifikat3'] = $imageUrl;
    }else {
      
        $orderlkti['sertifikat3'] = null;
    }
    if ($request->hasFile('sertifikat4')) {
        $originalFileName = pathinfo($request->file('sertifikat4')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
        $extension = $request->file('sertifikat4')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/document/lkti/sertifikat4';
        $request->file('sertifikat4')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/document/lkti/sertifikat4/' . $imageName);
        $orderlkti['sertifikat4'] = $imageUrl;
    }else {
       
        $orderlkti['sertifikat4'] = null;
    }
    if ($request->hasFile('sertifikat5')) {
        $originalFileName = pathinfo($request->file('sertifikat5')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
        $extension = $request->file('sertifikat5')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/document/lkti/sertifikat5';
        $request->file('sertifikat5')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/document/lkti/sertifikat5/' . $imageName);
        $orderlkti['sertifikat5'] = $imageUrl;
    }else {
       
        $orderlkti['sertifikat5'] = null; 
    }
    if ($request->hasFile('sertifikat6')) {
        $originalFileName = pathinfo($request->file('sertifikat6')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
        $extension = $request->file('sertifikat6')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/document/lkti/sertifikat6';
        $request->file('sertifikat6')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/document/lkti/sertifikat6/' . $imageName);
        $orderlkti['sertifikat6'] = $imageUrl;
    }else {
        
        $orderlkti['sertifikat6'] = null; 
    }
    if ($request->hasFile('sertifikat7')) {
        $originalFileName = pathinfo($request->file('sertifikat7')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
        $extension = $request->file('sertifikat7')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/document/lkti/sertifikat7';
        $request->file('sertifikat7')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/document/lkti/sertifikat7/' . $imageName);
        $orderlkti['sertifikat7'] = $imageUrl;
    }else {
        
        $orderlkti['sertifikat7'] = null; 
    }
    if ($request->hasFile('sertifikat8')) {
        $originalFileName = pathinfo($request->file('sertifikat8')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
        $extension = $request->file('sertifikat8')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/document/lkti/sertifikat8';
        $request->file('sertifikat8')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/document/lkti/sertifikat8/' . $imageName);
        $orderlkti['sertifikat8'] = $imageUrl;
    }else {
        
        $orderlkti['sertifikat8'] = null; 
    }
    if ($request->hasFile('sertifikat9')) {
        $originalFileName = pathinfo($request->file('sertifikat9')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
        $extension = $request->file('sertifikat9')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/document/lkti/sertifikat9';
        $request->file('sertifikat9')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/document/lkti/sertifikat9/' . $imageName);
        $orderlkti['sertifikat9'] = $imageUrl;
    }else {
        
        $orderlkti['sertifikat9'] = null; 
    }

    $now = Carbon::now('Asia/Jakarta');

    if ($now->between('2024-07-23', '2024-08-11')) {
            $price = 170000; 
        } elseif ($now->between('2024-08-12', '2024-08-23')) {
            $price = 200000; 
        }else {
            $price = 9999999; 
        }
     $additionalData = [
    'instansi' => 'Universitas Nasional',
    'price' => $price,
    'status' => 'Unpaid',
    'order' =>  'LKTI' . '-' . rand(),
    'kompetisi' => 'Scientific Paper',
];

$orderlkti = array_merge($orderlkti, $additionalData);
$orderlkti = orderlkti::create($orderlkti);

return view('matalomba/lkti/checkoutunas', compact('orderlkti'));
}
public function homespc1($id){
    $orderlkti = orderlkti::find($id);
    $orderlkti->update(['status' => 'Khusus']);
    $whatsappGroupUrl = "https://chat.whatsapp.com/BK3iznWJNxt0UJHA66pAFL"; 
    return redirect()->away($whatsappGroupUrl);
}

}

