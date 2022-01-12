<html>
<head>
    <div style="color: red;background-color:lightgrey; border:1px solid black; ">
    <meta charset="UTF-8"/>
    <title>@yield('title', 'Home Page')</title>
</head>
<body>
    @include('header')
    @yield('reservation_contents')
    @include('footer')
</body>
</html>