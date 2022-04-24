<html>
    <head>
        <!--↓ここがページごとに変わるということ-->
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{csrf_token()}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstrap4を導入するコード-->
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
    </head>
    <body>
        <!--headerの追加-->
        @component('components.header')
        @endcomponent
        
        <div class="container">
            <!--↓ここがページごとに変わるということ-->
            @yield('content')
        </div>
        
        
        <!--footerの追加-->
        @component('components.footer')
        @endcomponent
        
        
        <!--Bootstrap4を導入するコード-->
        <script src="{{asset('js/app.js')}}"></script>
    </body>
    
    
    
</html>