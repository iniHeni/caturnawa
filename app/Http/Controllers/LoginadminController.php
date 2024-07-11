<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginadmin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginadminController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'pass' => 'required',
            'lang' => 'required',
        ]);

        $user = loginadmin::where('user', $request->user)->first();

        if ($user && loginadmin::where($request->pass, $user->pass)) {
            session();
            $matalomba = $request->input('lang');
            if ($matalomba === 'kdbi') {
                return view('admin/KDBI/mainmenuKDBI');
            } else if ($matalomba === 'edc') {
                return view('admin/EDC/mainmenuEDC');
            } else if ($matalomba === 'spc') {
                return view('admin/LKTI/mainmenuLKTI');
            } else if ($matalomba === 'sm') {
                return view('admin/SM/mainmenuSM');
            } else {
                return back()->withErrors(['error' => 'Halaman Lomba Tidak bisa di akses']); 
            }
        } else {
            return back()->withErrors(['error' => 'Username atau password salah.']);
        }
    }
}
