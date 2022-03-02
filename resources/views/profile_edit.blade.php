<!DOCTYPE html>
<html lang="ja">

<head>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/reset.css" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <title>profile_edit</title>
</head>

<body>
  @component('components.menu')
  @endcomponent
  <a href="/mypage">マイページに戻る</a>

  <form action="/profile_update" method="post">
    @csrf
    <table class="table">
      <tr>
        <th>お名前</th>
        <td>
          {{$registration->name}}
        </td>
      </tr>

      <tr>
        <th>ニックネーム</th>
        <td>
          <input type="text" name="nickname" value="{{$registration->nickname}}">
        </td>
      </tr>

      <tr>
        <th>メールアドレス</th>
        <td>
          <input type="text" name="email" value="{{$registration->email}}">
        </td>
      </tr>


      <tr>
        <th>誕生日</th>
        <td>
          {{$registration->birthday}}
        </td>
      </tr>

      <tr>
        <th>本人画像</th>
        <td>
          <input type="text" name="img_url" value="{{$registration->img_url}}">
        </td>
      </tr>

      <tr>
        <th>ベストスコア</th>
        <td>
          <input type="text" name="score" value="{{$registration->score}}">
        </td>
      </tr>

      <tr>
        <th>自己紹介</th>
        <td>
          <textarea name="self_produce" cols="30" rows="10">{{$registration->self_produce}}</textarea>
        </td>
      </tr>

      <tr>
        <th>ひとこと</th>
        <td>
          <textarea name="message" cols="30" rows="2">{{$registration->message}}</textarea>
        </td>
      </tr>
    </table>

    <button>更新する</button>
  </form>


</body>