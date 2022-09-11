<!doctype html>
<html lang="en">
<head>
    @include('includes.meta')
    @stack('css')
</head>
<body>
    @yield('body')

    @stack('js')
</body>
</html>
