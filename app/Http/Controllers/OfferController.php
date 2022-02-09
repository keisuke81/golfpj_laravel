<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Offer;
use App\Models\Area;
use App\Models\Level;

class OfferController extends Controller
{
    //トップページの表示//
    public function index(){
        return view('index');
    }

    //ログイン時のみ動作有効//
    public function __construct()
    {
        $this->middleware(['auth', 'verified'])->only(['ShowOffer']);
    }

    //ゴルフに誘うページの表示//
    public function ShowOffer(){
        $user_id = Auth::id();
        return view('offer',[
            'user_id' => $user_id
        ]);
    }

    //確認ページに進む//
    public function Confirm(Request $request){
        $user = Auth::user();
        $user_id = Auth::id();

        
        $inputs = $request->all();
        //エリア名の表示//
        $area = Area::where('id', $request->area_id)->first();
        $area_name = $area->name;

        //レベル名の表示//
        $mens_level = Level::where('id', $request->mens_level_id)->first();
        $mens_level_name = $mens_level->name;

        $required_level = Level::where('id', $request->required_level_id)->first();
        $required_level_name = $required_level->name;
        
        return view('confirm',[
            'user_id' => $user_id,
            'inputs' => $inputs,
            'area_name' => $area_name,
            'mens_level_name' => $mens_level_name,
            'required_level_name' => $required_level_name

        ]);

    }

    public function Offer(Request $request)
    {
        $user = Auth::user();
        $user_id = Auth::id();

        

        $param = [
            'user_id' => $user_id,
            'area_id' => $request->area_id,
            'golf_course' => $request->golf_course,
            'date' => $request->date,
            'start_at' => $request->start_at,
            'num_of_players_men' => $request->num_of_players_men,
            'num_of_players_women' => $request->num_of_players_women,
            'mens_level_id' => $request->mens_level_id,
            'required_level_id' => $request->required_level_id,
            'required_age_min' => $request->required_age_min,
            'required_age_max' => $request->required_age_max,
        ];

        Offer::create($param);

        return view('done');
    }
}
