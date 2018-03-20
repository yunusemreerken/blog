<?php namespace App\Http\Controllers;

use DB;
use Hash;
<<<<<<< HEAD
use Response;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
=======
use Illuminate\Foundation\Validation\ValidatesRequests;
use Response;
>>>>>>> master
class UserController extends Controller
{
  public $successStatus = 200;
  protected $name="";
  public function index()
  {
      return view('kayit');
  }
  public function kayit(Request $request)
  {
      $name=$request->input('name');
      $email=$request->input('email');
      $password = $request->input('password');
      $hashed = Hash::make($password);
      $kayit = DB::select("INSERT INTO kayit(name,email,password)VALUES(?,?,?)",[$name,$email,$hashed]);
      return response()->json([
          'name'=>$name,
          'email' => $email,
          'password' => $hashed
      ],$this->successStatus);
  }

  public function giris()
  {
      return view('giris');
  }
<<<<<<< HEAD

  public function signin(Request $request)
  {
    $name=$request->input('name');
    $email=$request->input('email');
    $password = $request->input('password');
    $query = DB::select("SELECT name,email,password FROM kayit WHERE email=?",[$email]);
    foreach ($query as $sorgu) {
      if ($sorgu->email==$email && Hash::check($password,$sorgu->password)) {
          return response()->json(['name' => $sorgu->name],$this->successStatus);
      }
      else{
        return response()->json(['error'=>'Unauthorised']);
      }
    }
    return response()->json(['error'=>'Unauthorised']);
  }

=======
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
>>>>>>> master
}
