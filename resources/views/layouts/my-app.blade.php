<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('libraries.style')
</head>

<body>
    @include('components.my-nav-bar')

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                @yield('mainContent')
            </div>
            <div class="col-md-3"></div>

        </div>
    </div>

    @include('libraries.script')
</body>

</html>
