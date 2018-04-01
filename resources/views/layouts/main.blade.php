<!doctype html>
<html lang="{{ app()->getLocale() }}">
    
    @include('partials._head')

    <body id="page-top">
    	@include('partials._navbar')

        @yield('content')


    </body>

    @include('partials._footer')
    
</html>
