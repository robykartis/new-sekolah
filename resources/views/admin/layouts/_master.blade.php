<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('template/admin/assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('template/admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/admin/assets/css/theme.min.css') }}" rel="stylesheet" type="text/css" />

    @stack('css-page')

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="header-border"></div>
        @include('admin.layouts.navbar')

        <!-- ========== Left Sidebar Start ========== -->

        @if (Auth::user()->role == 'administrator')
            @include('admin.layouts.sidebar.administrator')
        @elseif(Auth::user()->role == 'kepala_sekolah')
            @include('admin.layouts.sidebar.kepala_sekolah')
        @elseif(Auth::user()->role == 'guru_sekolah')
            @include('admin.layouts.sidebar.guru_sekolah')
        @elseif(Auth::user()->role == 'staff_sekolah')
            @include('admin.layouts.sidebar.staff_sekolah')
        @elseif(Auth::user()->role == 'orangtua_siswa')
            @include('admin.layouts.sidebar.orangtua_siswa')
        @else
            @include('admin.layouts.sidebar.siswa')
        @endif
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">@yield('title')</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        @yield('breadcrumbs')
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    @yield('content')
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('admin.layouts.footer')

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>


    <!-- jQuery  -->
    <script src="{{ asset('template/admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/admin/assets/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('template/admin/assets/js/waves.js') }}"></script>
    <script src="{{ asset('template/admin/assets/js/simplebar.min.js') }}"></script>


    <!-- Sparkline Js-->
    <script src="{{ asset('template/admin/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Js-->
    <script src="{{ asset('template/admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>

    <!-- Chart Custom Js-->
    <script src="{{ asset('template/admin/assets/pages/knob-chart-demo.js') }}"></script>


    <!-- Morris Js-->
    <script src="{{ asset('template/admin/plugins/morris-js/morris.min.js') }}"></script>

    <!-- Raphael Js-->
    <script src="{{ asset('template/admin/plugins/raphael/raphael.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('template/admin/assets/pages/dashboard-demo.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('template/admin/assets/js/theme.js') }}"></script>


    @stack('js-page')

</body>

</html>
