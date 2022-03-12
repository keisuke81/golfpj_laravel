@component('components.header')
@endcomponent

<body>
  @component('components.menu')
  @endcomponent
  <div>
    
  </div>
  <div class="type_a">
    <p>プロフィールを更新しました。</p>
  </div>
  <div>
    <a href="/mypage/{{$user_id}}">マイページに戻る</a>
  </div>
</body>