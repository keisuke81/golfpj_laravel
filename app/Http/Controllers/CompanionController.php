<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Companion;
use App\Models\Follow;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CompanionController extends Controller
{
    //「キャストから誘う」のキャスト一覧表示//
    public function ShowCast()
    {
        $items = Companion::get();
        $birthday = Companion::select('birthday');
        $today = date("Y-m-d");
        
        


        return view('offer_cast')->with([
            'items' => $items,
            
        ]);
    }

    //年齢で絞る//
    public function ShowCastAge(Request $request){
        $min = $request->required_age_min;
        $max = $request->required_age_max;

        $items = Companion::wherebetween('age',[$min, $max] )->get();

        return view('offer_cast_age')->with([
            'items' => $items,
            'min' => $min,
            'max' => $max
        ]);
    }

    public function getDetail(Companion $id){
        $item = Companion::find($id)->last();

        return view('detail')->with([
            'item' => $item,
        ]);
    }

    //ログイン時のみ動作有効//
    public function __construct()
    {
        $this->middleware(['auth', 'verified'])->only(['getFllow', 'noFollow']);
    }



    //お気に入り登録//
    public function getFollow($id)
    {
       Follow::create([
            'member_id' => Auth::id(),
            'companion_id' => $id,
        ]);

        return redirect()->back();
    }

    //お気に入り解除//
    public function noFollow($id)
    {
        $follow = Follow::where('companion_id', $id)->where('member_id', Auth::id())->first();
        $follow->delete();

        return redirect()->back();
    }

}
