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

    <p>{{ $unit->title }}</p>
 
    <div class="question col-md-12">
        @foreach($questions as $question)
        <div class="text">
        {{ $question->text }}
            
        </div>
        @endforeach
    </div>
</div>
 

</div>
</body>
@endsection
</html>