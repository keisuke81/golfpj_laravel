<?php

use App\Http\Controllers\OfferController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
//ユーザー登録画面の表示//
Route::get('/register', [UserController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

//トップページの表示//
Route::get('/',
[OfferController::class, 'index']);

//ゴルフに誘うページの表示//
Route::get('/offer',
[OfferController::class, 'ShowOffer']);

//オファー確認ページの表示//
Route::post('/confirm',
[OfferController::class,'Confirm']);

//オファーDB新規追加//
Route::post('/done',
[OfferController::class,'Offer']);