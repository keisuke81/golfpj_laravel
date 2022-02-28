<!DOCTYPE html>
<html lang="ja">

<head>
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('/css/reset.css')}}" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <title>top_page</title>
</head>

<body>
  @component('components.menu')
  @endcomponent
  <div>
    <a href="/register">新規登録する</a>
    <a href="/login">ログインする</a>
  </div>
  <div>
    <a href="/offer">日にちで誘う（男性用）</a>
  </div>
  <div>
    <a href="/offer_cast">キャストから誘う</a>
  </div>

  <div>
    <a href="/offer_search">参加できる予定を探す（コンパニオン用）</a>
  </div>
  <div>
    <a href="/mypage">マイページ</a>
  </div>

</body>