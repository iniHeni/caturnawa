<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uploadlkti;
use App\Models\pesertaspc;
use Illuminate\Support\Facades\Mail;
use App\Mail\LktiSubmission;

use RealRashid\SweetAlert\Facades\Alert;

class UploadlktiController extends Controller
{
    public function upload(Request $request){
        $validemail = pesertaspc::where('email', $request['email'])->first();
        if (!$validemail) { 
            return back()->withErrors(['email' => 'Email is not registered'])->withInput();
        }
        if ($validemail->status !== 'Paid' && $validemail->status !== 'KhususUNAS') {
            return back()->withErrors(['email' => 'Email Not able to UPLOAD, Pay First. '])->withInput();
        }
        $uploadlkti = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'instansi' => 'required',
            'judul' => 'required',
            'tema' => 'required',
            'naskah' => 'required|mimes:pdf|max:5000',
        ]);
        
        $uploadlkti = $request->all();
        if($request->hasFile('naskah'))
        {
            $destination_path = 'public/document/lkti/naskah';
            $image = $request->file('naskah');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('naskah')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/lkti/naskah/' . $image_name);

            $uploadlkti['naskah'] = $imageUrl;

        }
        $uploadlkti = uploadlkti::create($uploadlkti);
        Mail::to($request['email'])->send(new LktiSubmission($uploadlkti));
        session()->flash('success', 'Terimakasih!, Silahkan Cek email di inbox/spam untuk bukti submit form');
        return redirect()->route('utama');
    }
}
