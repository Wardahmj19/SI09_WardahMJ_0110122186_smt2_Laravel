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

// prakrikum 10-11-12-13

use App\Http\Controllers\TokoController;

Route::prefix('/praktikum')->group(function(){
    Route::get('/', [
        TokoController::class, 'index']);
    
    Route::get('/detail', [
        TokoController::class, 'detail']);
    
    Route::get('/about', [
        TokoController::class, 'about']);


    Route::group(['middleware' => ['auth']], function(){

        Route::get('/admin', [
            TokoController::class, 'admin'])->name('produk.admin');

        route::get('/create', [
            TokoController::class, 'create'])->name('produk.create');
        
        route::post('/store',[
            TokoController::class, 'store'])->name('produk.store');
        
        route::get('/{product}/edit', [
            TokoController::class, 'edit'])->name('produk.edit');
        
        route::delete('/{product}', [
            TokoController::class, 'destroy'])->name('produk.destroy');
        
        route::put('/{product}', [
            TokoController::class, 'update'])->name('produk.update');

        Route::get('/customers', [
            TokoController::class, 'customers'])->name('pelanggan.customers');
            
        route::get('/tambah', [
            TokoController::class, 'tambah'])->name('pelanggan.tambah');
            
        route::post('/toko',[
            TokoController::class, 'toko'])->name('pelanggan.toko');
            
        route::get('/{customer}/ubah', [
            TokoController::class, 'ubah'])->name('pelanggan.ubah');
            
        route::delete('/{customer}', [
            TokoController::class, 'hapus'])->name('pelanggan.hapus');
            
        route::put('/{customer}', [
            TokoController::class, 'baru'])->name('pelanggan.baru');            
    });   

});


    

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
