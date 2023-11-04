<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora" />
    <link href="{{asset('/assets/fontawesome-free-6.4.2-web/css/fontawesome.css')}}" rel="stylesheet" />
    <link href="{{asset('/assets/fontawesome-free-6.4.2-web/css/brands.css')}}" rel="stylesheet" />
    <link href="{{asset('/assets/fontawesome-free-6.4.2-web/css/solid.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href='{{asset('assets/css/app.css')}}' />
    <link rel="stylesheet" href='{{asset('assets/css/bootstrap/css/bootstrap.min.css')}}' />
    <link rel="stylesheet" href='{{asset('assets/css/dataTables.bootstrap5.min.css')}}' />
    <link rel="stylesheet" href='{{asset('assets/css/jquery.dataTables.min.css')}}' />

    <title>@yield('titre')</title>
</head>

<body>
    @include('layouts.private.header')

    @include('layouts.private.sidebar')

    <div class="content">
        @yield('content_private')
    </div>

    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-3.7.0.js')}}"></script>
    <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>