<!DOCTYPE html>
<html lang="ja">

<head>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/css/reset.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <title>top_page</title>
</head>

<body>
    @component('components.menu')
    @endcomponent
    <div class="wrapper">
        <div>
            <a class="btn" href="/offer_cast">キャストから探す</a>
        </div>
        <div>
            <a class="btn" href="/offer">日程から探す</a>
        </div>
    </div>    
</body>