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
 <div class="col-md-12">
    @foreach($choices as $choice)
        <div class="outer_box">
            <p>問{{ $choice->question_id }}
                @if( $choice->is_answer == 1) 
                    <i class="far fa-circle fa-lg"></i>
                @else
                    <i class="fas fa-times fa-lg"></i>
                @endif
            </p>
                <div class="commentary">
                    <p>{{ $choice->question->commentary }}</p>
                </div>
        </div>
    @endforeach
 </div>
</div>
{{--<div class="backhome">
    <h5><a href="{{ action('Admin\ResultController@back') }}">問題一覧に戻る</a></h5>
</div>--}}
</body>
@endsection
</html>