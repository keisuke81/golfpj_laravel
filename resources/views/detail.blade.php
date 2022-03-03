<!DOCTYPE html>
<html lang="ja">

<head>
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/reset.css')}}" rel="stylesheet">
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
    <a class="btn_small" href="/offer_cast">コンパニオン一覧へ</a>
  </div>
  <div class="type_a">
    <div class="type_a_child">
      <div class="card_detail">
        <img class="content-img" src="{{$item->img_url}}">

        <div>
          <p class="name_font">{{$item->nickname}}</p>
        </div>
        <div>
          <p class="age_font">{{$item->age}}歳</p>
        </div>
        <div>
          <p class="score_font">ベストスコア：{{$item->score}}</p>
        </div>
      </div>

      <div class="follows">
        @if($item->is_followed_by_auth_user())
        <a href="{{ route('noFollow', ['id' => $item->id]) }}" class="btn black">フォロー解除</a>
        @else
        <a href="{{ route('getFollow', ['id' => $item->id]) }}" class="btn white">フォローする</a>
        @endif
      </div>

      <div class="chat">
        <a class="btn" href="/chat/{{$item->id}}">Chat</a>
      </div>
    </div>
  </div>

</body>