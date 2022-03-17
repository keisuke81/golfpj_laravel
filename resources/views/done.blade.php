@component('components.header')
@endcomponent

<body>
  @component('components.menu',['user_id' => $user_id])
  @endcomponent
  <div class="type_a">
    <div class="type_a_child">
      <p class="h1">コンパニオンを募集しました</p>
      <a href="/home" class="btn">トップページへ</a>
    </div>
  </div>
</body>