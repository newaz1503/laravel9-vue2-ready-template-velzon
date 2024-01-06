<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/dashboard-projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2023 08:41:29 GMT -->
<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/admin/images/')}}/favicon.ico">

    <!-- Layout config Js -->
    <script src="{{asset('assets/admin/js/')}}/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/admin/css/')}}/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/admin/css/')}}/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/admin/css/')}}/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('assets/admin/css/')}}/custom.min.css" rel="stylesheet" type="text/css" />

    @stack('css')

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

    @include('admin.layouts.partials.header')

        <!-- removeNotificationModal -->
        @include('admin.layouts.partials.notificationModal')
        <!-- /.modal -->
        <!-- ========== App Menu ========== -->
        @include('admin.layouts.partials.sidebar')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            @yield('content')
            <!-- End Page-content -->

            @include('admin.layouts.partials.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    @include('admin.layouts.partials.loader')

    @include('admin.layouts.partials.themeCustomizer')

    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/admin/libs/')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/admin/libs/')}}/simplebar/simplebar.min.js"></script>
    <script src="{{asset('assets/admin/libs/')}}/node-waves/waves.min.js"></script>
    <script src="{{asset('assets/admin/libs/')}}/feather-icons/feather.min.js"></script>
    <script src="{{asset('assets/admin/js/')}}/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{asset('assets/admin/js/')}}/plugins.js"></script>

    <!-- apexcharts -->
    <script src="{{asset('assets/admin/libs/')}}/apexcharts/apexcharts.min.js"></script>

    <!-- projects js -->
    <script src="{{asset('assets/admin/js/')}}/pages/dashboard-projects.init.js"></script>

    <!-- App js -->
    <script src="{{asset('assets/admin/js/')}}/app.js"></script>
    @stack('script')
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/dashboard-projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2023 08:41:30 GMT -->
</html>
