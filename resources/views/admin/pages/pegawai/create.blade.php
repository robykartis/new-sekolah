@extends('admin.layouts.master')
@section('title')
    {{ $judul }}
@endsection
@section('breadcrumbs')
    {{ Breadcrumbs::render() }}
@endsection
@push('css-page')
    <link rel="stylesheet"
        href="{{ asset('template/admin/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
@endpush
@section('content')
    <div class="content content-boxed">
        <!-- Billing Information -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">{{ $judul }}</h3>
            </div>
            <div class="block-content">
                <form action="{{ route('pengguna_app.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row justify-content-center push">
                        <div class="col-lg-10 col-xl-10 col-md-10">
                            <div class="row mb-4">
                                <div class="col-xl-6">
                                    <label class="form-label" for="nama">Nama Pegawai</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        id="nama" name="nama" placeholder="Masukan Nama Pegawai">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-4">
                                        <label for="one-profile-edit-avatar" class="form-label">Foto Diri</label>
                                        <input class="form-control @error('foto_diri') is-invalid @enderror" type="file"
                                            name="foto_diri" id="one-profile-edit-avatar">
                                        @error('foto_diri')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-xl-6">
                                    <label class="form-label" for="nik">NIK Pegawai</label>
                                    <input type="number" class="form-control @error('nik') is-invalid @enderror"
                                        id="nik" name="nik" placeholder="Masukan NIK Pegawai">
                                    @error('nik')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-4">
                                        <label for="one-profile-edit-avatar" class="form-label">Foto KTP</label>
                                        <input class="form-control @error('foto_ktp') is-invalid @enderror" type="file"
                                            name="foto_ktp" id="one-profile-edit-avatar">
                                        @error('foto_ktp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-xl-6">
                                    <label class="form-label" for="npwp">NPWP Pegawai</label>
                                    <input type="number" class="form-control @error('npwp') is-invalid @enderror"
                                        id="npwp" name="npwp" placeholder="Masukan NPWP Pegawai">
                                    @error('npwp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-4">
                                        <label for="one-profile-edit-avatar" class="form-label">Foto NPWP</label>
                                        <input class="form-control @error('foto_npwp') is-invalid @enderror" type="file"
                                            name="foto_npwp" id="one-profile-edit-avatar">
                                        @error('foto_npwp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-xl-6">
                                    <label class="form-label" for="one-profile-edit-firstname">Jenis Kelamin Pegawai</label>
                                    <select class="form-control @error('role') is-invalid @enderror" name="role"
                                        id="exampleFormControlSelect1">
                                        <option value="" selected>--- Pilih Jenis Kelamin ---</option>
                                        @foreach ($kelamin as $kl)
                                            <option value="{{ $kl['value'] }}">{{ $kl['name'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="one-profile-edit-firstname">Tanggal Lahir
                                            Pegawai</label>
                                        <input type="text" class="js-datepicker form-control" id="example-datepicker1"
                                            name="example-datepicker1" data-week-start="1" data-autoclose="true"
                                            data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">

                                        @error('foto')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-xl-6">
                                    <label class="form-label" for="one-profile-edit-firstname">Agama
                                        Pegawai</label>
                                    <select class="form-control @error('role') is-invalid @enderror" name="role"
                                        id="exampleFormControlSelect1">
                                        <option value="" selected>--- Pilih Agama Pegawai ---</option>
                                        @foreach ($kelamin as $kl)
                                            <option value="{{ $kl['value'] }}">{{ $kl['name'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-6">
                                    <label class="form-label" for="nik">NIP Pegawai</label>
                                    <input type="number" class="form-control @error('nik') is-invalid @enderror"
                                        id="nik" name="nik" placeholder="Masukan NIP Pegawai">
                                    @error('nik')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-xl-4">
                                    <label class="form-label" for="one-profile-edit-firstname">Pendidikan
                                        Pegawai</label>
                                    <select class="form-control @error('role') is-invalid @enderror" name="role"
                                        id="exampleFormControlSelect1">
                                        <option value="" selected>--- Pilih Pendidikan Pegawai ---</option>
                                        @foreach ($kelamin as $kl)
                                            <option value="{{ $kl['value'] }}">{{ $kl['name'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-4">
                                    <label class="form-label" for="nik">Gelar Pegawai</label>
                                    <input type="text" class="form-control @error('nik') is-invalid @enderror"
                                        id="nik" name="nik" placeholder="Masukan Gelar Pegawai">
                                    @error('nik')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-4">
                                    <div class="mb-4">
                                        <label for="one-profile-edit-avatar" class="form-label">Foto Ijazah
                                            Pegawai</label>
                                        <input class="form-control @error('foto_npwp') is-invalid @enderror"
                                            type="file" name="foto_npwp" id="one-profile-edit-avatar">
                                        @error('foto_npwp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-xl-6">
                                    <label class="form-label" for="one-profile-edit-firstname">Jenis Kelamin
                                        Pegawai</label>
                                    <select class="form-control @error('role') is-invalid @enderror" name="role"
                                        id="exampleFormControlSelect1">
                                        <option value="" selected>--- Pilih Jenis Kelamin ---</option>
                                        @foreach ($kelamin as $kl)
                                            <option value="{{ $kl['value'] }}">{{ $kl['name'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="one-profile-edit-firstname">Tanggal Lahir
                                            Pegawai</label>
                                        <input type="text" class="js-datepicker form-control" id="example-datepicker1"
                                            name="example-datepicker1" data-week-start="1" data-autoclose="true"
                                            data-today-highlight="true" data-date-format="mm/dd/yy"
                                            placeholder="mm/dd/yy">

                                        @error('foto')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-12">
                                    <label class="form-label" for="nik">Alamat Pegawai</label>
                                    <textarea name="" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-xl-4">
                                    <label class="form-label" for="one-profile-edit-firstname">Status Pernikahan
                                        Pegawai</label>
                                    <select class="form-control @error('role') is-invalid @enderror" name="role"
                                        id="exampleFormControlSelect1">
                                        <option value="" selected>--- Pilih Status Pernikahan Pegawai ---</option>
                                        @foreach ($kelamin as $kl)
                                            <option value="{{ $kl['value'] }}">{{ $kl['name'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-4">
                                    <label class="form-label" for="one-profile-edit-firstname">Jabatan
                                        Pegawai</label>
                                    <select class="form-control @error('role') is-invalid @enderror" name="role"
                                        id="exampleFormControlSelect1">
                                        <option value="" selected>--- Pilih Jabatan Pegawai ---</option>
                                        @foreach ($kelamin as $kl)
                                            <option value="{{ $kl['value'] }}">{{ $kl['name'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-4">
                                    <label class="form-label" for="one-profile-edit-firstname">Status
                                        Pegawai</label>
                                    <select class="form-control @error('role') is-invalid @enderror" name="role"
                                        id="exampleFormControlSelect1">
                                        <option value="" selected>--- Pilih Status Pegawai ---</option>
                                        @foreach ($kelamin as $kl)
                                            <option value="{{ $kl['value'] }}">{{ $kl['name'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-xl-4">

                                    <label class="form-label" for="one-profile-edit-firstname">Tanggal Lahir
                                        Pegawai</label>
                                    <input type="text" class="js-datepicker form-control" id="example-datepicker1"
                                        name="example-datepicker1" data-week-start="1" data-autoclose="true"
                                        data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">

                                    @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="col-xl-4">
                                    <label class="form-label" for="nik">Email Pegawai</label>
                                    <input type="text" class="form-control @error('nik') is-invalid @enderror"
                                        id="nik" name="nik" placeholder="Masukan Email Pegawai">
                                    @error('nik')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-4">
                                    <label class="form-label" for="nik">Telpon Pegawai</label>
                                    <input type="text" class="form-control @error('nik') is-invalid @enderror"
                                        id="nik" name="nik" placeholder="Masukan Telpon Pegawai">
                                    @error('nik')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="mb-4">
                                <div class="d-sm-flex align-items-center justify-content-between pt-3">
                                    <a href="{{ route('pegawai.index') }}" class="btn btn-warning">Kembali</a>
                                    <button type="submit"
                                        class="btn btn-primary waves-effect waves-light">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Billing Information -->
    </div>
@endsection
@push('js-page')
    <script src="{{ asset('template/admin/assets/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('template/admin/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}">
    </script>
    <script>
        One.helpersOnLoad(['js-flatpickr', 'jq-datepicker', 'jq-maxlength', 'jq-select2', 'jq-masked-inputs',
            'jq-rangeslider'
        ]);
    </script>
@endpush
