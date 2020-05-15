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
    <div class="card-deck">
    @foreach($categories as $category)
        <div class="outer_card col-md-4">
        <div class="card">
        <h4><i class="{{ $category->icon }}"></i> {{ $category->name }}</h4>
            @foreach($category->units as $unit)
                <p><a href="{{ action('Admin\QuestionController@open', ['id' => $unit->id]) }}">{{ $unit->title }}</a></p>
                @if(count($unit->incorrects)>0)
                    <i class="fas fa-exclamation-circle"></i>
                @endif
            @endforeach
        </div>
        </div>
    @endforeach
    </div>
</div>
</body>
@endsection
</html>