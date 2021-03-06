<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ClientRequest;

class UserController extends Controller
{
    public function index(User $user_id){
        $user_id = Auth::id();

        return view('home')->with(['user_id' => $user_id]);
    }

    //マイページの表示//
    public function getMypage($user_id){
        $user_id = Auth::id();

        return view('mypage')->with(['user_id' => $user_id]);
    }

    //登録情報ページの表示//
    public function getRegistrationInformation($user_id){
        $user_id = Auth::id();
        $registration = User::where('id', $user_id)->first();

        return view('registration_information')->with([
            'registration' => $registration,
            'user_id' => $user_id
        ]);
    }
    //登録情報更新ページの表示//
    public function profile_edit($user_id){
        $user_id = Auth::id();
        $registration = User::where('id', $user_id)->first();

        return view('profile_edit')->with([
            'registration' => $registration,
            'user_id' => $user_id
        ]);
    }

    //プロフィール更新時のDB更新//
    public function profile_update(Request $request)
    {
        $user_id = $request->id;

        $param = [
            'id' => $request->id,
            'nickname'=>$request->nickname,
            'email' => $request->email,
            'img_url' => $request->img_url,
            'score' => $request->score,
            'self_produce' => $request->self_produce,
            'message'=> $request->message,
        ];
        

        User::where('id', $user_id)->update($param);

        return view('profile_update')->with(['user_id'=> $user_id]);
    }

    public function showProfileUpdated($id){

        $user_id = $id;
        return view('profile_update')->with(['user_id'=>$user_id]);
    }

    public function showLogout(){
        return view('logout_page');
    }

}
