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
<form method="POST" action="{{ route('contact.send') }}">
    @csrf

    <label>メールアドレス</label>
    {{ $inputs['email'] }}
    <input
        name="email"
        value="{{ $inputs['email'] }}"
        type="hidden">

    <label>タイトル</label>
    {{ $inputs['title'] }}
    <input
        name="title"
        value="{{ $inputs['title'] }}"
        type="hidden">


    <label>お問い合わせ内容</label>
    {!! nl2br(e($inputs['body'])) !!}
    <input
        name="body"
        value="{{ $inputs['body'] }}"
        type="hidden">

    <button type="submit" name="action" value="back">
        入力内容修正
    </button>
    <button type="submit" name="action" value="submit">
        送信する
    </button>
</form>
</div>
</body>
@endsection
</html>