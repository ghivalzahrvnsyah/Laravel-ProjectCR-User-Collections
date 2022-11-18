<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CollectionsController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/user', [UserController::class,'index'])->name('user');
Route::get('userRegistration',[UserController::class,'create'])->name('registrasi');
Route::get('/userView/{user}', [UserController::class,'show'])->name('userView');
Route::post('/userStore', [UserController::class,'store'])->name('store');

Route::get('/koleksi', [CollectionsController::class,'index'])->middleware(['auth', 'verified'])->name('koleksi');
Route::get('koleksiTambah',[CollectionsController::class,'create'])->middleware(['auth', 'verified'])->name('koleksiTambah');
Route::get('/koleksiView/{collection}', [CollectionsController::class,'show'])->middleware(['auth', 'verified'])->name('koleksiView');
Route::post('/koleksiStore', [CollectionsController::class,'store'])->middleware(['auth', 'verified'])->name('koleksiStore');


require __DIR__.'/auth.php';
