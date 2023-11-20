<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.head')
</head>

<body>
    @include('includes.navbar')
    @include('includes.alert')
    @yield('content')
    @yield('before-script')
    @include('includes.script')
    @yield('after-script')
    @include('includes.footer')
</body>

</html>
