<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\EntretienController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\TaxController;
use App\Models\Car;
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

Route::get('/', function () {
    return view('welcome');
});

// ---------------------------------------------------------------ADMIN ----------------------------------------------------------------
Route::resource('/admin/managecars', CarsController::class);
Route::resource('/admin/managecustomer', CustomersController::class);
Route::resource('/admin/manageentretien', EntretienController::class);
Route::resource('/admin/managetax', TaxController::class);












// ---------------------------------------------------------------User ----------------------------------------------------------------
Route::get('/ind', [\App\Http\Controllers\UserController::class,'GetCarsIndex']);
Route::get('/', [\App\Http\Controllers\UserController::class,'GetCarsIndex']);
Route::get('/pricing', [\App\Http\Controllers\UserController::class,'GetCarPricing']);
Route::get('/car', [\App\Http\Controllers\UserController::class,'GetAllcars']);
Route::get('/user/car/{matricule}', '\App\Http\Controllers\CarsController@dt_cars')->name('user.car-single');
Route::get('/user/booking/{marque}', '\App\Http\Controllers\CarsController@booking')->name('user.bookingcar');
Route::get('/booking',function(){
    $cars = Car::all();
 return view('user.booking', ["cars"=>$cars]);
});
Route::post('/booking', [ App\Http\Controllers\BookingController::class,'store'])->name('user.booking');





Route::get('/service',function(){ return view('user.service');});
Route::get('/booking',function(){ $cars = Car::all(); return view('user.booking', ["cars"=>$cars]);});

Route::get('/Invoice',function(){return view('user.Invoice');});


Route::get('/car-single',function(){return view('user.car-single');});


Route::get('/about',function(){return view('user.about');});










