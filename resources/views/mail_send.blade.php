@component('components.header')
@endcomponent

<body>
  @component('components.menu',['user_id' => $user_id])
  @endcomponent
  <div>
    <p>新着メッセージがあります。</p>
  </div>
</body>