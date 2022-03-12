@component('components.header')
@endcomponent

<body>
  @component('components.menu')
  @endcomponent
  <div class="type_a">
    <p>プロフィールを更新しました。</p>
  </div>
  <div>
    {{$user_id}}
  </div>
</body>