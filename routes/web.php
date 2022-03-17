<?php

use App\Http\Controllers\Auth\LineOAuthController;
use App\Http\Controllers\LineLoginController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\OfferController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanionController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

//トップページの表示//
Route::get('/',function () {
        return view('welcome');
    }
);
Route::get('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/home/{user_id}', [UserController::class, 'index'])->name('home');

Route::get('/linelogin', [LineLoginController::class,'lineLogin'])->name('linelogin');
Route::get('/callback', [LineLoginController::class, 'callback'])->name('callback');


//メニューの表示//
Route::get('/menu1',[UserController::class, 'showMenu']);


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
Route::get('/mypage/{user_id}',
[UserController::class,'getMypage'])->name('getMypage');

Route::get('/mypage/offer_content/{user_id}', 
[OfferController::class,'getOfferContent']);

Route::get('mypage/delete_offer/{id}',
[OfferController::class, 'delete_offer'])->name('delete_offer');

Route::get('/mypage/reserve_content/{user_id}',[
    OfferController::class, 'getReserveContent'
]);

//コンパニオン用検索ページの表示//
Route::get('offer_search',
[OfferController::class, 'getOfferSearch']);

//コンパニオン用（日にちで検索）//
Route::get('offer_search/date', 
[OfferController::class, 'getOfferSearchDate']);

//（マイページ）登録情報ページの表示//
Route::get('/mypage/registration_information/{user_id}',
[UserController::class,'getRegistrationInformation']);

//登録情報更新ページの表示//
Route::get('/mypage/registration_information/edit/{user_id}',
[UserController::class,'profile_edit'])->name(('profile_edit'));

//登録情報更新データの送信//
Route::post(
    '/profile_update',
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

//チャット選択画面の表示//
Route::get('/chat_select',
[ChatController::class,'showChatselect']);

Route::get('/logout_page',
[UserController::class,'showLogout']);


