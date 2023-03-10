<div class="js-sidebar-scroll">
    <!-- Side Navigation -->
    <div class="content-side">
        <ul class="nav-main">
            <li class="nav-main-item">
                <a class="nav-main-link {{ set_active(['administrator.index']) }}"
                    href="{{ route('administrator.index') }}">
                    <i class="nav-main-link-icon si si-speedometer"></i>
                    <span class="nav-main-link-name">Dashboarddd</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link {{ set_active(['pengguna_app.index', 'pengguna_app.create']) }}"
                    href="{{ route('pengguna_app.index') }}">
                    <i class="nav-main-link-icon si si-users"></i>
                    <span class="nav-main-link-name">Pengguna APP</span>
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
