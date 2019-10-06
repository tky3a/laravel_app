<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hello</title>
    <style>
      body {font-size:16pt; color: #999;}
      h1 {
        font-size:100pt;
        text-align:right;
        color:#f6f6f6;
        margin: -50px 0px -100px 0px;
      }
      ul{
        font-size:12px;
      }
      hr{
        margin:25px 100px;
        border-top: 1px dashed #ddd;
      }
      .menu_title{
        font-size: 14px;
        font-weight: bold;
        margin:10px;
        border-bottom:solid 1px #ccc;
        color:#ccc;
      }
    </style>
  </head>
  <body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <ul>
      <p class="menu_title">メニュー</p>
      <li>@show</li>
    </ul>
    <hr size="1">
    <div class="content">
      @yield('content')
    </div>
    <div class="footer">
      @yield('footer')
    </div>
  </body>
</html>
