<!DOCTYPE html>
<html lang="ja">

<head>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/reset.css" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <title>menu_btn</title>
</head>

<body>
  <header>
    <h1>LUANA MATCHING</h1>
    <nav class="gnav">
      <ul class="menu">
        <li><a href="/home">ホーム</a></li>
        <li><a href="/offer_cast">キャスト検索</a></li>
        <li><a href="/chat_select">チャット</a></li>
        <li><a href="/mypage">マイページ</a></li>
      </ul>
    </nav>
  </header>
</body>

<style scoped>
  body {
    padding-top: 90px;
    /* ヘッダーの後ろに要素が隠れないようにするため */
  }

  header {
    z-index: 1000;
    width: 100%;
    /* 幅いっぱいを指定 */
    height: 50px;
    /* 高さを50pxに指定 */
    background: #CCC;
    /* 背景色にグレーを指定 */
    padding: 20px 50px;
    /* ヘッダーに上下左右それぞれ余白を指定 */
    box-sizing: border-box;
    /* padding分を含んで幅を100%にするため */
    position: fixed;
    /* ウィンドウを基準に画面に固定 */
    top: 0;
    /* 上下の固定位置を上から0pxにする */
    left: 0;
    /* 左右の固定位置を左から0pxにする */
    display: flex;
    /* 中の要素を横並びにする */
    align-items: center;
    /* 中の要素を上下中央に並べる */
  }

  header .gnav .menu {
    display: flex;
    /* 中の要素を横並びにする */
  }

  header .gnav .menu li {
    list-style: none;
    /* リストの[・]を消す */
  }

  header .gnav .menu li+li {
    margin-left: 40px;
    /* メニューそれぞれに間隔をあけるため */
  }

  h1 {
    margin-right: 40px;
  }

  a {
    text-decoration: none;
    height: 50px;
  }
</style>