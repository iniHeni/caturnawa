<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\uploadsm;


class UploadsmController extends Controller
{
    public function upload(Request $request){
        $uploadsm = $request->validate([
            'nama' => 'required|string|max:50',
            'email' => 'required|string|max:50',
            'instansi' => 'required|string|max:50',
            'poster' => 'required|mimes:pdf|max:5000',
            'script' => 'required|mimes:pdf|max:5000',
            'original' => 'required|mimes:pdf|max:5000',
            'linkvidio' => 'required|string|max:50',
        ]);
        $uploadsm = $request->all();
        if($request->hasFile('poster'))
        {
            $destination_path = 'document/sm/poster';
            $image = $request->file('poster');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('poster')->storeAS($destination_path,$image_name);

            $uploadsm['poster'] = $image_name;

        }
        if($request->hasFile('script'))
        {
            $destination_path = 'document/sm/script';
            $image = $request->file('script');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('script')->storeAS($destination_path,$image_name);

            $uploadsm['script'] = $image_name;

        }
        if($request->hasFile('original'))
        {
            $destination_path = 'document/sm/original';
            $image = $request->file('original');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('original')->storeAS($destination_path,$image_name);

            $uploadsm['original'] = $image_name;

        }
        $uploadsm = uploadsm::create($uploadsm);
        session()->flash('success', 'Terimakasih,Tunggu Info Selanjutnya dari kami ya!');
        return view('/');
    }
}
