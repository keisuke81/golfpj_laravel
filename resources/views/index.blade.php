@component('components.header')
@endcomponent

<body>
  @component('components.menu',['user_id' => $user_id])
  @endcomponent
  <div class="wrapper">
    <a class="btn" href="/register">新規登録</a>
    <a class="btn" href="/login">ログイン</a>
  </div>
</body>