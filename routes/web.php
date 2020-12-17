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

//Route::get('/tambah/{a}/{b}','BelajarController@tambah');//bisa menggunakan variabel istilah anonimos method, variabel dalam php diawali tanda $
//terdiri dari bbrapa route laravel yang dikumpulkan 
//erro
Route::get('/',function(){
        return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/berita', 'App\Http\Controllers\Beritacontroller@index')->name('berita.index');
Route::get('/berita/create', [App\Http\Controllers\Beritacontroller::class, 'create'])->name('berita.create');
Route::post('/berita', [App\Http\Controllers\Beritacontroller::class, 'store'])->name('berita.store');
Route::get('/berita/{id}', [App\Http\Controllers\Beritacontroller::class, 'show'])->name('berita.show');


