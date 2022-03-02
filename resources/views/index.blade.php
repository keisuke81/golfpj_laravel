<!DOCTYPE html>
<html lang="ja">

<head>
  <link href="http://golfpj.herokuapp.com/css/reset.css">
  <link href="http://golfpj.herokuapp.com/css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <title>top_page</title>
</head>

<body>
  @component('components.menu')
  @endcomponent
  <div class="wrapper">
    <a class="btn" href="/register">新規登録する</a>
    <a class="btn" href="/login">ログインする</a>
  </div>


</body>