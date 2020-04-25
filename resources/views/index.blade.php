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
    @foreach($unit->whereIn('category_id', [1]) as $value1)
    <p><a href="#">{{ $value1->title }}</a></p>
    @endforeach
    </div>
 </div>
 <div class="col-md-4">
    <div class="box">
    <h4><i class="fas fa-horse-head"></i> 中 世</h4>
     @foreach($unit->whereIn('category_id', [2]) as $value2)
     <p><a href="#">{{ $value2->title }}</a></p>
     @endforeach
    </div>
 </div>
 <div class="col-md-4">
    <div class="box">
    <h4><i class="fas fa-vihara"></i> 近 世</h4>
     @foreach($unit->whereIn('category_id', [3]) as $value3)
     <p><a href="#">{{ $value3->title }}</a></p>
     @endforeach
    </div>
 </div>
 </div>
 <div class="row">
 <div class="col-md-4">
    <div class="box">
    <h4><i class="fas fa-industry"></i> 近 代</h4>
     @foreach($unit->whereIn('category_id', [4]) as $value4)
     <p><a href="#">{{ $value4->title }}</a></p>
     @endforeach
    </div>
 </div>
 <div class="col-md-4">
    <div class="box">
    <h4><i class="fas fa-space-shuttle"></i> 現 代</h4>
     @foreach($unit->whereIn('category_id', [5]) as $value5)
     <p><a href="#">{{ $value5->title }}</a></p>
     @endforeach
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