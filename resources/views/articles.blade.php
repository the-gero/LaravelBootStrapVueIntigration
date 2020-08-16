<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script defer src="{{ asset('js/app.js') }}"></script>
</head>

<body>

    <div id="app">
        <navbar></navbar>
        <articles></articles>

    </div>

    <script defer src="{{ asset('js/manifest.js') }}"></script>
    <script defer src="{{ asset('js/vendor.js') }}"></script>
</body>

</html>
