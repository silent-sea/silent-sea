<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <title>App Name - @yield('title')</title>
    {!! Html::style('css/app.css') !!}
</head>

<body>
    <div class="container" style="margin-top: 100px;">
        <div class="row topnav">
            <div class="small-2 large-2 columns tc">HOME</div>
            <div class="small-2 large-2 columns tc">COLLECTIONS</div>
            <div class="small-2 large-2 columns tc">DETAILS & PRICES</div>
            <div class="small-2 large-2 columns tc">ABOUT</div>
            <div class="small-2 large-2 columns tc">BLOG</div>
            <div class="small-2 large-2 columns tc">CONTACT</div>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>

</html>