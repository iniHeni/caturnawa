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
            'poster' => 'required|mimes:pdf|max:3000',
            'script' => 'required|mimes:pdf|max:3000',
            'original' => 'required|mimes:pdf|max:3000',
            'karya' => 'required|mimes:pdf|max:3000',
            'cipta' => 'required|mimes:pdf|max:3000',
            'story' => 'required|mimes:pdf|max:3000',
            'sipnosis' => 'required|mimes:pdf|max:3000',
            'ori' => 'required|mimes:pdf|max:3000',
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

            $uploadsm['poster'] = $imageUrl;

        }
        if($request->hasFile('script'))
        {
            $destination_path = 'public/document/sm/script';
            $image = $request->file('script');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('script')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/sm/script/' . $image_name);

            $uploadsm['script'] = $imageUrl;

        }
        if($request->hasFile('original'))
        {
            $destination_path = 'public/document/sm/original';
            $image = $request->file('original');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('original')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/sm/original/' . $image_name);

            $uploadsm['original'] = $imageUrl;

        }
        if($request->hasFile('karya'))
        {
            $destination_path = 'public/document/sm/karya';
            $image = $request->file('karya');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('karya')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/sm/karya/' . $image_name);

            $uploadsm['karya'] = $imageUrl;

        }
        if($request->hasFile('cipta'))
        {
            $destination_path = 'public/document/sm/cipta';
            $image = $request->file('cipta');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('cipta')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/sm/cipta/' . $image_name);

            $uploadsm['cipta'] = $imageUrl;

        }
        if($request->hasFile('story'))
        {
            $destination_path = 'public/document/sm/story';
            $image = $request->file('story');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('story')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/sm/story/' . $image_name);

            $uploadsm['story'] = $imageUrl;

        }
        if($request->hasFile('sipnosis'))
        {
            $destination_path = 'public/document/sm/sipnosis';
            $image = $request->file('sipnosis');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('sipnosis')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/sm/sipnosis/' . $image_name);

            $uploadsm['sipnosis'] = $imageUrl;

        }
        if($request->hasFile('ori'))
        {
            $destination_path = 'public/document/sm/ori';
            $image = $request->file('ori');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('ori')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/sm/ori/' . $image_name);

            $uploadsm['ori'] = $imageUrl;

        }
        $uploadsm = uploadsm::create($uploadsm);
        flash('Success', 'Thankyou,Wait for further information from us');
        return redirect()->route('utama');
    }
}
