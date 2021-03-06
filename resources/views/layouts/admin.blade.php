<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        
    </head>
    <body>
        {{-- ここからナビゲーションバー --}}
      <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <a class="navbar-brand" href="/"><i class="fas fa-landmark fa-lg"></i> HistoryMaster</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav4">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">使い方</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('contact.input') }}">お問い合わせ</a>
                </li>
            </ul>
            <div class="my-navbar-control">
     @if(Auth::check())
       <a class="my-navbar-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('messages.Logout') }}
       </a>
       
       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
       </form>
     @else
       <a class="my-navbar-item" href="{{ route('login') }}">ログイン</a>
     @endif
   </div>
        </div>
      </nav>
        {{-- ナビゲーションバー ここまで--}}
            
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            
        </div>
     {{-- フッター--}}   
    <footer class="fixed-bottom container-fluid">
     
      <p class="text-center">Copyright (C) 2020 hogehoge55 All Rights Reserved.</p>
  　 
　　</footer>
    </body>
</html>