<?php

use App\Http\Controllers\ControllerPeminjam;
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

Route::get('/peminjam', [ControllerPeminjam::class, 'index']);
Route::post('/input',[ControllerPeminjam::class, 'store']);
Route::get('/showall',[ControllerPeminjam::class,'showall']);

Route::get('/edit/{slug}',[ControllerPeminjam::class, 'show']);


Route::put('/update/{id}',[ControllerPeminjam::class,'update']);
Route::get('/hapus/{id}',[ControllerPeminjam::class,'destroy']);


Route::get('/datakeseluruhan',[ControllerPeminjam::class,'showdata']);
Route::get('/datapeminjam',[ControllerPeminjam::class, 'datapeminjam']);
Route::get('/databuku',[ControllerPeminjam::class, 'databuku']);




