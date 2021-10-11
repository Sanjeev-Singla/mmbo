<?php
namespace App\Http\Controllers;
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


Route::name('website.')->group(function () {
    Route::match(['get','post'],'register', [Website\UserController::class,'register'])->name('register');
    Route::match(['get','post'],'signin', [Website\UserController::class,'signin'])->name('signin');
    Route::get('user/logout', [Website\UserController::class,'logout'])->name('logout');


    Route::group(['middleware'=>'auth'], function(){
        Route::get('website/home', function(){
            return view('website.pages.home');
        });
    });
});

Route::get('/', function () {
    return redirect('register');;
});

//Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('admin',[Auth\LoginController::class,'showLoginForm']);
Route::match(['get','post'],'login',[Auth\LoginController::class,'login'])->name('admin-login');
Route::get('logout',[Auth\LoginController::class,'logout']);


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth','prefix'=>'admin'], function(){

    Route::match(['get','post'],'change-password',[Auth\ResetPasswordController::class,'changePassword'])->name('admin-change-password');
    
    Route::resource('users', Admin\UserController::class);
    
    Route::resource('invoices',Admin\InvoiceController::class);
});


