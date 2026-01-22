<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('web.layouts.head')
</head>

<body onload="myFunction()" style="margin:0; @yield('body-scrollable')">
    @include('web.layouts.header')
    @include('web.layouts.colors')
    @yield('content')
    @include('web.layouts.scripts')
</body>

</html>
