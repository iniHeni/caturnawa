<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\uploadsm;
use App\Models\ordersm;


class UploadsmController extends Controller
{
    public function uploadsm(Request $request){
        $validemail = ordersm::where('email_1', $request['email'])->first();
        if (!$validemail) { 
            return back()->withErrors(['email' => 'Email Not Registered. Please Register first.'])->withInput();
        }
        $uploadsm = $request->validate([
            'nama' => 'required|string|max:50',
            'email' => 'required|email',
            'instansi' => 'required|string|max:50',
            'poster' => 'required|mimes:pdf|max:5000',
            'script' => 'required|mimes:pdf|max:5000',
            'original' => 'required|mimes:pdf|max:5000',
            'linkvidio' => 'required|string|max:50',
        ]);
        $uploadsm = $request->all();
        if($request->hasFile('poster'))
        {
            $destination_path = 'public/document/sm/poster';
            $image = $request->file('poster');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('poster')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/sm/poster/' . $image_name);

            $update['poster'] = $imageUrl;

        }
        if($request->hasFile('script'))
        {
            $destination_path = 'public/document/sm/script';
            $image = $request->file('script');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('script')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/sm/script/' . $image_name);

            $update['script'] = $imageUrl;

        }
        if($request->hasFile('original'))
        {
            $destination_path = 'public/document/sm/original';
            $image = $request->file('original');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('original')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/sm/original/' . $image_name);

            $update['original'] = $imageUrl;

        }
        $uploadsm = uploadsm::create($uploadsm);
        session()->flash('success', 'Thankyou,Wait for further information from us');
        return redirect()->route('utama');
    }
}
