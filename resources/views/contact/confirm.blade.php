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
        <div class="row text-center">
            <div class="col-md-12">
                <form method="POST" action="{{ route('contact.send') }}">
                @csrf
                <div class="row">
                    <label class="col-md-3 col-form-label">メールアドレス</label>
                    <div class="inputs col-md-6 text-left">
                        {{ $inputs['email'] }}
                        <input
                        name="email"
                        value="{{ $inputs['email'] }}"
                        type="hidden">
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label">タイトル</label>
                    <div class="inputs col-md-6 text-left">
                        {{ $inputs['title'] }}
                        <input
                        name="title"
                        value="{{ $inputs['title'] }}"
                        type="hidden">
                    </div>
                </div>    
                <div class="row">    
                    <label class="col-md-3 col-form-label">お問い合わせ内容</label>
                    <div class="inputs col-md-6 text-left">
                        {{ $inputs['body'] }}
                        <input
                        name="body"
                        value="{{ $inputs['body'] }}"
                        type="hidden">
                    </div>
                </div>
                <div class="submit col-md-12 mx-auto">
                    <div class="btn">
                        <button type="submit" class="btn btn-outline-success" name="action" value="back">入力内容修正</button>
                    </div>
                    <div class="btn">
                        <button type="submit" class="btn btn-success" name="action" value="submit">送信</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
@endsection
</html>