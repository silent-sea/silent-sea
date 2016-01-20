<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <title>Frog and Veil</title>
    {!! Html::style('css/app.css') !!}
</head>

<body>
    <div class="container" style="margin-top: 150px;">
        <div class="row topnav">
            <div class="small-2 large-2 columns tc"><a href="#">HOME</a></div>
            <div class="small-2 large-2 columns tc"><a href="#">COLLECTIONS</a></div>
            <div class="small-2 large-2 columns tc"><a href="#">DETAILS & PRICES</a></div>
            <div class="small-2 large-2 columns tc"><a href="#">ABOUT</a></div>
            <div class="small-2 large-2 columns tc"><a href="#">BLOG</a></div>
            <div class="small-2 large-2 columns tc"><a href="#">CONTACT</a></div>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div class="container">
        <div class="row footer">
            <div class="left">Copyright &copy; Frog and Veil 2016</div>
            <div class="right">Contact</div>
        </div>
    </div>
</body>

</html>