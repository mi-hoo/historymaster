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
 <div class="box2">
 <div class="col-md-4">
    <div class="box1">
    @foreach($categories as $category)
    <div class="box">
    <h4><i class="fas fa-crow"></i> {{ $category->name }}</h4>
    @foreach($category->units as $unit)
    <p><a href="{{ action('Admin\QuestionController@open', ['id' => $unit->id]) }}">{{ $unit->title }}</a></p>
    @endforeach
    </div>
    @endforeach
    </div>
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