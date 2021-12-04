<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GGS</title>

    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0\css\font-awesome.min.css') }}">



    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        /* wa */
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

    </style>
</head>

<body class="antialiased">
    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Content --}}
    {{-- @include('layout.content') --}}
    @yield('contents')

    {{-- footer --}}
    @include('layouts.footer')

    <a id="whatsapp" href="https://api.whatsapp.com/send?phone=+62852-4989-3326&text=Hi!"
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>


</body>
<script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/whatsapp.js')}}"> </script>

</html>
