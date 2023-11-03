<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora" />
    <link href="{{asset('/assets/fontawesome-free-6.4.2-web/css/fontawesome.css')}}" rel="stylesheet" />
    <link href="{{asset('/assets/fontawesome-free-6.4.2-web/css/brands.css')}}" rel="stylesheet" />
    <link href="{{asset('/assets/fontawesome-free-6.4.2-web/css/solid.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />

    <title>@yield('titre')</title>
</head>

<body>
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')

    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <img src="{{asset('assets/icons/navigation.png')}}" alt="Icon indiquant la remonter du scroll vers le haut"
            class="icon-navigation" />
        Top
    </button>

    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
</body>

</html>