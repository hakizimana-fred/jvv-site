<!DOCTYPE html>
<html lang="en">

@include('layouts.partials.head')

@include('facebook-pixel::head')

<body>
    @include('facebook-pixel::body')


    <!--===== Navbar ===== -->
    @include('layouts.partials.navbar')

    <!--===== Content ===== -->
    @yield('content')
    <!--===== Footer ===== -->
    @include('layouts.partials.footer')
    <!--===== Scripts ===== -->
    <script src="{{ asset('js/core.min.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

</body>

</html>