<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginadmin; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LoginAdminController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'pass' => 'required',
            'lang' => 'required',
        ]);

        $user = loginadmin::where('user', $request->user)->first(); // Use the correct model name

        // Use Hash::check to compare passwords
        if ($user && loginadmin::where($request->pass, $user->pass)) { 
            // Authentication successful, use Auth::login to log the user in
            Auth::login($user);
            Session::regenerate();

            
            if ($request->user === 'SMC2024') {
                if ($request->input('lang') === 'sm' && $request->input('pass') === 'Ufest2024') {
                return redirect()->route('mainmenu.showsm'); 
                } else {
                    return back()->withErrors(['error' => 'Halaman Lomba Tidak bisa diakses']);
                }
            } elseif ($request->user === 'SPC2024') {
                if ($request->input('lang') === 'spc' && $request->input('pass') === 'Ufest2024') {
                    return redirect()->route('mainmenu.showlkti'); 
                    } else {
                        return back()->withErrors(['error' => 'Halaman Lomba Tidak bisa diakses']);
                    }
            } elseif ($request->user === 'DEBAT2024') {
                if ($request->input('lang') === 'edc' && $request->input('pass') === 'Ufest2024') {
                    return redirect()->route('mainmenu.showedc');
                } elseif ($request->input('lang') === 'kdbi' && $request->input('pass') === 'Ufest2024') {
                    return redirect()->route('mainmenukdbi.showkdbi');
                } else {
                    return back()->withErrors(['error' => 'Halaman Lomba Tidak bisa diakses']);
                }
            } else {
                $matalomba = $request->lang;
                switch ($matalomba) {
                    case 'kdbi':
                        return redirect()->route('mainmenukdbi.showkdbi');
                    case 'edc':
                        return redirect()->route('mainmenu.showedc');
                    case 'spc':
                        return redirect()->route('mainmenu.showlkti');
                    case 'sm':
                        return redirect()->route('mainmenu.showsm');
                    default:
                        return back()->withErrors(['error' => 'Halaman Lomba Tidak bisa diakses']);
                }
            }
        } else {
            return back()->withErrors(['error' => 'Invalid username or password.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('admin/login'); // Redirect to login page after logout
    }

    public function showLoginForm()
    {
        return view('admin.login');
    }
}
