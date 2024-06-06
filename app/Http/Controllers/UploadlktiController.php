<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uploadlkti;

class UploadlktiController extends Controller
{
    public function upload(Request $request){
        $uploadlkti = $request->validate([
            'nama' => 'required|string|max:50',
            'email' => 'required|string|max:50',
            'instansi' => 'required|string|max:50',
            'judul' => 'required|string|max:50',
            'tema' => 'required|string|max:50',
            'naskah' => 'required|mimes:pdf|max:5000',
        ]);
        $uploadlkti = $request->all();
        if($request->hasFile('naskah'))
        {
            $destination_path = 'public/document/lkti/naskah';
            $image = $request->file('naskah');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('naskah')->storeAS($destination_path,$image_name);

            $uploadlkti['naskah'] = $image_name;

        }
        $uploadlkti = uploadlkti::create($uploadlkti);
        session()->flash('success', 'Thankyou,Wait for further information from us');
        return redirect()->route('utama');
    }
}
