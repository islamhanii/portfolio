<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('web.layouts.head')
</head>

<body onload="myFunction()" style="margin:0; @yield('body-scrollable')">
    <!---------------------- preloader starts ---------------------->
    <div id="loader"></div>
    <!---------------------- end of preloader ---------------------->
    <!---------------------- back button starts ---------------------->
    <div class="back"><a href="{{ route('blog') }}" class="mdi mdi-arrow-left-thick"></a></div>
    <!---------------------- end of color back button ---------------------->
    @include('web.layouts.colors')
    @yield('content')
    @include('web.layouts.scripts')
</body>

</html>
