<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware(['checkage','auth'])->group(function(){

    Route::get('user',[PostController::class,'user'])->middleware('auth:web');
    Route::get('admin',[PostController::class,'admin'])->middleware('auth:admin')->name('admin2');
    Route::get('admin/login',[PostController::class,'adminLogin'])->name('admin.login');
    Route::post('admin/login',[PostController::class,'checkAdminLogin'])->name('save.admin.login');

    

    //Route::get('posts',[PostController::class,'index']);

    //Route::get('posts',[PostController::class,'index']);

//});

require __DIR__.'/auth.php';
