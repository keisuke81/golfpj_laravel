<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $member_ids =User::select('member_id')->get();
        $min = 10000000; $max = 99999999;

        for ($i = $min; $i <= $max; $i++) {
            while (true) {
                /** 一時的な乱数を作成 */
                $member_id = mt_rand($min, $max);
                dd($member_id);

                /*
     * 乱数配列に含まれているならwhile続行、
     * 含まれてないなら配列に代入してbreak
     */
                if (!in_array($member_id, $member_ids)) {
                    break;
                }
            }
            
        }

        return view('register')->with(['member_id'=>$member_id]);
    }

    public function __construct()
    {
        $this->middleware(['auth', 'verified'])->only(['getMypage']);
    }
    //マイページの表示//
    public function getMypage(){
        return view('mypage');
    }

    //登録情報ページの表示//
    public function getRegistrationInformation(User $user_id){

        $user_id = Auth::id();
        $registration = User::where('id', $user_id)->first();

        return view('registration_information')->with([
            'registration' => $registration
        ]);
    }
    //登録情報更新ページの表示//
    public function profile_edit(User $user_id){
        $user_id = Auth::id();
        $registration = User::where('id', $user_id)->first();

        return view('profile_edit')->with([
            'registration' => $registration
        ]);
    }

    //プロフィール更新時のDB更新//
    public function profile_update(Request $request)
    {
        $user = Auth::user();
        $user_id = Auth::id();

        $param = [
            'nickname'=>$request->nickname,
            'email' => $request->email,
            'img_url' => $request->img_url,
            'score' => $request->score,
            'self_produce' => $request->self_produce,
            'message'=> $request->message,
        ];
        

        User::where('id', $user_id)->update($param);

        return redirect('/mypage/registration_information');
    }

    public function showLogout(){
        return view('logout_page');
    }

}
