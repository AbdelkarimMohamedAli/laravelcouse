<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('users',function(){
    return 'users';
});
*/
/*
route::get('users',function(){
    echo 'karim';
});
*/
/*
route::get('users',function(){
    return view('users');
});
*/

/*
Route::Post('users',function(Illuminate\Http\Request $request){

    return $request; 
});
*/

/*
Route::Get('users/{name}',function($name){

        if($name == 'karim'){
            return 'admin';
        }else{
            return 'user';
        }
    
});
*/


/*
Route::Get('users/{id}',function(int $id){

    if($id == 1){
        return 'admin';
    }else{
        return 'user';
    }
});
*/
Route::Get('users/{name}',function(string $aaaa){

    if($aaaa == 'karim'){
        return 'admin';
    }else{
        return 'user';
    }
});


