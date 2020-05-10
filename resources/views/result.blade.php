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
        <i class="far fa-circle"></i>
        @else
        <i class="fas fa-times"></i>
        @endif
        </p>
        @foreach($questions as $question)
        <div class="commentary">
        <p>{{ $question->commentary }}</p>
        </div>
        @endforeach
    </div>
    @endforeach
 </div>
</div>
</body>
@endsection
</html>