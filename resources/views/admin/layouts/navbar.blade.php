<header id="page-topbar">
    <div class="navbar-header">

        <div class="d-flex align-items-left">
            <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect"
                id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div class="dropdown d-none d-sm-inline-block">
                <button type="button" class="btn header-item waves-effect" aria-expanded="false">
                    <i class="mdi mdi-check-decagram text-primary"></i> {{ Auth::user()->role }}
                </button>

            </div>
        </div>

        <div class="d-flex align-items-center">





            <div class="dropdown d-inline-block ml-2">
                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                        src="{{ asset('images/pengguna/small/small_' . Auth::user()->foto) }}" alt="Header Avatar">
                    <span class="d-none d-sm-inline-block ml-1">{{ Auth::user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-item d-flex align-items-center justify-content-between"
                        href="javascript:void(0)">
                        <span> <i class="mdi mdi-check-decagram text-primary"></i> {{ Auth::user()->role }}</span>

                    </div>
                    {{-- <a class="dropdown-item d-flex align-items-center justify-content-between"
                        href="javascript:void(0)">
                        <span>Profile</span>

                    </a> --}}

                    <a class="btn btn-danger dropdown-item d-flex align-items-center justify-content-between"
                        href="{{ route('logout') }}">
                        <label><i class="mdi mdi-chevron-right-circle text-danger"></i> Log Out</label>
                    </a>
                </div>
            </div>

        </div>
    </div>
</header>
