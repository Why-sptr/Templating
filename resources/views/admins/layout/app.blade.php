<!doctype html>
<html lang="en" class="light-theme">
@include('admins.layout.head')
<body>

    @include('admins.layout.header')

    @yield('content')

    @include('admins.layout.sidebar')

    @include('admins.layout.script')

</body>

</html>