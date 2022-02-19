<!DOCTYPE html>
<html lang="ja">

<head>
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('/css/reset.css')}}" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="{{ asset('/js/app.js') }}"></script>
  <title>offer_page</title>
</head>

<body>
  <div>
    <a href="/offer_cast">コンパニオン一覧</a>
  </div>
  <div>
    <img src="{{$item->img_url}}" alt="">
  </div>
  <div>
    <p>{{$item->nickname}}</p>
  </div>
  <div>
    <p>{{$item->age}}歳</p>
  </div>

  <div class="follows">
    @if($item->is_followed_by_auth_user())
    <a href="{{ route('noFollow', ['id' => $item->id]) }}" class="follow-btn">フォロー解除</a>
    @else
    <a href="{{ route('getFollow', ['id' => $item->id]) }}" class="follow-btn">フォローする</a>
    @endif
  </div>

  <div>
    <a href="{{route('getChat', ['id' => $item->id])}}">Chat</a>
  </div>

</body>