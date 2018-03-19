<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Response;
class UserController extends Controller
{
  public function index()
  {
      return view('kayit');
  }
  public function kayit(Request $request)
  {
      $name= $request->input('name');
      $email=$request->input('email');
      $password = $request->input('password');
      $hashed = Hash::make($password);
      $kayit = DB::select("INSERT INTO kayit(name,email,password)VALUES(?,?,?)",[$name,$email,$hashed]);
      // echo  $kayit;
      return response()->json([
    'name' => $name,
    'email' => $email,
    'password' => $hashed
]);
  }
  public function giris()
  {
      return view('giris');
  }
  public function signin(Request $request)
  {
      $name= $request->input('email');
      $name= $request->input('password');
      $veri = DB::select("select email,password from kayit");
      foreach ($veri as $key) {
          if ($veri->email==$name && Hash::check($veri->password, $password)) {
            echo "sdasdasd";
          }
      }
  }
}
