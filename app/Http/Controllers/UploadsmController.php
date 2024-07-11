<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\uploadsm;
use App\Models\ordersm;
use RealRashid\SweetAlert\Facades\Alert;


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
            'karya' => 'required|mimes:pdf|max:3000',
            'cipta' => 'required|mimes:pdf|max:3000',
            'story' => 'required|mimes:pdf|max:3000',
            'sipnosis' => 'required|mimes:pdf|max:3000',
            'ori' => 'required|mimes:pdf|max:3000',
            'shortlist' => 'required|mimes:pdf|max:3000',
            'linkvidio' => 'required|string|max:50',
        ]);
        $uploadsm = $request->all();
        if ($request->hasFile('poster')) {
            $originalFileName = pathinfo($request->file('poster')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('poster')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/sm/poster';
            $request->file('poster')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/sm/poster/' . $imageName);
            $uploadsm['poster'] = $imageUrl;
        }
        if ($request->hasFile('script')) {
            $originalFileName = pathinfo($request->file('script')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('script')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/sm/script';
            $request->file('script')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/sm/script/' . $imageName);
            $uploadsm['script'] = $imageUrl;
        }
        if ($request->hasFile('karya')) {
            $originalFileName = pathinfo($request->file('karya')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('karya')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/sm/karya';
            $request->file('karya')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/sm/karya/' . $imageName);
            $uploadsm['karya'] = $imageUrl;
        }
        if ($request->hasFile('cipta')) {
            $originalFileName = pathinfo($request->file('cipta')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('cipta')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/sm/cipta';
            $request->file('cipta')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/sm/cipta/' . $imageName);
            $uploadsm['cipta'] = $imageUrl;
        }
        if ($request->hasFile('story')) {
            $originalFileName = pathinfo($request->file('story')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('story')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/sm/story';
            $request->file('story')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/sm/story/' . $imageName);
            $uploadsm['story'] = $imageUrl;
        }
        if ($request->hasFile('sipnosis')) {
            $originalFileName = pathinfo($request->file('sipnosis')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('sipnosis')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/sm/sipnosis';
            $request->file('sipnosis')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/sm/sipnosis/' . $imageName);
            $uploadsm['sipnosis'] = $imageUrl;
        }
        if ($request->hasFile('ori')) {
            $originalFileName = pathinfo($request->file('ori')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('ori')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/sm/ori';
            $request->file('ori')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/sm/ori/' . $imageName);
            $uploadsm['ori'] = $imageUrl;
        }
        if ($request->hasFile('shortlist')) {
            $originalFileName = pathinfo($request->file('shortlist')->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '', $originalFileName);
            $extension = $request->file('shortlist')->getClientOriginalExtension();
            $imageName = $safeFileName . '.' . $extension;
        
            $destinationPath = 'public/document/sm/shortlist';
            $request->file('shortlist')->storeAs($destinationPath, $imageName);
        
            $imageUrl = asset('storage/document/sm/shortlist/' . $imageName);
            $uploadsm['shortlist'] = $imageUrl;
        }
        $uploadsm = uploadsm::create($uploadsm);
        session()->flash('success', 'Terimakasih!, Tunggu Informasi Selanjutnya dari kami');

        return redirect()->route('utama');
    }
}
