@component('components.header')
@endcomponent

<body>
  @component('components.menu',['user_id' => $user_id])
  @endcomponent
  <div class="type_a">
    <div class="type_a_child">
      <h1 class="h1">プロフィール</h1>
      <table class="table">
        <div class="hidden">{{$user_id}}</div>
        <tr>
          <th>お名前</th>
          <td>
            {{$registration->name}}
          </td>
        </tr>

        <tr>
          <th>ニックネーム</th>
          <td>
            {{$registration->nickname}}
          </td>
        </tr>

        <tr>
          <th>メールアドレス</th>
          <td>
            {{$registration->email}}
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
            {{$registration->img_url}}
          </td>
        </tr>

        <tr>
          <th>ベストスコア</th>
          <td>
            {{$registration->score}}
          </td>
        </tr>

        <tr>
          <th>自己紹介</th>
          <td>
            {{$registration->self_produce}}
          </td>
        </tr>

        <tr>
          <th>ひとこと</th>
          <td>
            {{$registration->message}}
          </td>
        </tr>
      </table>

      <div>
        <a class="btn" href="{{route('profile_edit', ['user_id' => $registration->id])}}">プロフィールを更新</a>
      </div>
    </div>
  </div>
</body>