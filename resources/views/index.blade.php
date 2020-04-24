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
     <p><a href="#">{{ $unit[0]->title }}</a></p>
     <p><a href="#">{{ $unit[1]->title }}</a></p>
     <p><a href="#">{{ $unit[2]->title }}</a></p>
     <p><a href="#">{{ $unit[3]->title }}</a></p>
    </div>
 </div>
 <div class="col-md-4">
    <div class="box">
    <h4><i class="fas fa-horse-head"></i> 中 世</h4>
     <p><a href="#">{{ $unit[4]->title }}</a></p>
     <p><a href="#">{{ $unit[5]->title }}</a></p>
     <p><a href="#">{{ $unit[6]->title }}</a></p>
     <p><a href="#">{{ $unit[7]->title }}</a></p>
    </div>
 </div>
 <div class="col-md-4">
    <div class="box">
    <h4><i class="fas fa-vihara"></i> 近 世</h4>
     <p><a href="#">{{ $unit[8]->title }}</a></p>
     <p><a href="#">{{ $unit[9]->title }}</a></p>
     <p><a href="#">{{ $unit[10]->title }}</a></p>
     <p><a href="#">{{ $unit[11]->title }}</a></p>
    </div>
 </div>
 </div>
 <div class="row">
 <div class="col-md-4">
    <div class="box">
    <h4><i class="fas fa-industry"></i> 近 代</h4>
     <p><a href="#">{{ $unit[12]->title }}</a></p>
     <p><a href="#">{{ $unit[13]->title }}</a></p>
     <p><a href="#">{{ $unit[14]->title }}</a></p>
     <p><a href="#">{{ $unit[15]->title }}</a></p>
    </div>
 </div>
 <div class="col-md-4">
    <div class="box">
    <h4><i class="fas fa-space-shuttle"></i> 現 代</h4>
     <p><a href="#">{{ $unit[16]->title }}</a></p>
     <p><a href="#">{{ $unit[17]->title }}</a></p>
     <p><a href="#">{{ $unit[18]->title }}</a></p>
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