<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <title>Frog and Veil</title>
    {!! Html::style('css/app.css') !!}
</head>

<body>
    <div class="container">
        <div class="row logo">
            <div class="large-2 columns"><div class="circle_logo"></div></div>
            <div class="large-10 columns"><p>Frog and Veil</p></div>
        </div>

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
        <div class="row">
            <div class="columns footer">
                <div class="left">Copyright &copy; Frog and Veil 2016</div>
                <div class="right">Contact</div>
            </div>
        </div>
    </div>
</body>

</html>