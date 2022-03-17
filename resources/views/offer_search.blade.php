@component('components.header')
@endcomponent

<body>
  @component('components.menu',['user_id' => $user_id])
  @endcomponent
  <h1>コンパニオン募集中</h1>
  <div>
    <p>日にちで検索する</p>
    <form action="/offer_search/date" method="get">
      <input type="date" name="search_date" value="{{old('search_date')}}">
      <button>検索</button>
    </form>
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
        <h2>募集{{$loop->iteration}}</h2>
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
  <a href="{{route('companionoffer',['id' => $offer->id])}}">応募する</a>
  @endforeach
  @endif
</body>