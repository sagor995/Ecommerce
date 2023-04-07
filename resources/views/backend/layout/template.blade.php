<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- header -->
    @include('backend.includes.header')

    <!-- Css -->
    @include('backend.includes.css')

</head>

<body>
    <!--wrapper-->
    <div class="wrapper">

        <!-- menubar -->
        @include('backend.includes.menubar')

        <!-- topbar -->
        @include('backend.includes.topbar')


        <!--start page wrapper -->
        <div class="page-wrapper">
            @yield('body-content')
        </div>
        <!--end page wrapper -->
        @include('backend.includes.footer')
    </div>
    <!--end wrapper-->

    <!-- Js -->
    @include('backend.includes.script')
</body>

</html>