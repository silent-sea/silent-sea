<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href='//fonts.googleapis.com/css?family=Merriweather|Montserrat:400,700|Dancing+Script:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <title>Frog and Veil</title>

    {!! Html::style('css/owl.carousel.css') !!}
    {!! Html::style('css/owl.theme.css') !!}
    {!! Html::style('css/app.css') !!}

    {!! Html::script('js/jquery-1.9.1.min.js') !!}
    {!! Html::script('js/owl.carousel.js') !!}

</head>

<body>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>