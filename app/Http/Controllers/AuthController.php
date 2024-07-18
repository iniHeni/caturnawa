<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginadmin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin/login');
    }


    public function showMainMenu(Request $request)
    {
        $page = $request->input('page');

        switch ($page) {
            case 'kdbi':
                return route('mainmenukdbi.show');
            case 'sm':
                return view('admin/SM/mainmenuSM1');
            case 'spc':
                return view('admin/LKTI/mainmenuLKTI1');
            default:
                return view('admin/EDC/mainmenuEDC');
        }
    }

     public function logout(Request $request)
     {
         Auth::logout();
         return redirect('admin/login');  
     }
}


