<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    //
    public function index(){

     //  return User::all()->dd();
    // return abort(403);

    $user=User::where('name',username())->get();
    return $user;
    
    }
}
