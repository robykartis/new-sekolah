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
            <li class="nav-main-heading">Management APP</li>
            <li class="nav-main-item">
                <a class="nav-main-link {{ set_active(['pengguna_app.index', 'pengguna_app.create']) }}"
                    href="{{ route('pengguna_app.index') }}">
                    <i class="nav-main-link-icon si si-users"></i>
                    <span class="nav-main-link-name">Pengguna APP</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link {{ set_active(['setting_app.index', 'setting_app.edit']) }}"
                    href="{{ route('setting_app.index') }}">
                    <i class="nav-main-link-icon si si-settings"></i>
                    <span class="nav-main-link-name">Stting APP</span>
                </a>
            </li>

            <li class="nav-main-heading">Managgement Pegawai</li>

            <li class="nav-main-item {{ set_open(['jabatan.index', 'status.index']) }}">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                    aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-puzzle"></i>
                    <span class="nav-main-link-name">Component Pegawai</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ set_active(['jabatan.index']) }}"
                            href="{{ route('jabatan.index') }}">
                            <span class="nav-main-link-name">Jabatan Pegawai</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ set_active(['status.index']) }}" href="{{ route('status.index') }}">
                            <span class="nav-main-link-name">Status Pegawai</span>
                        </a>
                    </li>

                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_blocks_forms.html">
                            <span class="nav-main-link-name">Pendidikan</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link {{ set_active(['pegawai.index']) }}" href="{{ route('pegawai.index') }}">
                    <i class="nav-main-link-icon si si-user-following"></i>
                    <span class="nav-main-link-name">Pegawai</span>
                </a>
            </li>


        </ul>
    </div>
    <!-- END Side Navigation -->
</div>
