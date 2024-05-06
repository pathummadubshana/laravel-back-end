<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Homecontroller;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

route::get('owner/dashbord',[Homecontroller::class,'index']);
route::get('manager/dashbord',[Homecontroller::class,'manager']);
route::get('cas/dashbord',[Homecontroller::class,'cash']);

//owner route
Route::get('owner/customer',[\App\Http\Controllers\CustomerController::class, 'index']);
Route::get('owner/customer/create',[\App\Http\Controllers\CustomerController::class, 'create']);
Route::post('owner/customer/add',[\App\Http\Controllers\CustomerController::class, 'store']);

Route::get('owner/item',[\App\Http\Controllers\ItemController::class, 'index']);
Route::get('owner/item/create',[\App\Http\Controllers\ItemController::class, 'create']);
Route::post('owner/item/add',[\App\Http\Controllers\ItemController::class, 'store']);

// Cashiers route
Route::get('cashiers/item/edit{id}',[\App\Http\Controllers\ItemController::class, 'edit']);
Route::put('cashiers/item/update{id}',[\App\Http\Controllers\ItemController::class, 'update']);
Route::delete('cashiers/item/delete{id}',[\App\Http\Controllers\ItemController::class, 'destroy']);

//Maneger route
Route::get('manager/item/edit{id}',[\App\Http\Controllers\CustomerController::class, 'edit']);
Route::put('manager/item/update{id}',[\App\Http\Controllers\CustomerController::class, 'update']);
Route::delete('manager/item/delete{id}',[\App\Http\Controllers\CustomerController::class, 'destroy']);





