<?php

namespace App\Http\Controllers;


use App\Models\orderkdbi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class OrderkdbiController extends Controller
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

        
       
        $orderkdbi = $request->all();
        if ($request->hasFile('ktm_1')) {
            $originalFileName = pathinfo($request->file('ktm_1')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('ktm_1')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/images/kdbi/ktm_1';
            $request->file('ktm_1')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/kdbi/ktm_1/' . $imageName);
            $orderkdbi['ktm_1'] = $imageUrl;
        }
    
        if ($request->hasFile('ktm_2')) {
            $originalFileName = pathinfo($request->file('ktm_2')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('ktm_2')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/images/kdbi/ktm_2';
            $request->file('ktm_2')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/kdbi/ktm_2/' . $imageName);
            $orderkdbi['ktm_2'] = $imageUrl;
        }
        if ($request->hasFile('foto_1')) {
            $originalFileName = pathinfo($request->file('foto_1')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('foto_1')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'storage/public/images/kdbi/foto_1';
            $request->file('foto_1')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/kdbi/foto_1/' . $imageName);
            $orderkdbi['foto_1'] = $imageUrl;
        }
        if ($request->hasFile('foto_2')) {
            $originalFileName = pathinfo($request->file('foto_2')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('foto_2')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/kdbi/foto_2';
            $request->file('foto_2')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/kdbi/foto_2/' . $imageName);
            $orderkdbi['foto_2'] = $imageUrl;
        }
        if ($request->hasFile('krs_1')) {
            $originalFileName = pathinfo($request->file('krs_1')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('krs_1')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/kdbi/krs_1';
            $request->file('krs_1')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/kdbi/krs_1/' . $imageName);
            $orderkdbi['krs_1'] = $imageUrl;
        }
        if ($request->hasFile('krs_2')) {
            $originalFileName = pathinfo($request->file('krs_2')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('krs_2')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/kdbi/krs_2';
            $request->file('krs_2')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/kdbi/krs_2/' . $imageName);
            $orderkdbi['krs_2'] = $imageUrl;
        }
        if ($request->hasFile('buktifollow_1')) {
            $originalFileName = pathinfo($request->file('buktifollow_1')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('buktifollow_1')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/kdbi/buktifollow_1';
            $request->file('buktifollow_1')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/kdbi/buktifollow_1/' . $imageName);
            $orderkdbi['buktifollow_1'] = $imageUrl;
        }
        if ($request->hasFile('buktifollow_2')) {
            $originalFileName = pathinfo($request->file('buktifollow_2')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('buktifollow_2')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/kdbi/buktifollow_2';
            $request->file('buktifollow_2')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/kdbi/buktifollow_2/' . $imageName);
            $orderkdbi['buktifollow_2'] = $imageUrl;
        }
        if ($request->hasFile('twibbon')) {
            $originalFileName = pathinfo($request->file('twibbon')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('twibbon')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/kdbi/twibbon_1';
            $request->file('twibbon')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/kdbi/twibbon_1/' . $imageName);
            $orderkdbi['twibbon_1'] = $imageUrl;
        }
        if ($request->hasFile('twibbon2')) {
            $originalFileName = pathinfo($request->file('twibbon2')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('twibbon2')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/kdbi/twibbon_2';
            $request->file('twibbon2')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/kdbi/twibbon_2/' . $imageName);
            $orderkdbi['twibbon_2'] = $imageUrl;
        }
        if ($request->hasFile('surat_delegasi')) {
            $originalFileName = pathinfo($request->file('surat_delegasi')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('surat_delegasi')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/images/kdbi/surat_delegasi';
            $request->file('surat_delegasi')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/images/kdbi/surat_delegasi/' . $imageName);
            $orderkdbi['surat_delegasi'] = $imageUrl;
        }
        $now = Carbon::now('Asia/Jakarta');
        if ($now->between('2024-07-23', '2024-07-28')) {
            $price = 300000; 
        } elseif ($now->between('2024-07-29', '2024-08-11')) {
            $price = 400000; 
        } elseif ($now->between('2024-08-12', '2024-08-23')) {
            $price = 450000; 
        } else {
            $price = 9999999; // Default or registration closed
        }
         $additionalData = [
        'price' => $price,
        'status' => 'Unpaid',
        'order' =>'KDBI' . '-' . rand(),
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
        if($request->transaction_status == 'capture'){
            $orderkdbi = orderkdbi::find ($request->order_id);
            $orderkdbi->update(['status' => 'Paid']);
        } elseif ($request->transaction_status == 'expire' || $request->transaction_status == 'deny') {
            return response()->json([
                'reload_page' => true
            ]);
        }
    }
}
public function homekdbi($id){
    $orderlkti = orderkdbi::find($id);
    $orderlkti->update(['status' => 'Paid']);
    $whatsappGroupUrl = "https://chat.whatsapp.com/L7QJ06WRs4tEZwVyP58SMB"; 
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

    
   
    $orderkdbi = $request->all();
    if ($request->hasFile('ktm_1')) {
        $originalFileName = pathinfo($request->file('ktm_1')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('ktm_1')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/kdbi/ktm_1';
        $request->file('ktm_1')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/kdbi/ktm_1/' . $imageName);
        $orderkdbi['ktm_1'] = $imageUrl;
    }

    if ($request->hasFile('ktm_2')) {
        $originalFileName = pathinfo($request->file('ktm_2')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('ktm_2')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/kdbi/ktm_2';
        $request->file('ktm_2')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/kdbi/ktm_2/' . $imageName);
        $orderkdbi['ktm_2'] = $imageUrl;
    }
    if ($request->hasFile('foto_1')) {
        $originalFileName = pathinfo($request->file('foto_1')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('foto_1')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/kdbi/foto_1';
        $request->file('foto_1')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/kdbi/foto_1/' . $imageName);
        $orderkdbi['foto_1'] = $imageUrl;
    }
    if ($request->hasFile('foto_2')) {
        $originalFileName = pathinfo($request->file('foto_2')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('foto_2')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/kdbi/foto_2';
        $request->file('foto_2')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/kdbi/foto_2/' . $imageName);
        $orderkdbi['foto_2'] = $imageUrl;
    }
    if ($request->hasFile('krs_1')) {
        $originalFileName = pathinfo($request->file('krs_1')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('krs_1')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/kdbi/krs_1';
        $request->file('krs_1')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/kdbi/krs_1/' . $imageName);
        $orderkdbi['krs_1'] = $imageUrl;
    }
    if ($request->hasFile('krs_2')) {
        $originalFileName = pathinfo($request->file('krs_2')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('krs_2')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/kdbi/krs_2';
        $request->file('krs_2')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/kdbi/krs_2/' . $imageName);
        $orderkdbi['krs_2'] = $imageUrl;
    }
    if ($request->hasFile('buktifollow_1')) {
        $originalFileName = pathinfo($request->file('buktifollow_1')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('buktifollow_1')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/document/kdbi/buktifollow_1';
        $request->file('buktifollow_1')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/document/kdbi/buktifollow_1/' . $imageName);
        $orderkdbi['buktifollow_1'] = $imageUrl;
    }
    if ($request->hasFile('buktifollow_2')) {
        $originalFileName = pathinfo($request->file('buktifollow_2')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('buktifollow_2')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/document/kdbi/buktifollow_2';
        $request->file('buktifollow_2')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/document/kdbi/buktifollow_2/' . $imageName);
        $orderkdbi['buktifollow_2'] = $imageUrl;
    }
    if ($request->hasFile('twibbon_1')) {
        $originalFileName = pathinfo($request->file('twibbon_1')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('twibbon_1')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/kdbi/twibbon_1';
        $request->file('twibbon_1')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/kdbi/twibbon_1/' . $imageName);
        $orderkdbi['twibbon_1'] = $imageUrl;
    }
    if ($request->hasFile('twibbon_2')) {
        $originalFileName = pathinfo($request->file('twibbon_2')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('twibbon_2')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/kdbi/twibbon_2';
        $request->file('twibbon_2')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/kdbi/twibbon_2/' . $imageName);
        $orderkdbi['twibbon_2'] = $imageUrl;
    }
    if ($request->hasFile('surat_delegasi')) {
        $originalFileName = pathinfo($request->file('surat_delegasi')->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
        $extension = $request->file('surat_delegasi')->getClientOriginalExtension();
        $imageName = $safeFileName . '.' . $extension;
    
        $destinationPath = 'public/images/kdbi/surat_delegasi';
        $request->file('surat_delegasi')->storeAs($destinationPath, $imageName);
    
        $imageUrl = asset('storage/images/kdbi/surat_delegasi/' . $imageName);
        $orderkdbi['surat_delegasi'] = $imageUrl;
    }
    $now = Carbon::now('Asia/Jakarta');
    if ($now->between('2024-07-23', '2024-07-28')) {
        $price = 300000; 
    } elseif ($now->between('2024-07-29', '2024-08-11')) {
        $price = 400000; 
    } elseif ($now->between('2024-08-12', '2024-08-23')) {
        $price = 450000; 
    } else {
        $price = 9999999; // Default or registration closed
    }
     $additionalData = [
    'price' => $price,
    'status' => 'Unpaid',
    'instansi' => 'Universitas Nasional',
    'order' =>'KDBI' . '-' . rand(),
    'kompetisi' => 'Debate Bahasa Indonesia Competition',
];

$orderkdbi = array_merge($orderkdbi, $additionalData);
    $orderkdbi = orderkdbi::create($orderkdbi);

return view('matalomba/kdbi/checkoutunas', compact('orderkdbi'));
}
public function homekdbi1($id){
    $orderlkti = orderkdbi::find($id);
    $orderlkti->update(['status' => 'Khusus']);
    $whatsappGroupUrl = "https://chat.whatsapp.com/L7QJ06WRs4tEZwVyP58SMB"; 
    return redirect()->away($whatsappGroupUrl);
}
}
