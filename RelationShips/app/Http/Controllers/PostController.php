<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    //
    public function index(){
        
        // one to Many Relation Ship
         /*
         $post=Post::find(1)->comments;
         return $post;
        */
         $comment=Comment::find(4);
         return $comment->post;
     }
}
