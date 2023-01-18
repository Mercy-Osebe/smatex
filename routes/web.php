<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/smatex', function () {
    return view('smatex.index');
});
Route::get('/smatex/about',function(){
    return view('smatex.about');
});
Route::get('/smatex/gallery',function(){
    return view('smatex.gallery');
});
Route::get('/smatex/services',function(){
    return view('smatex.services');
});
Route::get('/smatex/contact',function(){
    return view('smatex.contact');
});
Route::get('/smatex/gallery-single',function(){
    return view('smatex.gallery-single');
});


//admin section routes.
Route::get('/admin/create',[AdminController::class,'create']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
