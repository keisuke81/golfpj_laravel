<!DOCTYPE html>
<html lang="ja">

<head>
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/reset.css')}}" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <title>mypage</title>
</head>

<body>
  @component('components.menu')
  @endcomponent
  <div class="type_a">
    <div class="type_a_child">
      <div>
        <a class="btn" href="/mypage/offer_content">募集している内容を確認する</a>
      </div>

      <div>
        <a class="btn" href="/mypage/reserve_content">予約内容を確認する</a>
      </div>

      <div>
        <a class="btn" href="/chat_select">チャット</a>
      </div>

      <div>
        <a class="btn" href="/mypage/registration_information">登録情報内容を確認する</a>
      </div>
    </div>
  </div>
</body>