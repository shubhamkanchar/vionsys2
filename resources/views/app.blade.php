<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.css')
        @yield('css')
    </head>
    <body>
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
        @include('partials.script')
        @yield('script')
	</body>
</html>