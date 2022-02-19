<!DOCTYPE html>
<html lang="ja">

<head>
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('/css/reset.css')}}" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <title>confirm_page</title>
</head>

<body>
  <h1>応募内容内容確認</h1>

  <!--フォーム開始-->
  <form action="/done" method="post">
    @csrf
    <table class="table offer_table">
      <!--日にち-->
      <tr>
        <th>日にち</th>
        <td>
          <input type="hidden" name="date" value="{{$inputs['date']}}">
          {{$inputs['date']}}
        </td>
      </tr>

      <!--時間-->
      <tr>
        <th>スタート時間</th>
        <td>
          <input type="hidden" name="start_at" value="{{$inputs['start_at']}}">
          {{$inputs['start_at']}}
        </td>
      </tr>
      <!--エリア-->
      <tr>
        <th>ゴルフ場エリア</th>
        <td>
          <input type="hidden" name="area_id" value="{{$inputs['area_id']}}">
          {{$area_name}}
        </td>
      </tr>

      <!--ゴルフ場名-->
      <tr>
        <th>ゴルフ場名</th>
        <td>
          <input type="hidden" id="golf_course" name="golf_course" value="{{$inputs['golf_course']}}">
          {{$inputs['golf_course']}}
        </td>
      </tr>

      <!--男性人数-->
      <tr>
        <th>男性の人数</th>
        <td>
          <input type="hidden" name="num_of_players_men" value="{{$inputs['num_of_players_men']}}">
          {{$inputs['num_of_players_men']}}名
        </td>
      </tr>

      <!--女性の人数-->
      <tr>
        <th>女性の人数</th>
        <td>
          <input type="hidden" name="num_of_players_women" value="{{$inputs['num_of_players_women']}}">
          {{$inputs['num_of_players_women']}}名
        </td>
      </tr>

      <!--男性のレベル-->
      <tr>
        <th>男性のレベル</th>
        <td>
          <input type="hidden" name="mens_level_id" value="{{$inputs['mens_level_id']}}">
          {{$mens_level_name}}
        </td>
      </tr>

      <!--求めるレベル-->
      <tr>
        <th>求めるレベル</th>
        <td>
          <input type="hidden" name="required_level_id" value="{{$inputs['required_level_id']}}">
          {{$required_level_name}}
        </td>
      </tr>

      <!--求める年齢-->
      <tr>
        <th>求める年齢</th>
        <td>
          <input type="hidden" name="required_age_min" value="{{$inputs['required_age_min']}}">
          {{$inputs['required_age_min']}}歳〜 <input type="hidden" name="required_age_max" value="{{$inputs['required_age_max']}}">{{$inputs['required_age_max']}}歳
        </td>
      </tr>

      <!--オファーするユーザー名-->
      <input type="hidden" name="user_id" id="user_id" value={{$user_id}}>
      <!--オファーするユーザーの年齢-->
      <input type="hidden" name="age" id="age" value=>
    </table>

    <!--申し込みフォーム-->
    <button name="offer" value="ture">コンパニオンを募集する</button>
    <button name="back" value="true">内容を修正する</button>
  </form>

</body>