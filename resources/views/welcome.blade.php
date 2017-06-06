<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
        <script>
            window.App = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div id="app" style="width:600px; height:800px">
            <graph :labels="['January', 'February', 'March']" :values="[30, 12, 50]"></graph>
            <graph :labels="['April', 'May', 'June']" :values="[300, 120, 500]"></graph>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
