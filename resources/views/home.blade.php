<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<body>
@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h5>古代</h5>
        </div>
        <div class="col-md-6">
            <h5>中世</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h5>近世</h5>
        </div>
        <div class="col-md-6">
            <h5>近代</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h5>現代</h5>
        </div>
        <div class="col-md-6">
            <h5>シャッフル問題</h5>
        </div>
    </div>
</div>
@endsection
</body>
</html>