<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontHomeController;
use App\Http\Controllers\admin\AdminController;




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
//Front Design
Route::prefix('front')->name('front.')->group(function () {
    Route::get('/',FrontHomeController::class)->middleware('auth')->name('index');
    Route::view('/login','front.auth.login');
    Route::view('/register','front.auth.AuthRegister');
    Route::view('/forget-password','front.auth.forget-password');
    
});
require __DIR__.'/auth.php';

//admin Design
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/',AdminController::class)->name('index');
    Route::view('/login','admin.auth.login');
    Route::view('/register','admin.auth.Register');
    Route::view('/forget-password','admin.auth.forget-password');

    require __DIR__.'/authAdmin.php'; 
});

Route::get('/',function(){
    return view('welcome');
});
  

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

