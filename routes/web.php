<?php
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[homeController::class,'home'])
->name('app_home');

Route::get('/about', [homeController::class,'about'])
->name('app_about');

Route::match(['get' ,'post'],'/dashboard',[homeController::class,'dashboard'])
->name('app_dashboard');

/*Route::match(['get' ,'post'],'/login',[loginController::class,'login'])
->name('app_login');

Route::match(['get' ,'post'],'/register',[loginController::class,'register'])
->name('app_register');*/

