<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/app.css">

    <script src="/js/app.js"></script>

    <title>Simple project</title>
</head>
<body>
<header>
    @include('inc.nav')
</header>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-8">
            <main>
                @include('inc.messages')
                @yield('content')
            </main>
        </div>
        <div class="col-md-4">
            @include('inc.sidebar')
        </div>
    </div>
</div>
@include('inc.footer')
</body>
</html>
