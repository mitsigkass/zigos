<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zigos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap5.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    </head>
    <!-- The structure of the site stays the same throught the different web pages.
    Creation of new web pages can be made utilizing include and extends methods. -->
    <body>
      <div>
        @include('layouts.inc.navbar')
        @yield('content')
      </div>

<!-- Required files -->
<script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap5.bundle.js') }}"></script>
    </body>
</html>
