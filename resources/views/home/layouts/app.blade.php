<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($title) ? $title : 'Home' }} | Biman Sadhu Cancer Treatment</title
    @include('home.include.css')
    @yield('css')

</head>
<body>

    @include('home.include.header')
    @yield('content')
    @include('home.include.footer')
    </div>
    </div>
    <!-- JS here -->
    @include('home.include.scripts')
    @yield('scripts')
</body>
</html>
