<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin/login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'pass' => 'required',
        ]);

        $user = User::where('username', $request->user)->first();

        if ($user && Hash::check($request->pass, $user->password)) {
            Auth::login($user);
            return redirect()->route('mainmenu.show');
        } else {
            return back()->withErrors(['error' => 'Username atau password salah.']);
        }
    }

    public function showMainMenu(Request $request)
    {
        $page = $request->input('page');

        switch ($page) {
            case 'KDBI':
                return view('admin/KDBI/mainmenuKDBI1');
            case 'SM':
                return view('admin/SM/mainmenuSM1');
            case 'LKTI':
                return view('admin/LKTI/mainmenuLKTI1');
            default:
                return view('admin/EDC/mainmenuEDC');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('admin/login'); // Redirect ke halaman login setelah logout
    }
}


