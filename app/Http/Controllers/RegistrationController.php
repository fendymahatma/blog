<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
   public function create()
   {
      return view('registration.create');
   }
   public function store()
   {
      //set validasinya
      $this->validate(request(), [
         'name' => 'required',
         'email' => 'required|email',
         'password' => 'required|confirmed',
      ]);
      //simpen usernya
      $user = User::create([
         'name' => request('name'),
         'email' => request('email'),
         'password' => bcrypt(request('password'))
      ]);
      //loginkan
      auth()->login($user);
      //redirect ke halaman yang dituju
      return redirect()->home();
   }
}
