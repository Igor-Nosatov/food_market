<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Базар Маркет: @yield('title')</title>
    <link rel="stylesheet" href="/css/style.bundle.css" />
    <link rel="icon" href="/favicon/favicon.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="/favicon/favicon.svg" type="image/x-icon" />
</head>

<body>
    @include('partials.header')
    <div>
        @yield('content')
    </div>
    @include('partials.footer')
    <script src="/js/bundle.js"></script>
</body>

</html>