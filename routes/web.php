<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RazorpayController;
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
Route::get('/redirect',[HomeController::class,'redirect']);
Route::get('/',[HomeController::class,'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('add',[AdminController::class,'add']);
Route::post('uploaddata',[AdminController::class,'uploadproduct']);
Route::get('sshow',[AdminController::class,'show']);
Route::get('deletedata/{id}',[AdminController::class,'deleteproduct']);

Route::get('/search',[HomeController::class,'search']);
Route::post('/addcart/{id}',[HomeController::class,'addcart']);
Route::post('contactus',[HomeController::class,'Contactus']);
Route::get('/showcartproduct',[HomeController::class,'showcart']);
Route::get('/products',[HomeController::class,'Products']);
Route::get('/contacts',[HomeController::class,'contact']);
Route::get('/abouts',[HomeController::class,'about']);

Route::get('updatedata/{id}',[AdminController::class,'editdata']);
Route::post('/edit/{id}',[AdminController::class,'updateproduct']);
Route::get('/showorder',[AdminController::class,'showorders']);
Route::get('/delete/{id}',[HomeController::class,'deletecart']);
Route::post('/order',[HomeController::class,'confirmorder']);
Route::get('/updatestatus/{id}',[AdminController::class,'updatestatus']);


Route::get('paywithrazorpay', [RazorpayController::class,'payWithRazorpay'])->name('paywithrazorpay');
Route::post('payment', [RazorpayController::class,'payment'])->name('payment');
