@extends('admin.layouts.master')
@section('title')
    {{ $judul }}
@endsection
@section('breadcrumbs')
    {{ Breadcrumbs::render() }}
@endsection
@push('css-page')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('template/admin/assets/js/plugins/magnific-popup/magnific-popup.css') }}">
@endpush
@section('content')
    <div class="content">

        <div class="block block-rounded">
            <div class="block-content text-center">
                <div class="py-4">
                    <div class="mb-3">
                        <img class="img-fluid" src="{{ asset('template/admin/assets/media/avatars/avatar13.jpg') }}"
                            alt="">
                    </div>
                    <h1 class="fs-lg mb-0">
                        <span>{{ $data->nama }}</span>
                    </h1>
                    <h6 class="text-muted">{{ $data->nip }}</h6>
                </div>
            </div>
            <div class="block-content bg-body-light text-center">
                <div class="row items-push text-uppercase">
                    <div class="col-6 col-md-3">
                        <div class="fw-semibold text-dark mb-1">Jabatan</div>
                        <h6 class="link-fx fs-3 text-primary">{{ $data->get_jabatan->nama_jabatan }}</h6>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="fw-semibold text-dark mb-1">Status</div>
                        <h6 class="link-fx fs-3 text-primary">{{ $data->get_status->nama_status }}</h6>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="fw-semibold text-dark mb-1">Tanggal Daftar</div>
                        <h6 class="link-fx fs-3 text-primary">
                            {{ \Carbon\Carbon::parse($data->tgl_daftar)->locale('id')->isoFormat(' D MMMM Y') }}</h6>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="fw-semibold text-dark mb-1">NIP</div>
                        <h6 class="link-fx fs-3 text-primary">{{ $data->nip }}</h6>
                    </div>
                </div>
            </div>
            <div class="block-content bg-body-light text-center">
                <div class="row items-push text-uppercase">
                    <div class="col-6 col-md-3">
                        <div class="fw-semibold text-dark mb-1">NPWP</div>
                        <h6 class="link-fx fs-3 text-primary">{{ $data->npwp }}</h6>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="fw-semibold text-dark mb-1">Agama</div>
                        <h6 class="link-fx fs-3 text-primary">
                            {{ $data->agama }}</h6>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="fw-semibold text-dark mb-1">Tanggal Lahir</div>
                        <h6 class="link-fx fs-3 text-primary">
                            {{ \Carbon\Carbon::parse($data->tgl_lahir)->locale('id')->isoFormat(' D MMMM Y') }}</h6>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="fw-semibold text-dark mb-1">Pendidikan</div>
                        <h6 class="link-fx fs-3 text-primary">
                            {{ $data->get_pendidikan->nama_pendidikan }}</h6>
                    </div>

                </div>
            </div>
            <div class="block-content bg-body-light text-center">
                <div class="row items-push text-uppercase">
                    <div class="col-6 col-md-3">
                        <div class="fw-semibold text-dark mb-1">Alamat</div>
                        <h6 class="link-fx fs-3 text-primary">{{ $data->alamat }}</h6>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="fw-semibold text-dark mb-1">Email</div>
                        <h6 class="link-fx fs-3 text-primary">
                            {{ $data->email }}</h6>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="fw-semibold text-dark mb-1">Telpon</div>
                        <h6 class="link-fx fs-3 text-primary"> {{ $data->telpon }}</h6>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="fw-semibold text-dark mb-1">Telpon</div>
                        <h6 class="link-fx fs-3 text-primary"> {{ $data->telpon }}</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- END User Info -->

        <!-- Addresses -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Berkas Data Diri</h3>
            </div>
            <div class="block-content">
                <div class="row">

                    <div class="col-lg-3">
                        <!-- Shipping Address -->
                        <div class="block block-rounded block-bordered">
                            <div class="block-header border-bottom">
                                <h3 class="block-title">Berkas Foto Diri</h3>
                            </div>
                            <div class="block-content">
                                <article class="story">
                                    <div class="row g-sm items-push js-gallery push img-fluid-100">
                                        <div class="col-12 animated fadeIn">
                                            <a class="img-link img-link-simple img-link-zoom-in img-lightbox"
                                                href="{{ asset('template/admin/assets/media/photos/photo19@2x.jpg') }}">
                                                <img class="img-fluid"
                                                    src="{{ asset('template/admin/assets/media/photos/photo19.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <!-- END Shipping Address -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Shipping Address -->
                        <div class="block block-rounded block-bordered">
                            <div class="block-header border-bottom">
                                <h3 class="block-title">Berkas Foto KTP</h3>
                            </div>
                            <div class="block-content">
                                <article class="story">
                                    <div class="row g-sm items-push js-gallery push img-fluid-100">
                                        <div class="col-12 animated fadeIn">
                                            <a class="img-link img-link-simple img-link-zoom-in img-lightbox"
                                                href="{{ asset('template/admin/assets/media/photos/photo19@2x.jpg') }}">
                                                <img class="img-fluid"
                                                    src="{{ asset('template/admin/assets/media/photos/photo19.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <!-- END Shipping Address -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Shipping Address -->
                        <div class="block block-rounded block-bordered">
                            <div class="block-header border-bottom">
                                <h3 class="block-title">Berkas Foto NPWP</h3>
                            </div>
                            <div class="block-content">
                                <article class="story">
                                    <div class="row g-sm items-push js-gallery push img-fluid-100">
                                        <div class="col-12 animated fadeIn">
                                            <a class="img-link img-link-simple img-link-zoom-in img-lightbox"
                                                href="{{ asset('template/admin/assets/media/photos/photo19@2x.jpg') }}">
                                                <img class="img-fluid"
                                                    src="{{ asset('template/admin/assets/media/photos/photo19.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <!-- END Shipping Address -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Shipping Address -->
                        <div class="block block-rounded block-bordered">
                            <div class="block-header border-bottom">
                                <h3 class="block-title">Berkas Foto IJAZAH</h3>
                            </div>
                            <div class="block-content">
                                <article class="story">
                                    <div class="row g-sm items-push js-gallery push img-fluid-100">
                                        <div class="col-12 animated fadeIn">
                                            <a class="img-link img-link-simple img-link-zoom-in img-lightbox"
                                                href="{{ asset('template/admin/assets/media/photos/photo19@2x.jpg') }}">
                                                <img class="img-fluid"
                                                    src="{{ asset('template/admin/assets/media/photos/photo19.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <!-- END Shipping Address -->
                    </div>

                </div>
            </div>
        </div>
        <!-- END Addresses -->
        <a href="{{ route('pegawai.index') }}" class="btn btn-info mb-4">Kembali</a>
    </div>
@endsection
@push('js-page')
    <!-- jQuery (required for Magnific Popup plugin) -->
    <script src="{{ asset('template/admin/assets/js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('template/admin/assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Page JS Helpers (Magnific Popup Plugin) -->
    <script>
        One.helpersOnLoad(['jq-magnific-popup']);
    </script>
@endpush
