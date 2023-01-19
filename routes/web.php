<?php

use App\Http\Controllers\AdminController;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use LDAP\Result;

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
    $items=Admin::all();
    return view('smatex.index',['items'=>$items]);
});
Route::get('/smatex/about',function(){
    return view('smatex.about');
});
Route::get('/smatex/showAll',function(){
    return view('smatex.showAll');
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
Route::get('/smatex/{id}',function($id){
    $item=Admin::findorFail($id);
    return view('smatex.show',['item'=>$item]);
});


//admin section routes.
Route::resource('/admin',AdminController::class);
Route::get('/admin',[AdminController::class,'index']);
Route::get('/admin/create',[AdminController::class,'create']);
Route::post('/admin/create',[AdminController::class,'store']);
Route::get('/admin/update',[AdminController::class,'update']);
Route::get('/admin/show',[AdminController::class,'show']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
