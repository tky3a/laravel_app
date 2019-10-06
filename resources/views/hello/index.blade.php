@extends('layouts.hello_app')
<style>
    .pagination { font-size:12pt; }
    .pagination li { display:inline-block }
    tr th a:link { color: white; }
    tr th a:visited { color: white; }
    tr th a:hover { color: white; }
    tr th a:active { color: white; }
</style>
@section('title', 'Index')
<p>ここが本文</p>
<p>これは<middleware>google.com</middleware></p>
<p>これは<middleware>yahoo.com</middleware></p>

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
  <p>{{$msg}}</p>
  <table>
    <form class="form" action="/hello" method="post">
      {{ csrf_field() }}
      <tr>
        <th>name:</th>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <th>mail:</th>
        <td><input type="text" name="mail"> </td>
      </tr>
      <tr>
        <th>age:</th>
        <td><input type="text" name="age"></td>
      </tr>
      <tr>
        <th></th>
        <td><input type="submit" value="送信"> </td>
      </tr>
    </form>
  </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
