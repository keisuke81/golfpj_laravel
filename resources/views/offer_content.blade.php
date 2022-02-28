<!DOCTYPE html>
<html lang="ja">

<head>
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('/css/reset.css')}}" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <title>offer_content</title>
</head>

<body>
  @component('components.menu')
  @endcomponent
  <h1>コンパニオン募集内容</h1>
  <div>
    <a href="/mypage">マイページへ戻る</a>
  </div>

  @if(!isset($offers[0]))
  <div>
    現在募集中の予定はありません。
  </div>
  @else

  @foreach($offers as $offer)

  <table class="table offer_table">
    <tr>
      <th>
        <h2>予約{{$loop->iteration}}</h2>
      </th>
    </tr>
    <!--日にち-->
    <tr>
      <th>日にち</th>
      <td>
        {{$offer->date}}
      </td>
    </tr>

    <!--時間-->
    <tr>
      <th>スタート時間</th>
      <td>
        {{$offer->start_at}}
      </td>
    </tr>
    <!--エリア-->
    <tr>
      <th>ゴルフ場エリア</th>
      <td>
        {{$offer->area_name}}
      </td>
    </tr>

    <!--ゴルフ場名-->
    <tr>
      <th>ゴルフ場名</th>
      <td>
        {{$offer->golf_course}}
      </td>
    </tr>

    <!--男性人数-->
    <tr>
      <th>男性の人数</th>
      <td>
        {{$offer->num_of_players_men}}名
      </td>
    </tr>

    <!--女性の人数-->
    <tr>
      <th>女性の人数</th>
      <td>
        {{$offer->num_of_players_women}}名
      </td>
    </tr>

    <!--男性のレベル-->
    <tr>
      <th>男性のレベル</th>
      <td>
        {{$offer->mens_level_name}}
      </td>
    </tr>

    <!--求めるレベル-->
    <tr>
      <th>求めるレベル</th>
      <td>
        {{$offer->required_level_name}}
      </td>
    </tr>

    <!--求める年齢-->
    <tr>
      <th>求める年齢</th>
      <td>
        {{$offer->required_age_min}}歳〜 {{$offer->required_age_max}}歳
      </td>
    </tr>
  </table>

  <!--キャンセルボタン-->
  <div>
    <a href="{{route('delete_offer', ['id' => $offer->id])}}">募集内容をキャンセル</a>
  </div>
  @endforeach
  @endif
</body>