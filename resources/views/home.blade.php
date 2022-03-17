<!DOCTYPE html>
<html lang="ja">

<head>
    @component('components.header')
    @endcomponent
    <title>top_page</title>
</head>

<body>
    @component('components.menu',['user_id' => $user_id])
    @endcomponent
    <div class="wrapper">
        <div class="hidden">
            {{$user_id}}
        </div>
        <div>
            <a class="btn" href="/offer_cast">キャストから探す</a>
        </div>
        <div>
            <a class="btn" href="/offer">日程から探す</a>
        </div>
    </div>
</body>