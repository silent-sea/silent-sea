<html>
<head>
    <title>App Name - @yield('title')</title>
    {!! Html::style('css/app.css') !!}
</head>
<body>

<div class="container">
    <ul class="menu">
        <li><a href="#">One</a></li>
        <li><a href="#">Two</a></li>
        <li><a href="#">Three</a></li>
        <li><a href="#">Four</a></li>
    </ul>

    @yield('content')
</div>

</body>
</html>