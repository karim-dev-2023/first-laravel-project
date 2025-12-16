<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>

<body>
    @include('partial.header')
    <main>
        @yield('content')
    </main>
    @include('partial.footer')
</body>

</html>