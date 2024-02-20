<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class regisController extends Controller
{
   public function index()
   {
    return view('auth.v_regis');
   }

   public function store(Request $request)
   {
      $request->validate([
         'name' => 'required|string|max:255',
         'email' => 'required|string|email:dns|unique:users',
         'password' => 'required|string|min:5'
      ]);

      User::create([
         'name' => $request->name,
         'email' => $request->email,
         'password' => bcrypt($request->password)
      ]);

      return to_route('sign');
   }
}