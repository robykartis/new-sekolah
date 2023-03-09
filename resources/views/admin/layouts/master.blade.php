<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>OneUI - Bootstrap 5 Admin Template &amp; UI Framework</title>

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
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- OneUI framework -->
    <link rel="stylesheet" id="css-main" href="{{ asset('template/admin/assets/css/oneui.min.css') }}">


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
                    <span class="smini-hide fs-5 tracking-wider">Oone<span class="fw-normal">UI</span></span>
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

                    <!-- Options -->
                    <div class="dropdown d-inline-block ms-1">
                        <button type="button" class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-brush"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0"
                            aria-labelledby="sidebar-themes-dropdown">
                            <!-- Color Themes -->
                            <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                                data-toggle="theme" data-theme="default" href="#">
                                <span>Default</span>
                                <i class="fa fa-circle text-default"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                                data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" href="#">
                                <span>Amethyst</span>
                                <i class="fa fa-circle text-amethyst"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                                data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#">
                                <span>City</span>
                                <i class="fa fa-circle text-city"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                                data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#">
                                <span>Flat</span>
                                <i class="fa fa-circle text-flat"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                                data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#">
                                <span>Modern</span>
                                <i class="fa fa-circle text-modern"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                                data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" href="#">
                                <span>Smooth</span>
                                <i class="fa fa-circle text-smooth"></i>
                            </a>
                            <!-- END Color Themes -->

                            <div class="dropdown-divider"></div>

                            <!-- Sidebar Styles -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_light"
                                href="javascript:void(0)">
                                <span>Sidebar Light</span>
                            </a>
                            <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_dark"
                                href="javascript:void(0)">
                                <span>Sidebar Dark</span>
                            </a>
                            <!-- END Sidebar Styles -->

                            <div class="dropdown-divider"></div>

                            <!-- Header Styles -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_light"
                                href="javascript:void(0)">
                                <span>Header Light</span>
                            </a>
                            <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_dark"
                                href="javascript:void(0)">
                                <span>Header Dark</span>
                            </a>
                            <!-- END Header Styles -->
                        </div>
                    </div>
                    <!-- END Options -->

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
                    class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center py-2 text-center text-md-start">
                    <div class="flex-grow-1 mb-1 mb-md-0">
                        <h1 class="h3 fw-bold mb-2">
                            Dashboard
                        </h1>
                        <h2 class="h6 fw-medium fw-medium text-muted mb-0">
                            Welcome <a class="fw-semibold" href="be_pages_generic_profile.html">John</a>, everything
                            looks great.
                        </h2>
                    </div>
                    <div class="mt-3 mt-md-0 ms-md-3 space-x-1">
                        <a class="btn btn-sm btn-alt-secondary space-x-1" href="be_pages_generic_profile_edit.html">
                            <i class="fa fa-cogs opacity-50"></i>
                            <span>Settings</span>
                        </a>
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-sm btn-alt-secondary space-x-1"
                                id="dropdown-analytics-overview" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-fw fa-calendar-alt opacity-50"></i>
                                <span>All time</span>
                                <i class="fa fa-fw fa-angle-down"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end fs-sm"
                                aria-labelledby="dropdown-analytics-overview">
                                <a class="dropdown-item fw-medium" href="javascript:void(0)">Last 30 days</a>
                                <a class="dropdown-item fw-medium" href="javascript:void(0)">Last month</a>
                                <a class="dropdown-item fw-medium" href="javascript:void(0)">Last 3 months</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item fw-medium" href="javascript:void(0)">This year</a>
                                <a class="dropdown-item fw-medium" href="javascript:void(0)">Last Year</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>All time</span>
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Hero -->

            <!-- Page Content -->
            @yield('content')
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        @include('admin.layouts.footer')
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->


    <script src="{{ asset('template/admin/assets/js/oneui.app.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('template/admin/assets/js/plugins/chart.js/chart.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('template/admin/assets/js/pages/be_pages_dashboard.min.js') }}"></script>
</body>

</html>
