@component('components.header')
@endcomponent

<body>
  @component('components.menu')
  @endcomponent
  <a class="btn_small" href="/mypage">マイページに戻る</a>

  <form action="/profile_update" method="post">
    @csrf
    <table class="table">
      <tr>
        <th>id</th>
        <td>
          <input type="hidden" name="id" value="{{$registration->id}}">
        </td>
      </tr>
      <tr>
        <th>お名前</th>
        <td>
          {{$registration->name}}
        </td>
      </tr>

      <tr>
        <th>ニックネーム</th>
        <td>
          <input type="text" name="nickname" value="{{$registration->nickname}}">
        </td>
      </tr>

      <tr>
        <th>メールアドレス</th>
        <td>
          <input type="text" name="email" value="{{$registration->email}}">
        </td>
      </tr>


      <tr>
        <th>誕生日</th>
        <td>
          {{$registration->birthday}}
        </td>
      </tr>

      <tr>
        <th>本人画像</th>
        <td>
          <input type="text" name="img_url" value="{{$registration->img_url}}">
        </td>
      </tr>

      <tr>
        <th>ベストスコア</th>
        <td>
          <input type="text" name="score" value="{{$registration->score}}">
        </td>
      </tr>

      <tr>
        <th>自己紹介</th>
        <td>
          <textarea name="self_produce" cols="30" rows="10">{{$registration->self_produce}}</textarea>
        </td>
      </tr>

      <tr>
        <th>ひとこと</th>
        <td>
          <textarea name="message" cols="30" rows="2">{{$registration->message}}</textarea>
        </td>
      </tr>
    </table>

    <button>更新する</button>
  </form>


</body>