@component('components.header')
@endcomponent

<body>
  @component('components.menu',['user_id' => $user_id])
  @endcomponent
  <p>募集内容</p>
  <table class="table offer_table">
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

  <h1>コンパニオンを応募する</h1>
  <form action="companion_offer_done" method="post">
    @csrf
    <input type="hidden" name="offer_id" value="{{$offer->id}}">
    <table>
      <tr>
        <th>人数</th>
        <td>
          <input type="number" value="1" name="num_of_companions">
        </td>
      </tr>
      <tr>
        <th>コンパニオンID</th>
        <td>
          {{$member_id}}
        </td>
      </tr>
      <tr>
        <th>コンパニオンID（2人目）</th>
        <td>
          <input type="text" name="companion_id_2">
        </td>
      </tr>
      <tr>
        <th>コンパニオンID（3人目）</th>
        <td>
          <input type="text" name="companion_id_3">
        </td>
      </tr>
      <tr>
        <th>コンパニオンID（4人目）</th>
        <td>
          <input type="text" name="companion_id_4">
        </td>
      </tr>
      <tr>
        <th>電話番号</th>
        <td>
          <input type="text" name="tel">
        </td>
      </tr>
      <tr>
        <th>レベル</th>
        <td>
          <select name="companion_level">
            <option value="1" selected>初級（120以上）</option>
            <option value="2">中級（100~119）</option>
            <option value="3">上級（99以下）</option>
            <option value="4">超上級（80以下）</option>
            <option value="5">特に指定なし</option>
          </select>
        </td>
    </table>
    <button>応募する</button>
  </form>
</body>