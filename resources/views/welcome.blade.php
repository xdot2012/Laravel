<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="crsf-token" content="{{ csrf_token() }}">
        <script> window.Laravel="{ crsfToken: '{{ csrf_token() }}'}"> </script>
        <title>My app</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <div id="app">
            <div class="container">
                <example-component />
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>
