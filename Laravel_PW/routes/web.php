<?php

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

// praktikum 8

Route::get('/praktikum8/kabar', function () {
    return view('praktikum8/kondisi');
});

Route::get('/praktikum8/nilai', function () {
    return view('praktikum8/nilai');
});

Route::get('/praktikum8/tugas', function () {
    return view('praktikum8/tugas');
});

Route::get('/praktikum8/hasil', function () {
    return view('praktikum8/hasil');
});

Route::get('/about', function () {
    return view('praktikum9/about');
});

Route::get('/hello/{nama}/{alamat}', function ($nama, $alamat) {
    return "<h1> Hello $nama dari $alamat</h1>";
});

Route::get('/produk/{id}', function ($id) {
    return view('praktikum9/index', ['id'=>$id]);
});

use App\Http\Controllers\UserController;

// praktikum 9

Route::get('/user', [
    UserController::class, 'index']);

Route::get('/user/daftar', 
    [UserController::class, 'daftar']);

Route::post('/user/store', 
    [UserController::class, 'store'])->name('user/store');
    
Route::get('/praktikum9/tugas', 
    [UserController::class, 'tugas']);

Route::post('/praktikum9/hasil', 
    [UserController::class, 'hasil'])->name('praktikum9/hasil');

// prakrikum 10

use App\Http\Controllers\TokoController;

Route::prefix('/toko')->group(function(){
    Route::get('/', [
        TokoController::class, 'index']);
    
    Route::get('/detail', [
        TokoController::class, 'detail']);
    
    Route::get('/about', [
        TokoController::class, 'about']);
});
