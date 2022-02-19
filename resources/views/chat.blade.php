<!DOCTYPE html>

<head>
  <title>Pusher Test</title>
  <script src=“https://js.pusher.com/3.2/pusher.min.js“></script>
  <script src=“https://cdnjs.cloudflare.com/ajax/libs/push.js/0.0.11/push.min.js”></script>
  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('7ca37ebeaab4961cafc1', {
      cluster: 'ap3'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script>
</head>

<body>
  <h1>Pusher Test</h1>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
      </div>
    </div>

    {{-- チャットルーム  --}}
    <div id="room">
      @foreach($messages as $key => $message)
      {{-- 送信したメッセージ  --}}
      @if($message->send == \Illuminate\Support\Facades\Auth::id())
      <div class="send" style="text-align: right">
        <p>{{$message->message}}</p>
      </div>

      @endif

      {{-- 受信したメッセージ  --}}
      @if($message->recieve == \Illuminate\Support\Facades\Auth::id())
      <div class="recieve" style="text-align: left">
        <p>{{$message->message}}</p>
      </div>
      @endif
      @endforeach
    </div>

    <form>
      <textarea name="message" style="width:100%"></textarea>
      <button type="button" id="btn_send">送信</button>
    </form>

    <input type="hidden" name="send" value="{{$param['send']}}">
    <input type="hidden" name="recieve" value="{{$param['recieve']}}">
    <input type="hidden" name="login" value="{{\Illuminate\Support\Facades\Auth::id()}}">

  </div>
</body>