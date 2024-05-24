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
        return view('edc/loginadmin');
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

    public function showMainMenu()
    {
        return view('edc/mainmenu');
    }

     public function logout(Request $request)
    {
        Auth::logout();
        return redirect('edc/loginadmin'); // Redirect ke halaman login setelah logout
    }
}


//     // Menampilkan form login
//     public function showLoginForm()
//     {
//         return view('edc/mainmenu'); // Pastikan view ini ada
//     }

//     // Memproses login
//     public function login(Request $request)
//     {
//         $credentials = $request->only('email', 'password');

//         if (Auth::attempt($credentials)) {
//             // Authentication passed...
//             return redirect()->intended('dashboard');
//         }

//         return redirect()->back()->withErrors([
//             'email' => 'The provided credentials do not match our records.',
//         ]);
//     }
    // Memproses logout
   
