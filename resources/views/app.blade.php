<html>
<head>
    <title>App Name - @yield('title')</title>
    {!! Html::style('css/app.css') !!}
</head>
<body>

<ul class="menu">
    <li><a href="#">One</a></li>
    <li><a href="#">Two</a></li>
    <li><a href="#">Three</a></li>
    <li><a href="#">Four</a></li>
</ul>

<div class="container">
    @yield('content')
</div>

</body>
</html>

