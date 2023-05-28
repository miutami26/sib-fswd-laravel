<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\KategoryController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\DaftarProdukController;
use App\Http\Controllers\KategoriModelController;

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

Route::controller(UserController::class)->group(function () {
    Route::resource('user',UserController::class);

});
Route::get('template.base',[HomeController::class,'index']);
Route::get('landing.base',[HomeController::class,'showTemplate']);


// Route::resource('kategori',KategoriModelController::class);
Route::resource('produk',ProdukController::class);

Route::get('kategori',[KategoriModelController::class,'index']);
Route::get('kategori/create',[KategoriModelController::class,'create']);
Route::post('kategori',[KategoriModelController::class,'store']);
Route::get('kategori/{kategori}',[KategoriModelController::class, 'show']);
Route::get('kategori/{kategori}/edit',[KategoriModelController::class, 'edit']);
Route::put('kategori/{kategori}',[KategoriModelController::class, 'update']);
Route::delete('kategori/{kategori}',[KategoriModelController::class, 'destroy']);

Route::get('pengguna',[PenggunaController:: class,'index']);
Route::get('pengguna/create',[PenggunaController:: class,'create']);
Route::post('pengguna',[PenggunaController:: class,'store']);
Route::get('pengguna/{pengguna}',[PenggunaController:: class, 'show']);
Route::get('pengguna/{pengguna}/edit',[PenggunaController:: class, 'edit']);
Route::put('pengguna/{pengguna}',[PenggunaController:: class, 'update']);
Route::delete('pengguna/{pengguna}',[PenggunaController:: class, 'destroy']);

Route::get('group',[GroupController::class,'index']);
Route::get('group/create',[GroupController::class,'create']);
Route::post('group',[GroupController::class,'store']);
Route::get('group/{group}',[GroupController::class, 'show']);
Route::get('group/{group}/edit',[GroupController::class, 'edit']);
Route::put('group/{group}',[GroupController::class, 'update']);
Route::delete('group/{group}',[GroupController::class, 'destroy']);

Route::get('kategory',[KategoryController::class,'index']);
Route::get('kategory/create',[KategoryController::class,'create']);
Route::post('kategory',[KategoryController::class,'store']);
Route::get('kategory/{kategory}',[KategoryController::class, 'show']);
Route::get('kategory/{kategory}/edit',[KategoryController::class, 'edit']);
Route::put('kategory/{kategory}',[KategoryController::class, 'update']);
Route::delete('kategory/{kategory}',[KategoryController:: class, 'destroy']);

Route::get('daftarproduk',[DaftarProdukController::class,'index']);
Route::get('daftarproduk/create',[DaftarProdukController::class,'create']);
Route::post('daftarproduk',[DaftarProdukController::class,'store']);
Route::get('daftarproduk/{daftarproduk}',[DaftarProdukController::class, 'show']);
Route::get('daftarproduk/{daftarproduk}/edit',[DaftarProdukController::class, 'edit']);
Route::put('daftarproduk/{daftarproduk}',[DaftarProdukController::class, 'update']);
Route::delete('daftarproduk/{daftarproduk}',[DaftarProdukController::class, 'destroy']);

Route::get('slider',[SliderController::class,'index']);
Route::get('slider/create',[SliderController::class,'create']);
Route::post('slider',[SliderController::class,'store']);
Route::get('slider/{slider}',[SliderController::class, 'show']);
Route::get('slider/{slider}/edit',[SliderController::class, 'edit']);
Route::put('slider/{slider}',[SliderController::class, 'update']);
Route::delete('slider/{slider}',[SliderController::class, 'destroy']);
