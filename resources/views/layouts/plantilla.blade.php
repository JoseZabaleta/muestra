<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    <!-- favicon-->
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>

</head>

<body>
   @include('layouts.partials.header')
    <nav></nav>
    @yield('content')

   @include('layouts.partials.footer')
    <script></script>
</body>

</html>
