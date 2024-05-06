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

Route::post('owner/customer/add',[\App\Http\Controllers\CustomerController::class, 'store']);
Route::put('manager/item/update{id}',[\App\Http\Controllers\CustomerController::class, 'update']);
Route::delete('manager/item/delete{id}',[\App\Http\Controllers\CustomerController::class, 'destroy']);

Route::post('owner/item/add',[\App\Http\Controllers\ItemController::class, 'store']);
Route::put('manager/item/update{id}',[\App\Http\Controllers\CustomerController::class, 'update']);
Route::delete('manager/item/delete{id}',[\App\Http\Controllers\CustomerController::class, 'destroy']);


