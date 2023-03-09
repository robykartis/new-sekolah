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
            <!-- Side Header -->
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
            <!-- END Side Header -->

            <!-- Sidebar Scrolling -->
            <div class="js-sidebar-scroll">
                <!-- Side Navigation -->
                <div class="content-side">
                    <ul class="nav-main">
                        <li class="nav-main-item">
                            <a class="nav-main-link active" href="be_pages_dashboard.html">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Dashboarddd</span>
                            </a>
                        </li>

                        <li class="nav-main-heading">User Interface</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-energy"></i>
                                <span class="nav-main-link-name">Blocks</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_blocks_styles.html">
                                        <span class="nav-main-link-name">Styles</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_blocks_options.html">
                                        <span class="nav-main-link-name">Options</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_blocks_forms.html">
                                        <span class="nav-main-link-name">Forms</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_blocks_themed.html">
                                        <span class="nav-main-link-name">Themed</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_blocks_api.html">
                                        <span class="nav-main-link-name">API</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
            <!-- END Sidebar Scrolling -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="d-flex align-items-center">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-lg-none" data-toggle="layout"
                        data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- END Toggle Sidebar -->

                    <!-- Toggle Mini Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-none d-lg-inline-block"
                        data-toggle="layout" data-action="sidebar_mini_toggle">
                        <i class="fa fa-fw fa-ellipsis-v"></i>
                    </button>
                    <!-- END Toggle Mini Sidebar -->

                    <!-- Open Search Section (visible on smaller screens) -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="d-flex align-items-center">
                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block ms-2">
                        <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center"
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="rounded-circle"
                                src="{{ asset('template/admin/assets/media/avatars/avatar10.jpg') }}"
                                alt="Header Avatar" style="width: 21px;">
                            <span class="d-none d-sm-inline-block ms-2">John</span>
                            <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1 mt-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0"
                            aria-labelledby="page-header-user-dropdown">
                            <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                                <img class="img-avatar img-avatar48 img-avatar-thumb"
                                    src="{{ asset('template/admin/assets/media/avatars/avatar10.jpg') }}"
                                    alt="">
                                <p class="mt-2 mb-0 fw-medium">John Smith</p>
                                <p class="mb-0 text-muted fs-sm fw-medium">Web Developer</p>
                            </div>
                            <div class="p-2">
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="be_pages_generic_inbox.html">
                                    <span class="fs-sm fw-medium">Inbox</span>
                                    <span class="badge rounded-pill bg-primary ms-2">3</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="be_pages_generic_profile.html">
                                    <span class="fs-sm fw-medium">Profile</span>
                                    <span class="badge rounded-pill bg-primary ms-2">1</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span class="fs-sm fw-medium">Settings</span>
                                </a>
                            </div>
                            <div role="separator" class="dropdown-divider m-0"></div>
                            <div class="p-2">
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="op_auth_lock.html">
                                    <span class="fs-sm fw-medium">Lock Account</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="op_auth_signin.html">
                                    <span class="fs-sm fw-medium">Log Out</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END User Dropdown -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->
            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-body-extra-light">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
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
            <div class="content">
                <!-- Overview -->
                <div class="row items-push">
                    <div class="col-sm-6 col-xxl-3">
                        <!-- Pending Orders -->
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                            <div
                                class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">32</dt>
                                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Pending Orders</dd>
                                </dl>
                                <div class="item item-rounded-lg bg-body-light">
                                    <i class="far fa-gem fs-3 text-primary"></i>
                                </div>
                            </div>
                            <div class="bg-body-light rounded-bottom">
                                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>View all orders</span>
                                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                                </a>
                            </div>
                        </div>
                        <!-- END Pending Orders -->
                    </div>
                    <div class="col-sm-6 col-xxl-3">
                        <!-- New Customers -->
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                            <div
                                class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">124</dt>
                                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">New Customers</dd>
                                </dl>
                                <div class="item item-rounded-lg bg-body-light">
                                    <i class="far fa-user-circle fs-3 text-primary"></i>
                                </div>
                            </div>
                            <div class="bg-body-light rounded-bottom">
                                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>View all customers</span>
                                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                                </a>
                            </div>
                        </div>
                        <!-- END New Customers -->
                    </div>
                    <div class="col-sm-6 col-xxl-3">
                        <!-- Messages -->
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                            <div
                                class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">45</dt>
                                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Messages</dd>
                                </dl>
                                <div class="item item-rounded-lg bg-body-light">
                                    <i class="far fa-paper-plane fs-3 text-primary"></i>
                                </div>
                            </div>
                            <div class="bg-body-light rounded-bottom">
                                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>View all messages</span>
                                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                                </a>
                            </div>
                        </div>
                        <!-- END Messages -->
                    </div>
                    <div class="col-sm-6 col-xxl-3">
                        <!-- Conversion Rate -->
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                            <div
                                class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">4.5%</dt>
                                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Conversion Rate</dd>
                                </dl>
                                <div class="item item-rounded-lg bg-body-light">
                                    <i class="fa fa-chart-bar fs-3 text-primary"></i>
                                </div>
                            </div>
                            <div class="bg-body-light rounded-bottom">
                                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>View statistics</span>
                                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                                </a>
                            </div>
                        </div>
                        <!-- END Conversion Rate-->
                    </div>
                </div>
                <!-- END Overview -->

                <!-- Statistics -->
                <div class="row">
                    <div class="col-xl-8 col-xxl-9 d-flex flex-column">
                        <!-- Earnings Summary -->
                        <div class="block block-rounded flex-grow-1 d-flex flex-column">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Earnings Summary</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option"
                                        data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option">
                                        <i class="si si-settings"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
                                <!-- Earnings Chart Container -->
                                <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
                                <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                <canvas id="js-chartjs-earnings"></canvas>
                            </div>
                            <div class="block-content bg-body-light">
                                <div class="row items-push text-center w-100">
                                    <div class="col-sm-4">
                                        <dl class="mb-0">
                                            <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                                                <i class="fa fa-caret-up fs-base text-success"></i>
                                                <span>2.5%</span>
                                            </dt>
                                            <dd class="fs-sm fw-medium text-muted mb-0">Customer Growth</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="mb-0">
                                            <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                                                <i class="fa fa-caret-up fs-base text-success"></i>
                                                <span>3.8%</span>
                                            </dt>
                                            <dd class="fs-sm fw-medium text-muted mb-0">Page Views</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="mb-0">
                                            <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                                                <i class="fa fa-caret-down fs-base text-danger"></i>
                                                <span>1.7%</span>
                                            </dt>
                                            <dd class="fs-sm fw-medium text-muted mb-0">New Products</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Earnings Summary -->
                    </div>
                    <div class="col-xl-4 col-xxl-3 d-flex flex-column">
                        <!-- Last 2 Weeks -->
                        <!-- Chart.js Charts is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                        <div class="row items-push flex-grow-1">
                            <div class="col-md-6 col-xl-12">
                                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                                    <div class="block-content flex-grow-1 d-flex justify-content-between">
                                        <dl class="mb-0">
                                            <dt class="fs-3 fw-bold">570</dt>
                                            <dd class="fs-sm fw-medium text-muted mb-0">Total Orders</dd>
                                        </dl>
                                        <div>
                                            <div
                                                class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-danger bg-danger-light">
                                                <i class="fa fa-caret-down me-1"></i>
                                                2.2%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content p-1 text-center overflow-hidden">
                                        <!-- Total Orders Chart Container -->
                                        <canvas id="js-chartjs-total-orders" style="height: 90px;"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-12">
                                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                                    <div class="block-content flex-grow-1 d-flex justify-content-between">
                                        <dl class="mb-0">
                                            <dt class="fs-3 fw-bold">$5,234.21</dt>
                                            <dd class="fs-sm fw-medium text-muted mb-0">Total Earnings</dd>
                                        </dl>
                                        <div>
                                            <div
                                                class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light">
                                                <i class="fa fa-caret-up me-1"></i>
                                                4.2%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content p-1 text-center overflow-hidden">
                                        <!-- Total Earnings Chart Container -->
                                        <canvas id="js-chartjs-total-earnings" style="height: 90px;"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                                    <div class="block-content flex-grow-1 d-flex justify-content-between">
                                        <dl class="mb-0">
                                            <dt class="fs-3 fw-bold">264</dt>
                                            <dd class="fs-sm fw-medium text-muted mb-0">New Customers</dd>
                                        </dl>
                                        <div>
                                            <div
                                                class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light">
                                                <i class="fa fa-caret-up me-1"></i>
                                                9.3%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content p-1 text-center overflow-hidden">
                                        <!-- New Customers Chart Container -->
                                        <canvas id="js-chartjs-new-customers" style="height: 90px;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Last 2 Weeks -->
                    </div>
                </div>
                <!-- END Statistics -->

                <!-- Recent Orders -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Recent Orders</h3>
                        <div class="block-options space-x-1">
                            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                                data-target="#one-dashboard-search-orders" data-class="d-none">
                                <i class="fa fa-search"></i>
                            </button>
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn btn-sm btn-alt-secondary"
                                    id="dropdown-recent-orders-filters" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-fw fa-flask"></i>
                                    Filters
                                    <i class="fa fa-angle-down ms-1"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-end fs-sm"
                                    aria-labelledby="dropdown-recent-orders-filters">
                                    <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between"
                                        href="javascript:void(0)">
                                        Pending
                                        <span class="badge bg-primary rounded-pill">20</span>
                                    </a>
                                    <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between"
                                        href="javascript:void(0)">
                                        Active
                                        <span class="badge bg-primary rounded-pill">72</span>
                                    </a>
                                    <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between"
                                        href="javascript:void(0)">
                                        Completed
                                        <span class="badge bg-primary rounded-pill">890</span>
                                    </a>
                                    <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between"
                                        href="javascript:void(0)">
                                        All
                                        <span class="badge bg-primary rounded-pill">997</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="one-dashboard-search-orders" class="block-content border-bottom d-none">
                        <!-- Search Form -->
                        <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                            <div class="push">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-alt"
                                        id="one-ecom-orders-search" name="one-ecom-orders-search"
                                        placeholder="Search all orders..">
                                    <span class="input-group-text bg-body border-0">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                            </div>
                        </form>
                        <!-- END Search Form -->
                    </div>
                    <div class="block-content block-content-full">
                        <!-- Recent Orders Table -->
                        <div class="table-responsive">
                            <table class="table table-hover table-vcenter">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th class="d-none d-xl-table-cell">Customer</th>
                                        <th>Status</th>
                                        <th class="d-none d-sm-table-cell text-center">Profit</th>
                                        <th class="d-none d-sm-table-cell text-end">Created</th>
                                        <th class="d-none d-sm-table-cell text-end">Value</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-sm">
                                    <tr>
                                        <td>
                                            <a class="fw-semibold" href="javascript:void(0)">
                                                ORD.00925 </a>
                                            <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                            <a class="fw-semibold" href="javascript:void(0)">Andrea Gardner</a>
                                            <p class="fs-sm fw-medium text-muted mb-0">Photographer</p>
                                        </td>
                                        <td>
                                            <span
                                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <div class="progress mb-1" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 18%;" aria-valuenow="18" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <p class="fs-xs fw-semibold mb-0">18%</p>
                                        </td>
                                        <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">19 min ago
                                        </td>
                                        <td class="d-none d-sm-table-cell text-end">
                                            <strong>$2094,65</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="fw-semibold" href="javascript:void(0)">
                                                ORD.00924 </a>
                                            <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                            <a class="fw-semibold" href="javascript:void(0)">Alice Moore</a>
                                            <p class="fs-sm fw-medium text-muted mb-0">Application Manager</p>
                                        </td>
                                        <td>
                                            <span
                                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <div class="progress mb-1" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 19%;" aria-valuenow="19" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <p class="fs-xs fw-semibold mb-0">19%</p>
                                        </td>
                                        <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">25 min ago
                                        </td>
                                        <td class="d-none d-sm-table-cell text-end">
                                            <strong>$881,76</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="fw-semibold" href="javascript:void(0)">
                                                ORD.00923 </a>
                                            <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                            <a class="fw-semibold" href="javascript:void(0)">Brian Cruz</a>
                                            <p class="fs-sm fw-medium text-muted mb-0">Web developer</p>
                                        </td>
                                        <td>
                                            <span
                                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Pending</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <div class="progress mb-1" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 16%;" aria-valuenow="16" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <p class="fs-xs fw-semibold mb-0">16%</p>
                                        </td>
                                        <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">3 min ago
                                        </td>
                                        <td class="d-none d-sm-table-cell text-end">
                                            <strong>$1647,56</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="fw-semibold" href="javascript:void(0)">
                                                ORD.00922 </a>
                                            <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                            <a class="fw-semibold" href="javascript:void(0)">Lori Moore</a>
                                            <p class="fs-sm fw-medium text-muted mb-0">Web developer</p>
                                        </td>
                                        <td>
                                            <span
                                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Pending</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <div class="progress mb-1" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 6%;" aria-valuenow="6" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <p class="fs-xs fw-semibold mb-0">6%</p>
                                        </td>
                                        <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">15 min ago
                                        </td>
                                        <td class="d-none d-sm-table-cell text-end">
                                            <strong>$1563,85</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="fw-semibold" href="javascript:void(0)">
                                                ORD.00921 </a>
                                            <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                            <a class="fw-semibold" href="javascript:void(0)">Jack Greene</a>
                                            <p class="fs-sm fw-medium text-muted mb-0">Web developer</p>
                                        </td>
                                        <td>
                                            <span
                                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <div class="progress mb-1" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 19%;" aria-valuenow="19" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <p class="fs-xs fw-semibold mb-0">19%</p>
                                        </td>
                                        <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">2 min ago
                                        </td>
                                        <td class="d-none d-sm-table-cell text-end">
                                            <strong>$459,64</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="fw-semibold" href="javascript:void(0)">
                                                ORD.00920 </a>
                                            <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                            <a class="fw-semibold" href="javascript:void(0)">Lori Grant</a>
                                            <p class="fs-sm fw-medium text-muted mb-0">Product Designer</p>
                                        </td>
                                        <td>
                                            <span
                                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Pending</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <div class="progress mb-1" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 12%;" aria-valuenow="12" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <p class="fs-xs fw-semibold mb-0">12%</p>
                                        </td>
                                        <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">8 min ago
                                        </td>
                                        <td class="d-none d-sm-table-cell text-end">
                                            <strong>$2459,46</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="fw-semibold" href="javascript:void(0)">
                                                ORD.00919 </a>
                                            <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                            <a class="fw-semibold" href="javascript:void(0)">Lisa Jenkins</a>
                                            <p class="fs-sm fw-medium text-muted mb-0">Photographer</p>
                                        </td>
                                        <td>
                                            <span
                                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Active</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <div class="progress mb-1" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 24%;" aria-valuenow="24" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <p class="fs-xs fw-semibold mb-0">24%</p>
                                        </td>
                                        <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">3 min ago
                                        </td>
                                        <td class="d-none d-sm-table-cell text-end">
                                            <strong>$492,68</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- END Recent Orders Table -->
                    </div>
                    <div class="block-content block-content-full bg-body-light">
                        <!-- Pagination -->
                        <nav aria-label="Photos Search Navigation">
                            <ul class="pagination pagination-sm justify-content-end mb-0">
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" tabindex="-1"
                                        aria-label="Previous">
                                        Prev
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="javascript:void(0)">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                        Next
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- END Pagination -->
                    </div>
                </div>
                <!-- END Recent Orders -->
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-3">
                <div class="row fs-sm">
                    <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
                        Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold"
                            href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                    </div>
                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                        <a class="fw-semibold" href="https://1.envato.market/AVD6j" target="_blank">OneUI 5.5</a>
                        &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
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
