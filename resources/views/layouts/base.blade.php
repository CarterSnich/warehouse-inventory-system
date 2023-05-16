<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>

    @yield('style')
</head>

@yield('body')

@yield('script')

</html>
