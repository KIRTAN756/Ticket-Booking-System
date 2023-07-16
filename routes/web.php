<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c1;
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
Route::get('/register', function () {
    return view('register');
});
Route::get('/home', function () {
    return view('home');
})->middleware('guard');
Route::get('/access', function () {
    return view('noaccess');
});
Route::post('/reg',[c1::class,'register']);
Route::post('/log',[c1::class,'login']);
Route::get('/viewBus/bookit',[c1::class,'viewTicket'])->middleware('guard');
Route::post('/viewBus/bookit/booked',[c1::class,'bookit'])->middleware('guard');
Route::get('/city',[c1::class,'citys'])->middleware('guard');
Route::get('/bus',[c1::class,'buses'])->middleware('guard');
Route::get('/train',[c1::class,'trains'])->middleware('guard');
Route::get('/viewBus',[c1::class,'viewBus'])->middleware('guard');
Route::post('/book',[c1::class,'bookit'])->middleware('guard');
Route::post('/addCity',[c1::class,'addCity'])->middleware('guard');
Route::post('/addBus',[c1::class,'addBus'])->middleware('guard');
Route::post('/train/addTrain',[c1::class,'addTrain'])->middleware('guard');
Route::get('/viewTrain',[c1::class,'viewTrain'])->middleware('guard');
Route::get('/bookedTrain',[c1::class,'bookedTrainTicket'])->middleware('guard');
Route::get('/viewTrain/bookit',[c1::class,'viewTrainTicket'])->middleware('guard');
Route::post('/viewTrain/bookit/booked',[c1::class,'bookTrainTicket'])->middleware('guard');
Route::get('/logout',function(){
    session()->forget('uname');
    session()->forget('uid');
    return redirect('/');
})->middleware('guard');
Route::get('/booked',[c1::class,'bookedTicket'])->middleware('guard');
Route::get('/viewReport',[c1::class,'viewReport'])->middleware('guard');
Route::get('/viewReport/detail',[c1::class,'reportDetail'])->middleware('guard');
Route::get('/viewTrainReport',[c1::class,'viewTrainReport'])->middleware('guard');
Route::get('/viewTrainReport/detail',[c1::class,'reportTrainDetail'])->middleware('guard');