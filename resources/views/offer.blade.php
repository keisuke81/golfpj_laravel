<!DOCTYPE html>
<html lang="ja">

<head>
  <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/css/reset.css')}}" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <title>offer_page</title>
</head>

<body>
  <div>
    <form action="/confirm" method="post">
      @csrf
      <table class="table offer_table">
        <!--日にち-->
        <tr>
          <th>日にち</th>
          <td>
            <input type="date" id="today" name="date" class="reserve_date" value="2021-04-01">
          </td>
        </tr>

        <!--時間-->
        <tr>
          <th>スタート時間</th>
          <td>
            <input type="time" name="start_at" id="start_at" min="6:30" max="15:00" value="08:30" >
          </td>
        </tr>        
        <!--エリア-->
        <tr>
          <th>ゴルフ場エリア</th>
          <td>
            <select name="area_id" id="area_id">
              <option value="0">未定</option>
              <option value="1">東京</option>
              <option value="2">神奈川</option>
              <option value="3">埼玉</option>
              <option value="4">千葉</option>
              <option value="5">群馬</option>
              <option value="6">栃木</option>
              <option value="7">茨城</option>
              <option value="8">静岡</option>
            </select>
          </td>
        </tr>

        <!--ゴルフ場名-->
        <tr>
          <th>ゴルフ場名</th>
          <td>
            <input type="text" id="golf_course" name="golf_course">
          </td>
        </tr>

        <!--男性人数-->
        <tr>
          <th>男性の人数</th>
          <td>
            <input type="number" id="num_of_players_men" name="num_of_players_men" value="2">名
          </td>
        </tr>

        <!--女性の人数-->
        <tr>
          <th>女性の人数</th>
          <td>
            <input type="number" id="num_of_players_women" name="num_of_players_women" value="2">名
          </td>
        </tr>

        <!--男性のレベル-->
        <tr>
          <th>男性のレベル</th>
          <td>
            <select name="mens_level_id" id="mens_level_id">
              <option value="1">初級（120以上）</option>
              <option value="2">中級（100~119）</option>
              <option value="3">上級（99以下）</option>
              <option value="4">超上級（80以下）</option>
              <option value="5">特に指定なし</option>
            </select>
          </td>
        </tr>

        <!--求めるレベル-->
        <tr>
          <th>求めるレベル</th>
          <td>
            <select name="required_level_id" id="required_level_id">
              <option value="1">初級（120以上）</option>
              <option value="2">中級（100~119）</option>
              <option value="3">上級（99以下）</option>
              <option value="4">超上級（80以下）</option>
              <option value="5">特に指定なし</option>
            </select>
          </td>
        </tr>

        <!--求める年齢-->
        <tr>
          <th>求める年齢</th>
          <td>
            <input type="number" id="required_age_min" name="required_age_min" value="20">歳〜 <input type="number" id="required_age_max" name="required_age_max" value="30">歳
          </td>
        </tr>

        <!--オファーするユーザー名-->
        <input type="hidden" name="user_id" id="user_id" value={{$user_id}}>
        <!--オファーするユーザーの年齢-->
        <input type="hidden" name="age" id="age" value=>
      </table>

      <!--申し込みフォーム-->
      <button>コンパニオンを募集する</button>
    </form>
  </div>

</body>

<script>
  let date = document.getElementById('today');
  let output_date = document.getElementById('output_date');
  let time = document.getElementById('time');
  let output_time = document.getElementById('output_time');
  let number = document.getElementById('num_of_users');
  let output_number = document.getElementById('output_number');
  timestamp = 0;

  function update() {
    timestamp++;
    window.requestAnimationFrame(update);
    if (timestamp % 10 == 0) {
      output_date.innerHTML = date.value;
      output_time.innerHTML = time.value;
      output_number.innerHTML = number.value;
    }
  }
  update();
  window.onload = function() {
    //今日の日時を表示
    var date = new Date()
    var year = date.getFullYear()
    var month = date.getMonth() + 1
    var day = date.getDate()
    var toTwoDigits = function(num, digit) {
      num += ''
      if (num.length < digit) {
        num = '0' + num
      }
      return num
    }
    var yyyy = toTwoDigits(year, 4)
    var mm = toTwoDigits(month, 2)
    var dd = toTwoDigits(day, 2)
    var ymd = yyyy + "-" + mm + "-" + dd;
    document.getElementById("today").value = ymd;
  }
</script>