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
            <form method="POST" action="{{ route('contact.confirm') }}">
            @csrf
                <div class="form-group row">
                    <label for="email"class="col-md-3 col-form-label text-md-right">メールアドレス</label>
                    <div class="col-md-6">
                        <input id="email"
                        name="email"
                        value="{{ old('email') }}"
                        type="email"
                        class="form-control{{ $errors->has('email') ? 'is-invalid':''}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="title"class="col-md-3 col-form-label text-md-right">タイトル</label>
                    <div class="col-md-6">
                        <input id="title"
                        name="title"
                        value="{{ old('title') }}"
                        type="text"
                        class="form-control{{ $errors->has('title') ? 'is-invalid':''}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="body"class="col-md-3 col-form-label text-md-right">お問い合わせ内容</label>
                    <div class="col-md-6">
                        <textarea
                        class="form-control{{ $errors->has('body') ? 'is-invalid':''}}" 
                        name="body" 
                        rows="10">
                        {{old('body')}}</textarea>
                    </div>
                </div>
                <div class="col-md-12 mx-auto">
                <input type="submit" class="btn btn-success" value="入力内容確認">
                </div>
            </form>
        </div>
        </div>
    </div>
</body>
@endsection
</html>