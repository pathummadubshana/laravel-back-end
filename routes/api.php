<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('customer/create','CustomerController@store');
Route::put('customer/edit','CustomerController@update');
Route::delete('customer/delete','CustomerController@destroy');

Route::post('item/create','ItemController@store');
Route::put('item/edit','ItemController@update');
Route::delete('item/delete','ItemController@destroy');


