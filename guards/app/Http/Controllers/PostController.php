<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    //
    public function index(){
        return 'hello';
    }
    public function user(){
        return 'hello user';
    }
    public function admin(){
        return 'hello admin';
    }
    public function adminLogin(){
      //  return view('auth.adminLogin');
      return view('admin.adminlogin');
    }
    public function checkAdminLogin(Request $request){

        //return Auth::guard('admin')->email;
        
        $email= $request->email;
         $password=md5($request->password);
    //     $admin=Admin::where('email',$email)->get();

    //     if($admin){
    //         return redirect()->route('admin2');

    //     }

    if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])) {

        return redirect()->intended('admin');
        }

        return back()->withInput($request->only('email', 'remember'));
        
    //     return response('back ya user');


    // $credentials = $request->validate([
    //     'email' => ['required'],
    //     'password' => ['required'],
    // ]);

    // if ($ss=Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])) {
    //    // $request->session()->regenerate();

    //    return $ss;
    //    // return redirect()->intended('admin2');
    // }

    // return back()->withErrors([
    //     'email' => 'The provided credentials do not match our records.',
    // ])->onlyInput('email');


    }
}
