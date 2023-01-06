<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Jobs\ActiveUsersJob;
use App\Jobs\SendMailJob;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailUsers;


class UserController extends Controller
{
    //
    public function index(){

        $user_ids=User::where('status',1)->pluck('id');
        ActiveUsersJob::dispatch($user_ids)->delay(now()->second(60));
        return 'جاري العمل الان علي طلبك';
    }
    public function sendMail(){

        $data=[
            'abdelkarimmohamedali81@gmail.com','abdelkarimmohamedali81@gmail.com','abdelkarimmohamedali81@gmail.com',
            'abdelkarimmohamedali81@gmail.com','abdelkarimmohamedali81@gmail.com','abdelkarimmohamedali81@gmail.com',
            'abdelkarimmohamedali81@gmail.com','abdelkarimmohamedali81@gmail.com','abdelkarimmohamedali81@gmail.com',
        ];
        
       SendMailJob::dispatch($data);
        return 'جاري العمل علي ارسال الاميلات';
    }
}