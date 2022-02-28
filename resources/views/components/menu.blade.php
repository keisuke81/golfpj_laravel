<!DOCTYPE html>
<html lang="ja">

<head>
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('/css/reset.css')}}" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <title>menu_btn</title>
</head>

<body>
  <a href="/menu1" class="menu-toggle">
    <a href="/menu1">
      <div></div>
      <div></div>
      <div></div>
    </a>
  </a>
  </div>
</body>

<style scoped>
  .menu-toggle {
    z-index: 0;
    float: left;
    overflow: hidden;
    position: relative;
    top: 10px;
    left: 10px;
    height: 34px;
    width: 44px;
    display: block;
    box-sizing: border-box;
    background-color: blue;
    border: none;
    padding: 6px 10px;
    margin:1% 100% 3% 1%;
    box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.25);
  }

  .menu-toggle div {

    position: absolute;
    overflow: hidden;
    left: 10px;
    height: 2px;
    background-color: #fff;
    border-radius: 1px;
    display: inline-block;
    box-sizing: border-box;
  }

  .menu-toggle div:nth-of-type(1) {
    top: 6px;
    width: 8px;
  }

  .menu-toggle div:nth-of-type(2) {
    top: 16px;
    width: 24px;
  }

  .menu-toggle div:nth-of-type(3) {
    bottom: 6px;
    width: 8px;
  }
</style>