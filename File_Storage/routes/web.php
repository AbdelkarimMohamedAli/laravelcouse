<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\UploadImage;


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

Route::get('/test', function () {

   // Storage::disk('local')->put('test.txt','welcome');
   // Storage::disk('public')->put('test.txt','welcome Public');
    Storage::disk('karim')->put('test.txt','welcome karim public');
    return 'ok';
});

Route::get('show',[UploadImage::class,'showform']);
Route::get('show/image',[UploadImage::class,'index']);
Route::post('store',[UploadImage::class,'store'])->name('photo.save');