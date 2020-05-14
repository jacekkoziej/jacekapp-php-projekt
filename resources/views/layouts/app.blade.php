<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Jacek APP') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @include('inc.navbar')
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
