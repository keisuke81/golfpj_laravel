<!DOCTYPE html>
<html lang="ja">

<head>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/reset.css" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <title>registration_information</title>
</head>

<body>
  @component('components.menu')
  @endcomponent
  <div class="type_a">
    <div class="type_a_child">
      <h1 class="h1">プロフィール</h1>
      <table class="table">
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
        <a class="btn" href="{{route('profile_edit', ['id' => $registration->id])}}">プロフィールを更新</a>
      </div>
    </div>
  </div>
</body>