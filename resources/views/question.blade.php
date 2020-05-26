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
    <div class="unit_title col-md-12">
    <h4>{{ $unit->title }}</h4>
    </div>
      <div class="error">
        @if (count($errors) > 0)
         <p>解答が選択されていない問題があります。</br>すべての解答を選択してから「採点する」ボタンを押してください。</p>
        @endif
        </div>
    <div class="question col-md-12">
        @foreach($questions as $question)
        <div class="text">
        <p>@if(count($question->incorrects)>0)
                <i class="fas fa-exclamation-circle"></i>
            @endif
            問{{ $question->id }}　{{ $question->text }}</p>
            <div class="form-check">
            <form action="{{ action('Admin\ResultController@scoring') }}" method="post">
                @csrf
            @foreach($question->choices as $choice)
                <div class="choice">
                <input class="form-check-input" type="radio" name="{{ $question->id }}" value="{{ $choice->id }}" id="{{ $question->id }}" {{ (old($question->id) == $choice->id) ? "checked" : "" }}>
                <label class="form-check-label" for="{{ $question->id }}">{{ $choice->content }}</label>
                </div>
            @endforeach
            </div>
        </div>
        @endforeach
    </div>
    <div class="btn col-md-12">
    <input type="submit" class="btn btn-success btn-lg" value="　採点する　">
    </div>
    </form>
</div>
</div>
<div class="backhome">
    <h5><a href="/">問題一覧に戻る</a></h5>
</div>
</body>
@endsection
</html>