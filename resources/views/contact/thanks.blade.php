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
        <div class="thanks col-md-12 mx-auto text-center">
            <h5>{{ __('送信が完了しました。') }}</h5>
        </div>
    </div>
</body>
@endsection
</html>