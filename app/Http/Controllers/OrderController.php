<?php

namespace App\Http\Controllers;


use App\Models\Order;
use App\Models\ordersm;
use App\Models\orderlkti;
use App\Models\orderkdbi;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class OrderController extends Controller
{
    public function checkout(Request $request){
        $order = $request->validate([
            'nama_1' => 'required|string',
            'nama_2' => 'required|string',
            'email_1' => 'required|email',
            'email_2' => 'required|email',
            'fakultas_1'=> 'required|string',
            'fakultas_2' => 'required|string',
            'prodi_1' =>'required|string',
            'prodi_2' => 'required|string',
            'npm_1' => 'required|string',
            'npm_2' => 'required|string',
            'jeniskelamin_1' => 'required',
            'jeniskelamin_2' => 'required',
            'alamatlengkap_1' => 'required',
            'alamatlengkap_2' => 'required',
            'nomorhp_1'=> 'required',
            'nomorhp_2' => 'required',
            'namateam' => 'required',
            'instansi' => 'required|string',
            'ktm_1' => 'required|mimes:png,jpeg,jpg|max:3000',
            'ktm_2' => 'required|mimes:png,jpeg,jpg|max:3000',
            'foto_1' => 'required|mimes:png,jpeg,jpg|max:3000',
            'foto_2' => 'required|mimes:png,jpeg,jpg|max:3000',
            'krs_1'=> 'required|mimes:png,jpeg,jpg|max:3000',
            'krs_2' => 'required|mimes:png,jpeg,jpg|max:3000',
            'buktifollow_1' => 'required|mimes:pdf|max:3000',
            'buktifollow_2' => 'required|mimes:pdf|max:3000',
            'twibbon' => 'required|mimes:png,jpeg,jpg|max:3000',
            'twibbon2' => 'required|mimes:png,jpeg,jpg|max:3000',
            'surat_delegasi' => 'required|mimes:pdf|max:3000',
        ]);     
        $order = $request->all();
        if ($request->hasFile('ktm_1')) {
            $originalFileName = pathinfo($request->file('ktm_1')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('ktm_1')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/images/edc/ktm_1';
            $request->file('ktm_1')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/edc/ktm_1/' . $imageName);
            $order['ktm_1'] = $imageUrl;
        }
        if ($request->hasFile('ktm_2')) {
            $originalFileName = pathinfo($request->file('ktm_2')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('ktm_2')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/images/edc/ktm_2';
            $request->file('ktm_2')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/edc/ktm_2/' . $imageName);
            $order['ktm_2'] = $imageUrl;
        }
        if ($request->hasFile('foto_1')) {
            $originalFileName = pathinfo($request->file('foto_1')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('foto_1')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/images/edc/foto_1';
            $request->file('foto_1')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/edc/foto_1/' . $imageName);
            $order['foto_1'] = $imageUrl;
        }
        if ($request->hasFile('foto_2')) {
            $originalFileName = pathinfo($request->file('foto_2')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('foto_2')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/images/edc/foto_2';
            $request->file('foto_2')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/edc/foto_2/' . $imageName);
            $order['foto_2'] = $imageUrl;
        }
        if ($request->hasFile('krs_1')) {
            $originalFileName = pathinfo($request->file('krs_1')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('krs_1')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/images/edc/krs_1';
            $request->file('krs_1')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/edc/krs_1/' . $imageName);
            $order['krs_1'] = $imageUrl;
        }
        if ($request->hasFile('krs_2')) {
            $originalFileName = pathinfo($request->file('krs_2')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('krs_2')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/images/edc/krs_2';
            $request->file('krs_2')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/edc/krs_2/' . $imageName);
            $order['krs_2'] = $imageUrl;
        }
        if ($request->hasFile('buktifollow_1')) {
            $originalFileName = pathinfo($request->file('buktifollow_1')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('buktifollow_1')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/document/edc/buktifollow_1';
            $request->file('buktifollow_1')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/edc/buktifollow_1/' . $imageName);
            $order['buktifollow_1'] = $imageUrl;
        }
        if ($request->hasFile('buktifollow_2')) {
            $originalFileName = pathinfo($request->file('buktifollow_2')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('buktifollow_2')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/document/edc/buktifollow_2';
            $request->file('buktifollow_2')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/edc/buktifollow_2/' . $imageName);
            $order['buktifollow_2'] = $imageUrl;
        }
        if ($request->hasFile('twibbon')) {
            $originalFileName = pathinfo($request->file('twibbon')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('twibbon')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/images/edc/twibbon';
            $request->file('twibbon')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/edc/twibbon/' . $imageName);
            $order['twibbon'] = $imageUrl;
        }
        if ($request->hasFile('twibbon2')) {
            $originalFileName = pathinfo($request->file('twibbon2')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('twibbon2')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/images/edc/twibbon2';
            $request->file('twibbon2')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/edc/twibbon2/' . $imageName);
            $order['twibbon2'] = $imageUrl;
        }
        if ($request->hasFile('surat_delegasi')) {
            $originalFileName = pathinfo($request->file('surat_delegasi')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
            $extension = $request->file('surat_delegasi')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/document/edc/surat_delegasi';
            $request->file('surat_delegasi')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/edc/surat_delegasi/' . $imageName);
            $order['surat_delegasi'] = $imageUrl;
        }

        $now = Carbon::now('Asia/Jakarta');

        if ($now->between('2024-07-23', '2024-07-28')) {
            $price = 350000; 
        } elseif ($now->between('2024-07-29', '2024-08-11')) {
            $price = 500000; 
        } elseif ($now->between('2024-08-12', '2024-08-23')) {
            $price = 550000; 
        } else {
            $price = 9999999; // Default or registration closed
        }
         $additionalData = [
        'price' => $price,
        'status' => 'Unpaid',
        'order' => 'EDC' . '-' . rand(),
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
    public function callback(Request $request, $type){
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture'){
                $order = Order::find ($request->order_id);
                $order->update(['status' => 'Paid']);
            } elseif ($request->transaction_status == 'expire' || $request->transaction_status == 'deny') {
                return response()->json([
                    'reload_page' => true
                ]);
            }
        }
    }

    public function homeedc($id){
        $orderlkti = Order::find($id);
        $orderlkti->update(['status' => 'Paid']);
        $whatsappGroupUrl = "https://chat.whatsapp.com/CbPvKbhyirI5Pi8mlekEnl"; 

    return redirect()->away($whatsappGroupUrl);
    }

    public function checkout1(Request $request){
        $order = $request->validate([
            'nama_1' => 'required|string',
            'nama_2' => 'required|string',
            'email_1' => 'required|email',
            'email_2' => 'required|email',
            'fakultas_1'=> 'required|string',
            'fakultas_2' => 'required|string',
            'prodi_1' =>'required|string',
            'prodi_2' => 'required|string',
            'npm_1' => 'required|string',
            'npm_2' => 'required|string',
            'jeniskelamin_1' => 'required',
            'jeniskelamin_2' => 'required',
            'alamatlengkap_1' => 'required',
            'alamatlengkap_2' => 'required',
            'nomorhp_1'=> 'required',
            'nomorhp_2' => 'required',
            'namateam' => 'required',
            'ktm_1' => 'required|mimes:png,jpeg,jpg|max:3000',
            'ktm_2' => 'required|mimes:png,jpeg,jpg|max:3000',
            'foto_1' => 'required|mimes:png,jpeg,jpg|max:3000',
            'foto_2' => 'required|mimes:png,jpeg,jpg|max:3000',
            'krs_1'=> 'required|mimes:png,jpeg,jpg|max:3000',
            'krs_2' => 'required|mimes:png,jpeg,jpg|max:3000',
            'buktifollow_1' => 'required|mimes:pdf|max:3000',
            'buktifollow_2' => 'required|mimes:pdf|max:3000',
            'twibbon' => 'required|mimes:png,jpeg,jpg|max:3000',
            'twibbon2' => 'required|mimes:png,jpeg,jpg|max:3000',
            'surat_delegasi' => 'required|mimes:pdf|max:3000',
        ]);     
        $order = $request->all();
        if ($request->hasFile('ktm_1')) {
            $originalFileName = pathinfo($request->file('ktm_1')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('ktm_1')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/images/edc/ktm_1';
            $request->file('ktm_1')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/edc/ktm_1/' . $imageName);
            $order['ktm_1'] = $imageUrl;
        }
        if ($request->hasFile('ktm_2')) {
            $originalFileName = pathinfo($request->file('ktm_2')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('ktm_2')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/images/edc/ktm_2';
            $request->file('ktm_2')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/edc/ktm_2/' . $imageName);
            $order['ktm_2'] = $imageUrl;
        }
        if ($request->hasFile('foto_1')) {
            $originalFileName = pathinfo($request->file('foto_1')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('foto_1')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/images/edc/foto_1';
            $request->file('foto_1')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/edc/foto_1/' . $imageName);
            $order['foto_1'] = $imageUrl;
        }
        if ($request->hasFile('foto_2')) {
            $originalFileName = pathinfo($request->file('foto_2')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('foto_2')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/images/edc/foto_2';
            $request->file('foto_2')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/edc/foto_2/' . $imageName);
            $order['foto_2'] = $imageUrl;
        }
        if ($request->hasFile('krs_1')) {
            $originalFileName = pathinfo($request->file('krs_1')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('krs_1')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/images/edc/krs_1';
            $request->file('krs_1')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/edc/krs_1/' . $imageName);
            $order['krs_1'] = $imageUrl;
        }
        if ($request->hasFile('krs_2')) {
            $originalFileName = pathinfo($request->file('krs_2')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('krs_2')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/images/edc/krs_2';
            $request->file('krs_2')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/edc/krs_2/' . $imageName);
            $order['krs_2'] = $imageUrl;
        }
        if ($request->hasFile('buktifollow_1')) {
            $originalFileName = pathinfo($request->file('buktifollow_1')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('buktifollow_1')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/document/edc/buktifollow_1';
            $request->file('buktifollow_1')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/edc/buktifollow_1/' . $imageName);
            $order['buktifollow_1'] = $imageUrl;
        }
        if ($request->hasFile('buktifollow_2')) {
            $originalFileName = pathinfo($request->file('buktifollow_2')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('buktifollow_2')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/document/edc/buktifollow_2';
            $request->file('buktifollow_2')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/edc/buktifollow_2/' . $imageName);
            $order['buktifollow_2'] = $imageUrl;
        }
        if ($request->hasFile('twibbon')) {
            $originalFileName = pathinfo($request->file('twibbon')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('twibbon')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/images/edc/twibbon';
            $request->file('twibbon')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/edc/twibbon/' . $imageName);
            $order['twibbon'] = $imageUrl;
        }
        if ($request->hasFile('twibbon2')) {
            $originalFileName = pathinfo($request->file('twibbon2')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('twibbon2')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/images/edc/twibbon2';
            $request->file('twibbon2')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/edc/twibbon2/' . $imageName);
            $order['twibbon2'] = $imageUrl;
        }
        if ($request->hasFile('surat_delegasi')) {
            $originalFileName = pathinfo($request->file('surat_delegasi')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName); 
            $extension = $request->file('surat_delegasi')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/document/edc/surat_delegasi';
            $request->file('surat_delegasi')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/edc/surat_delegasi/' . $imageName);
            $order['surat_delegasi'] = $imageUrl;
        }

        $now = Carbon::now('Asia/Jakarta');

        if ($now->between('2024-07-23', '2024-07-28')) {
            $price = 350000; 
        } elseif ($now->between('2024-07-29', '2024-08-11')) {
            $price = 500000; 
        } elseif ($now->between('2024-08-12', '2024-08-23')) {
            $price = 550000; 
        } else {
            $price = 9999999; // Default or registration closed
        }
         $additionalData = [
        'price' => $price,
        'instansi' => 'Universitas Nasional',
        'status' => 'Unpaid',
        'order' => 'EDC' . '-' . rand(),
        'kompetisi' => 'English Debate Competition',
    ];

    $order = array_merge($order, $additionalData);
    $order = Order::create($order);

return view('matalomba/edc/unascheckout', compact('order'));
    }
    public function homeedc1($id){
        $orderlkti = Order::find($id);
        $orderlkti->update(['status' => 'Khusus']);
        $whatsappGroupUrl = "https://chat.whatsapp.com/CbPvKbhyirI5Pi8mlekEnl"; 

    return redirect()->away($whatsappGroupUrl);
    }
}
