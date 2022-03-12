<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Offer;
use App\Models\Area;
use App\Models\Level;
use App\Models\User;

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
    public function Confirm(ClientRequest $request){
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

    public function Offer(ClientRequest $request)
    {
        $user = Auth::user();
        $user_id = Auth::id();

        if($request->get('back')){
            return redirect('/offer')->withInput();
        }

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

    //募集内容確認ページの表示//
    public function getOfferContent(Offer $user_id){
        $user_id = Auth::id();
        $offers = Offer::where('user_id', $user_id)->get();

        foreach($offers as $offer){
            //エリア名の表示//
            $area = Area::where('id', $offer->area_id)->first();
            $offer->area_name = $area->name;

            //男性レベル名の表示//
            $level_mens = Level::where('id', $offer->mens_level_id)->first();
            $offer->mens_level_name = $level_mens->name;

            //求めるレベル名の表示//
            $level_required = Level::where('id', $offer->required_level_id)->first();
            $offer->required_level_name = $level_required->name;
        }

        return view('offer_content')->with(['offers'=>$offers]);
    }

    //募集内容の削除//
    public function delete_offer($id){

        $delete_data = new Offer;
        $delete_data -> where('id', $id)->delete();

        return redirect('/mypage/offer_content');
    }

    //コンパニオン用検索ページの表示//
    public function getOfferSearch()
    {
        $user_id = Auth::id();
        $offers = Offer::get();

        foreach ($offers as $offer) {
            //エリア名の表示//
            $area = Area::where('id', $offer->area_id)->first();
            $offer->area_name = $area->name;

            //男性レベル名の表示//
            $level_mens = Level::where('id', $offer->mens_level_id)->first();
            $offer->mens_level_name = $level_mens->name;

            //求めるレベル名の表示//
            $level_required = Level::where('id', $offer->required_level_id)->first();
            $offer->required_level_name = $level_required->name;
        }

        return view('offer_search')->with(['offers' => $offers]);
    }

    //コンパニオン用　日にちで検索//
    public function getOfferSearchDate(Request $request)
    {
        $user_id = Auth::id();
        $offers = Offer::where('date',$request['search_date'])->get();
        $search_date = $request['search_date'];
        

        foreach ($offers as $offer) {
            //エリア名の表示//
            $area = Area::where('id', $offer->area_id)->first();
            $offer->area_name = $area->name;

            //男性レベル名の表示//
            $level_mens = Level::where('id', $offer->mens_level_id)->first();
            $offer->mens_level_name = $level_mens->name;

            //求めるレベル名の表示//
            $level_required = Level::where('id', $offer->required_level_id)->first();
            $offer->required_level_name = $level_required->name;
        }

        return view('date')->with([
            'offers' => $offers,
            'search_date' => $search_date]);
    }

    //コンパニオンが応募する//
    public function companionoffer($id){
        $user_id = Auth::id();
        $user = User::where('id', $user_id)->first();
        $member_id = $user->member_id;

        $offer =  Offer::where('id',$id)->first();
        $area = Area::where('id', $offer->area_id)->first();
        $offer->area_name = $area->name;

        //男性レベル名の表示//
        $level_mens = Level::where('id', $offer->mens_level_id)->first();
        $offer->mens_level_name = $level_mens->name;

        //求めるレベル名の表示//
        $level_required = Level::where('id', $offer->required_level_id)->first();
        $offer->required_level_name = $level_required->name;


        return view('companionoffer')->with([
            'offer' => $offer,
            'member_id' => $member_id]);
    }

    public function getReserveContent(){
        return view('reserve_content');
    }
}
