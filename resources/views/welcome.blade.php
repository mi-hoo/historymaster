<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
@extends('layouts.admin')
@section('content')
    <div class="jumbotron">
     <div class="clearfix">
      <div class="float-left">
       <h1>無料で学べる</h1>
        <h1>中学歴史Web学習サイト</h1>
        <p>サブテキストサブテキストサブテキストサブテキストサブテキストサブテキスト</br>
        サブテキストサブテキストサブテキストサブテキストサブテキストサブテキスト</p>
        <a class="btn btn-success btn-lg" href="{{ route('register') }}" role="button">学習を始める（ユーザー登録） »</a>
       </div>
      </div>
     </div>
    <div class="container">
     <h2>HistoryMasterの特徴</h2>
     <div class="feature">
     <div class="row text-center">
      <div class="col-md-4">
        <i class="far fa-id-card fa-3x"></i>
        <h5>必要なのはユーザー登録だけ！</br>すぐに学習を始めることができます</h5>
      </div>
      <div class="col-md-4">
        <i class="far fa-check-square fa-3x"></i>
        <h5>問題を解いたらワンクリックで採点</br>結果と解説を確認できます</h5>
      </div>
      <div class="col-md-4">
        <i class="fas fa-robot fa-3x"></i>
        <h5>間違えた問題は自動で記録</br>解き直しが簡単にできます</h5>
      </div>
      </div>
      <div classs="row">
    　 <div class="col-md-6 offset-md-3">
        <a class="btn btn-secondary" href="#" role="button">使い方を詳しく見る</a>
       </div>
      </div>
     </div>
    </div>
    
@endsection
</html>