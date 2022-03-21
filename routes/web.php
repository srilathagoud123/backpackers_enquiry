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

Route::get('/enquiry', function () {
    return view('enquiry');
})->name("enquiry");

Route::get('/success', function () {
    return view('success');
})->name("success");

Route::post('save_enquiry', 'EnquiryController@save_enquiry')->name('save_enquiry');;

//Route::post("save_enquiry",[App\Http\Controllers\EnquiryController::class,"save_enquiry"]);
