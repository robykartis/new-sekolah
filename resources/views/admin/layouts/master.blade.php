<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>{{ config('app.name') }} | @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description"
        content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('images/app/' . App\Models\Setting::first()->logo) }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('images/app/' . App\Models\Setting::first()->logo) }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/app/' . App\Models\Setting::first()->logo) }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- OneUI framework -->
    <link rel="stylesheet" id="css-main" href="{{ asset('template/admin/assets/css/oneui.min.css') }}">

    @stack('css-page')
</head>

<body>

    <div id="page-container"
        class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">

        <!-- Sidebar -->

        <nav id="sidebar" aria-label="Main Navigation">
            <div class="content-header">
                <!-- Logo -->
                <a class="fw-semibold text-dual" href="index.html">
                    <span class="smini-visible">
                        <i class="fa fa-circle-notch text-primary"></i>
                    </span>
                    <span class="smini-hide fs-5 tracking-wider"><span
                            class="fw-normal">{{ App\Models\Setting::first()->name }}</span></span>
                </a>
                <!-- END Logo -->

                <!-- Extra -->
                <div>
                    <!-- Dark Mode -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout"
                        data-action="dark_mode_toggle">
                        <i class="far fa-moon"></i>
                    </button>
                    <!-- END Dark Mode -->



                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout"
                        data-action="sidebar_close" href="javascript:void(0)">
                        <i class="fa fa-fw fa-times"></i>
                    </a>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Extra -->
            </div>


            <!-- Side Header -->

            <!-- END Side Header -->

            <!-- Sidebar Scrolling -->
            @include('admin.layouts.sidebar.administrator')
            <!-- END Sidebar Scrolling -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        @include('admin.layouts.navbar')

        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            <!-- Hero -->
            <div class="content">
                <div
                    class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center py-1 text-center text-md-start">
                    <div class="flex-grow-1 mb-1 mb-md-0">
                        <h1 class="h3 fw-bold mb-2">
                            @yield('title')
                        </h1>
                    </div>
                    <div class="mt-3 mt-md-0 ms-md-3 space-x-1">
                        @yield('breadcrumbs')
                    </div>
                </div>
            </div>
            <!-- END Hero -->

            <!-- Page Content -->
            @yield('content')
            @yield('modal')
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        @include('admin.layouts.footer')
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->


    <script src="{{ asset('template/admin/assets/js/oneui.app.min.js') }}"></script>



    <!-- Page JS Code -->
    <script src="{{ asset('template/admin/assets/js/pages/be_pages_dashboard.min.js') }}"></script>
    @stack('js-page')
</body>

</html>
