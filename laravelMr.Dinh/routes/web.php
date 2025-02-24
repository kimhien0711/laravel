<?php

use App\Http\Controllers\CalculaterController;
use App\Http\Controllers\CovidController;
use App\Http\Controllers\PostController;
use Brick\Math\Internal\Calculator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('tong');
// });

// Route::post('/', ['CongController'::class,'tinhtong']);

// Route::get('/', function () {
//     return 'Chào mừng các bạn đã đến với PNV!!!';
// });

// Route::get('/',[CalculaterController::class, 'hello']);

Route::get('/index',[PostController::class, 'index']);

Route::get('/create',[PostController::class, 'create']);

Route::post('/store',[PostController::class, 'store']);

//Signup
Route::get('/signup', [SignupController::class, 'index']);
Route::post('/signup', [SignupController::class, 'displayInfo']);

//Covid
Route::get('/covid', [CovidController::class, 'getData']);

//product
Route::resource('products', ProductController::class);