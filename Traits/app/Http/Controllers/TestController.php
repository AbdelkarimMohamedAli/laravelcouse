<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Traits\TestTrait;

class TestController extends Controller
{
    //
    use TestTrait;

    public function index(){
       //return User::all();
       //return Post::all();

        // $Posts=$this->getData(new Post());
        // return $Posts;

        $users=$this->getData(User::class);
        return $users;
    }
    
   
    
}
