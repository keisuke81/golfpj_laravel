<!DOCTYPE html>
<html lang="ja">

<head>
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/reset.css')}}" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="{{ asset('/js/app.js') }}"></script>
  <title>offer_page</title>
</head>

<body>
  @component('components.menu')
  @endcomponent
  <div class="type_a">
    <div class="type_a_child">
      <p>年齢で検索</p>
      <form action="/offer_cast_age">
        @csrf
        <input type="number" id="required_age_min" name="required_age_min" value={{$min}}>歳〜 <input type="number" id="required_age_max" name="required_age_max" value={{$max}}>歳

        <button>検索する</button>
      </form>
    </div>
  </div>
  <div class="wrapper">
    @foreach($items as $item)
    <div class="card">

      <img class="content-img" src={{$item->img_url}} />

      <a href="/profile/{{$item->id}}" class="card_link">
        <p class="name_font">{{$item->nickname}}</p>
      </a>
      <div>
        <p class="age_font">{{$item->age}}歳</p>
      </div>
      <div>
        <p class="score_font">ベストスコア：{{$item->score}}</p>
      </div>
    </div>
    @endforeach
  </div>
</body>