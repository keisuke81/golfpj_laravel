<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\OfferController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanionController;


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

//日にちで誘うページの表示//
Route::get('/offer',
[OfferController::class, 'ShowOffer']);

//キャストから誘うのページ表示//
Route::get('offer_cast',
[CompanionController::class,'ShowCast']);

//キャストから誘う＿年齢で絞る//
Route::get('offer_cast_age',
[CompanionController::class, 'ShowCastAge']);

//キャストの詳細ページ表示//
Route::get('profile/{id}',
[CompanionController::class,'getDetail']);

//キャストのフォロー//
Route::get('/follow/{id}', [CompanionController::class, 'getFollow'])->name('getFollow');

//フォロー解除//
Route::get('/noffollow/{id}', [CompanionController::class, 'noFollow'])->name('noFollow');

//オファー確認ページの表示//
Route::post('/confirm',
[OfferController::class,'Confirm']);

//オファーDB新規追加//
Route::post('/done',
[OfferController::class,'Offer']);

//マイページの表示//
Route::get('/mypage',
[UserController::class,'getMypage'])->name('getMypage');

Route::get('/mypage/offer_content', 
[OfferController::class,'getOfferContent']);

Route::get('mypage/delete_offer/{id}',
[OfferController::class, 'delete_offer'])->name('delete_offer');

//コンパニオン用検索ページの表示//
Route::get('offer_search',
[OfferController::class, 'getOfferSearch']);

//コンパニオン用（日にちで検索）//
Route::get('offer_search/date', 
[OfferController::class, 'getOfferSearchDate']);

//（マイページ）登録情報ページの表示//
Route::get('/mypage/registration_information',
[UserController::class,'getRegistrationInformation']);

//登録情報更新ページの表示//
Route::get('/mypage/registration_information/edit',
[UserController::class,'profile_edit'])->name(('profile_edit'));

//登録情報更新データの送信//
Route::post('/profile_update',
[UserController::class,'profile_update']);

//コンパニオンが応募する//
Route::get('companion_offer/{id}',
    [OfferController::class, 'companionoffer']
)->name('companionoffer');



//チャットの受け取りと送信//
Route::get('/chat/{recieve}', [
    ChatController::class, 'index'
])->name('chat');

Route::post('/chat/send', 
[ChatController::class, 'store'])->name('chatSend');
