<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\CreatePost;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return auth()->user()->id;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $post=Post::create([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        $id=auth()->user()->id;
        $users=User::where('id','!=',$id)->get();
        $user_create=auth()->user()->name;
        Notification::send($users, new CreatePost($post->id,$user_create,$post->title));
        return redirect()->route('dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //$post=Post::findorFail($id);
          $getId=DB::table('notifications')->where('data->post_id',$id)->pluck('id');
           DB::table('notifications')->where('id',$getId)->update(['read_at'=>now()]);
           return redirect()->back();
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
    public function markAsRead(){

       //$user = App\Models\User::find(1);
 
        foreach (auth()->user()->unreadNotifications as $notification) {

            $notification->markAsRead();
            //$notification->delete();
        }
        return redirect()->back();
    }
}
