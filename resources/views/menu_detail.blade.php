@component('components.header')
@endcomponent

<body>
  <a href="/" class="batsu"></a>
  　@auth
  <div class="menu1_content">
    <div class="content">
      <a href="/home">Home</a>
    </div>

    <div class="content">
      <a href="/mypage">Mypage</a>
    </div>
  </div>
  @endauth

  @guest
  <div class="menu1_content">
    <div class="content">
      <a href="/home">Home</a>
    </div>
    <div class="content">
      <a href="/register">Registration</a>
    </div>
    <div class="content">
      <a href="/login">Login</a>
    </div>
  </div>
  @endguest
</body>

<style scoped>
  .batsu {
    display: block;
    width: 50px;
    /*枠の大きさ*/
    height: 50px;
    /*枠の大きさ*/
    background: blue;
    position: relative;
    margin-top: 5%;
    left: 5%;
  }

  .batsu::before,
  .batsu::after {
    content: "";
    display: block;
    width: 100%;
    /*バツ線の長さ*/
    height: 3px;
    /*バツ線の太さ*/
    background: white;
    transform: rotate(45deg);
    transform-origin: 0% 50%;
    position: absolute;
    top: calc(20% - 5px);
    left: 14%;
  }

  .batsu::after {
    transform: rotate(-45deg);
    transform-origin: 100% 50%;
    left: auto;
    right: 14%;
  }

  .menu1_content {
    position: absolute;
    color: blue;
    font-size: 30px;
    left: 40%;
    top: 30%;
  }

  .content {
    margin-bottom: 30%;
  }
</style>