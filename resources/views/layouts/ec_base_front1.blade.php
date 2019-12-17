<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        {{-- 各ページごとにtitleタグを入れるために@yieldで開けて置きます。 --}}
        <title>@yield('title')</title>
        
        <!-- Scripts -->
        {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.con/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを取りこみます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/front.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id ="app">
            {{-- 画面上部に表示するナビゲーションバーです。 --}}

            {{-- ここまでナビゲーションバー --}}
            <main class="py-4">
                {{-- コンテンツをここに入れるため、＠yieldで開けて置きます。 --}}
                @yield('content')
            </main>
        </div>
    </body>
</html>