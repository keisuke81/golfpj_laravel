<!DOCTYPE html>

<head>
  <title>Pusher Test</title>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/reset.css" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
  @component('components.menu')
  @endcomponent
  <div class="wrapper">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <th>{{$loop->iteration}}</th>
          <td>{{$user->nickname}}</td>
          <td><a href="/chat/{{$user->companion_id}}"><button type="button" class="btn btn-primary">Chat</button></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>