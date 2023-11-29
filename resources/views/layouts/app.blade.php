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
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('titre')</title>
</head>

<body>
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')

    <button onclick="topFunction()" id="myBtn" title="Aller en haut">
        <img src="{{asset('assets/icons/navigation.png')}}" alt="Icon indiquant la remonter du scroll vers le haut"
            class="icon-navigation" />
        Monter
    </button>

    <script src="{{asset('assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @if (Session::has('message'))
    <script>
        toastr.options = {
                "progressBar":true,
                "closeButton":true
            }
            toastr.success("{{ Session::get('message') }}", {timeOut:30000});
    </script>
    @endif

    @if (Session::has('success'))
    <script>
        toastr.options = {
                "progressBar":true,
                "closeButton":true
            }
            toastr.success("{{ Session::get('success') }}", {timeOut:30000});
    </script>
    @endif

    @if (Session::has('error'))
    <script>
        toastr.options = {
                "progressBar":true,
                "closeButton":true
            }
            toastr.error("{{ Session::get('error') }}", {timeOut:30000});
    </script>
    @endif
</body>

</html>