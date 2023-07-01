<!DOCTYPE html>
<html lang="en">

    <head>
        <title>DevTech @yield('title')</title>
        <!--meta-->
        @include('devtech.includes.meta')
        <!-- css -->
        @include('devtech.includes.css')
    </head>

    <body>
        <!-- header -->
        <!-- menu -->
        @include('devtech.includes.menu')
        <!-- main section -->
        @yield('body')
        <!-- footer -->
        @include('devtech.includes.footer')

        <!-- js -->
        @include('devtech.includes.js')
    </body>

</html>