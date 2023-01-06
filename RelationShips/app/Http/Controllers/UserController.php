<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\role;
use App\Models\Phone;


use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        
        //one to one Relation Ship

       // $user=User::find(3)->phone;
        //return $user;
       // $phone=Phone::find(3)->user;
        //return $phone;

        // Many To Many

       /* $user=User::find(1);
        return $user->roles;
        */

        $Role=Role::find(1);
        return $Role->users;
    }
}
