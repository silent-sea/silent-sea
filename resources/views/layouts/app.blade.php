<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href='//fonts.googleapis.com/css?family=Merriweather|Montserrat:400,700|Dancing+Script:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <title>Frog and Veil</title>

    {!! Html::style('css/app.css') !!}
</head>

<body>
    <div class="container">
        <div class="row columns logo">
            <h1>Frog and Veil</h1>
        </div>

        <nav>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">COLLECTIONS</a></li>
                <li><a href="#">DETAILS & PRICES</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </nav>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div class="container">
        <div class="row footer">
            <div class="columns">
                <div class="left">Copyright &copy; Frog and Veil 2016</div>
                <div class="right">Contact</div>
            </div>
        </div>
    </div>
</body>

</html>