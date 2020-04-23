<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

@extends('layouts.admin')
@section('content')
<body class="body">
<div class="container">
 <p><i class="far fa-grin"></i> こんにちは、{{ Auth::user()->name }}さん</p>
 <h3>問題一覧</h3>
 <div class="row">
 <div class="col-md-4">
    <div class="box">
    <h4><i class="fas fa-crow"></i> 古 代</h4>
     <p><a href="#">人類の誕生と古代文明</a></p>
     <p><a href="#">日本の成り立ちと倭の文明</a></p>
     <p><a href="#">大帝国の出現と律令国家の形成</a></p>
     <p><a href="#">貴族社会の発展</a></p>
     @foreach($quetsion_title1 as $titles)
     <p><a href="#">{{ $titles->title }}</a></p>
    </div>
 </div>
 <div class="col-md-4">
    <div class="box">
    <h4><i class="fas fa-horse-head"></i> 中 世</h4>
     <p><a href="#">問題タイトル</a></p>
     <p><a href="#">問題タイトル</a></p>
     <p><a href="#">問題タイトル</a></p>
     <p><a href="#">問題タイトル</a></p>
     <p><a href="#">問題タイトル</a></p>
    </div>
 </div>
 <div class="col-md-4">
    <div class="box">
    <h4><i class="fas fa-vihara"></i> 近 世</h4>
     <p><a href="#">問題タイトル</a></p>
     <p><a href="#">問題タイトル</a></p>
     <p><a href="#">問題タイトル</a></p>
     <p><a href="#">問題タイトル</a></p>
    </div>
 </div>
 </div>
 <div class="row">
 <div class="col-md-4">
    <div class="box">
    <h4><i class="fas fa-industry"></i> 近 代</h4>
     <p><a href="#">問題タイトル</a></p>
     <p><a href="#">問題タイトル</a></p>
     <p><a href="#">問題タイトル</a></p>
     <p><a href="#">問題タイトル</a></p>
    </div>
 </div>
 <div class="col-md-4">
    <div class="box">
    <h4><i class="fas fa-space-shuttle"></i> 現 代</h4>
     <p><a href="#">問題タイトル</a></p>
     <p><a href="#">問題タイトル</a></p>
     <p><a href="#">問題タイトル</a></p>
     <p><a href="#">問題タイトル</a></p>
    </div>
 </div>
 <div class="col-md-4">
    <div class="box">
    <h4><i class="fas fa-random"></i> シャッフル問題</h4>
     <p><a href="#">問題タイトル</a></p>
     <p><a href="#">問題タイトル</a></p>
     <p><a href="#">問題タイトル</a></p>
     <p><a href="#">問題タイトル</a></p>
    </div>
 </div>
</div>
</div>
</body>
@endsection
</html>