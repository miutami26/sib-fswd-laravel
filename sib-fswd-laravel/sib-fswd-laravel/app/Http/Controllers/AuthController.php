<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
   public function loginProcess()
   {
   if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
   $user = Auth::user();

   if ($user->id_role == 1) {
   return redirect('admin/template.base')->with('success', 'Login Berhasil');
   }
   if ($user->id_role == 2) {
   return redirect('staff/template.base')->with('success', 'Login Berhasil');
   }
   if ($user->id_role == 3) {
   return redirect('user/template.base')->with('success', 'Login Berhasil');
   }
   } else {
   return back()->with('danger', 'Login Gagal, silakan periksa email dan password Anda');
   }
   }



    public function logout()
    {

    auth()->logout();
    return redirect('/login');
}

}
