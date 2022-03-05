@component('components.header')
@endcomponent

<body>
  @component('components.menu')
  @endcomponent
  <div class="type_a">
    <div class="type_a_child">
      <div>
        <a class="btn" href="/mypage/offer_content">募集している内容を確認する</a>
      </div>

      <div>
        <a class="btn" href="/mypage/reserve_content">予約内容を確認する</a>
      </div>

      <div>
        <a class="btn" href="/chat_select">チャット</a>
      </div>

      <div>
        <a class="btn" href="/mypage/registration_information">登録情報内容を確認する</a>
      </div>
    </div>
  </div>
</body>