<?php

namespace App\Http\Controllers;

use App\Models\pesertasm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class PesertasmController extends Controller
{
    public function tampilpee(){
        $tambah = pesertasm::select()->get();
        
        return view('admin/sm/pesertasm', compact('tambah'));
     }

    public function tambahpee(Request $request){
        $tambah = $request->validate([
            'instansi' => 'required|string|max:50',
            'namateam' => 'required|string|max:50',
                'nama' => 'required|string|max:50',
                'nama1' => 'required|string|max:50',
                'nama2' => 'required|string|max:50',
                'nama3' => 'required|string|max:50',
                'nama4' => 'required|string|max:50',
                'email' => 'required|email',
                'email1' => 'required|email',
                'email2' => 'required|email',
                'email3' => 'required|email',
                'email4' => 'required|email',
                'foto' => 'required|mimes:png,jpeg,jpg|max:5000',
                'foto1' => 'required|mimes:png,jpeg,jpg|max:5000',
                'foto2' => 'required|mimes:png,jpeg,jpg|max:5000',
                'foto3' => 'required|mimes:png,jpeg,jpg|max:5000',
                'foto4' => 'required|mimes:png,jpeg,jpg|max:5000',
                'nohp' => 'required',
                'nohp1' => 'required',
                'nohp2' => 'required',
                'nohp3' => 'required',
                'nohp4' => 'required',
                'logo' => 'required|mimes:png,jpeg,jpg|max:5000',
        ]);
        $tambah = $request->all();
        if($request->hasFile('foto'))
        {
            $destination_path = 'public/images/sm/peserta/foto';
            $image = $request->file('foto');
            $image_name = time() . '_';
            $path = $request->file('foto')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/peserta/foto/' . $image_name);

            $tambah['foto'] = $imageUrl;

        }
        if($request->hasFile('foto1'))
        {
            $destination_path = 'public/images/sm/peserta/foto1';
            $image = $request->file('foto1');
            $image_name = time() . '_';
            $path = $request->file('foto1')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/peserta/foto1/' . $image_name);

            $tambah['foto1'] = $imageUrl;

        }
        if($request->hasFile('foto2'))
        {
            $destination_path = 'public/images/sm/peserta/foto2';
            $image = $request->file('foto2');
            $image_name = time() . '_';
            $path = $request->file('foto2')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/peserta/foto2/' . $image_name);

            $tambah['foto2'] = $imageUrl;

        }
        if($request->hasFile('foto3'))
        {
            $destination_path = 'public/images/sm/peserta/foto3';
            $image = $request->file('foto3');
            $image_name = time() . '_';
            $path = $request->file('foto3')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/peserta/foto3/' . $image_name);

            $tambah['foto3'] = $imageUrl;

        }
        if($request->hasFile('foto4'))
        {
            $destination_path = 'public/images/sm/peserta/foto4';
            $image = $request->file('foto4');
            $image_name = time() . '_';
            $path = $request->file('foto4')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/peserta/foto4/' . $image_name);

            $tambah['foto4'] = $imageUrl;

        }
        if($request->hasFile('logo'))
        {
            $destination_path = 'public/images/sm/peserta/logo';
            $image = $request->file('logo');
            $image_name = time() . '_';
            $path = $request->file('logo')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/images/sm/peserta/logo/' . $image_name);

            $tambah['logo'] = $imageUrl;

        }
        pesertasm::create($tambah);
        return redirect()->route('sm.tampilpee');

    }

    public function editpee($id) {
        $edit = pesertasm::find($id);
        return view('admin/sm/editpeserta', compact('edit'));
    }

    public function updatepee(Request $request, $id){
    $update = $request->validate([
        'instansi' => 'required|string|max:50',
        'namateam' => 'required|string|max:50',
            'nama' => 'required|string|max:50',
            'nama1' => 'required|string|max:50',
            'nama2' => 'required|string|max:50',
            'nama3' => 'required|string|max:50',
            'nama4' => 'required|string|max:50',
            'email' => 'required|email',
            'email1' => 'required|email',
            'email2' => 'required|email',
            'email3' => 'required|email',
            'email4' => 'required|email',
            'foto' => 'required|mimes:png,jpeg,jpg|max:5000',
            'foto1' => 'required|mimes:png,jpeg,jpg|max:5000',
            'foto2' => 'required|mimes:png,jpeg,jpg|max:5000',
            'foto3' => 'required|mimes:png,jpeg,jpg|max:5000',
            'foto4' => 'required|mimes:png,jpeg,jpg|max:5000',
            'nohp' => 'required',
            'nohp1' => 'required',
            'nohp2' => 'required',
            'nohp3' => 'required',
            'nohp4' => 'required',
            'logo' => 'required|mimes:png,jpeg,jpg|max:5000',
    ]);
    $update = $request->all();
    if($request->hasFile('foto'))
    {
        $destination_path = 'public/images/sm/peserta/foto';
        $image = $request->file('foto');
        $image_name = time() . '_';
        $path = $request->file('foto')->storeAS($destination_path,$image_name);
        $imageUrl = asset('storage/images/sm/peserta/foto/' . $image_name);

        $tambah['foto'] = $imageUrl;

    }
    if($request->hasFile('foto1'))
    {
        $destination_path = 'public/images/sm/peserta/foto1';
        $image = $request->file('foto1');
        $image_name = time() . '_';
        $path = $request->file('foto1')->storeAS($destination_path,$image_name);
        $imageUrl = asset('storage/images/sm/peserta/foto1/' . $image_name);

        $tambah['foto1'] = $imageUrl;

    }
    if($request->hasFile('foto2'))
    {
        $destination_path = 'public/images/sm/peserta/foto2';
        $image = $request->file('foto2');
        $image_name = time() . '_';
        $path = $request->file('foto2')->storeAS($destination_path,$image_name);
        $imageUrl = asset('storage/images/sm/peserta/foto2/' . $image_name);

        $tambah['foto2'] = $imageUrl;

    }
    if($request->hasFile('foto3'))
    {
        $destination_path = 'public/images/sm/peserta/foto3';
        $image = $request->file('foto3');
        $image_name = time() . '_';
        $path = $request->file('foto3')->storeAS($destination_path,$image_name);
        $imageUrl = asset('storage/images/sm/peserta/foto3/' . $image_name);

        $tambah['foto3'] = $imageUrl;

    }
    if($request->hasFile('foto4'))
    {
        $destination_path = 'public/images/sm/peserta/foto4';
        $image = $request->file('foto4');
        $image_name = time() . '_';
        $path = $request->file('foto4')->storeAS($destination_path,$image_name);
        $imageUrl = asset('storage/images/sm/peserta/foto4/' . $image_name);

        $tambah['foto4'] = $imageUrl;

    }
    if($request->hasFile('logo'))
    {
        $destination_path = 'public/images/sm/peserta/logo';
        $image = $request->file('logo');
        $image_name = time() . '_';
        $path = $request->file('logo')->storeAS($destination_path,$image_name);
        $imageUrl = asset('storage/images/sm/peserta/logo/' . $image_name);

        $update['logo'] = $imageUrl;

    }
    $data = pesertasm::find($id);
    $data->update($update);
        return redirect()->route('sm.tampilpee');
}

public function hapuspee($id){
    $hapus = pesertasm::find($id);
    $hapus->delete();
    return redirect()->route('sm.tampilpee');
}
public function peserta(){
    $peserta = pesertasm::all();
    
    return view('matalomba/sm/sm', compact('peserta'));
 }
 public function detailpeserta($id){
    $dataa = pesertasm::find($id);
    return view('matalomba/sm/detailpeserta', compact('dataa'));
 }
}
