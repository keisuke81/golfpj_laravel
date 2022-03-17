@component('components.header')
@endcomponent

<body>
  @component('components.menu',['user_id' => $user_id])
  @endcomponent
  <h1>コンパニオン募集内容</h1>
  <div>
    <a href="/mypage/{{$user_id}}" class="btn_small">マイページへ戻る</a>
  </div>

  @if(!isset($offers[0]))
  <div class="h1">
    現在募集中の予定はありません。
  </div>
  @else

  @foreach($offers as $offer)
  <div class="wrapper_block">
    <table class="table">
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
      <a class="btn_small_center" href="{{route('delete_offer', ['id' => $offer->id])}}">募集内容をキャンセル</a>
    </div>
  </div>
  @endforeach
  @endif
</body>