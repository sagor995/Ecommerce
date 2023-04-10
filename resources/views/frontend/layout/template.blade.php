<!DOCTYPE html>
<html>

<head>


    @include('frontend.includes.header')
    @yield('page-title')

    @include('frontend.includes.css')
</head>

<body>

    <div class="body">
        @include('frontend.includes.menubar')

        @yield('body-content')

        @include('frontend.includes.footer')
    </div>
    @include('frontend.includes.script')
</body>

</html>