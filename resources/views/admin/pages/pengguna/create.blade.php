@extends('admin.layouts.master')
@section('title')
    Tambah Pengguna
@endsection
@section('breadcrumbs')
    {{ Breadcrumbs::render() }}
@endsection
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

                        <div class="col-lg-10 col-xl-10">

                            <div class="row mb-4">
                                <div class="col-6">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" placeholder="Masukan Nama Pengguna">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" name="email"
                                        class="form-control  @error('email') is-invalid @enderror" id="email"
                                        placeholder="Masukan Email Pengguna">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-6">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" class="form-control  @error('password') is-invalid @enderror"
                                        id="password" name="password" placeholder="Masukan Password Pengguna">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                                    <input type="password"
                                        class="form-control  {{ $errors->has('password') ? ' text-red' : '' }}"
                                        id="password_confirmation" name="password_confirmation"
                                        placeholder="Masukan Ulang Password Pengguna">
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-4">
                                <div class="col-6">
                                    <label class="form-label" for="one-profile-edit-firstname">Role</label>
                                    <select class="form-control @error('role') is-invalid @enderror" name="role"
                                        id="exampleFormControlSelect1">
                                        <option value="" selected>--- Pilih Role ---</option>
                                        @foreach ($role as $re)
                                            <option value="{{ $re['value'] }}">{{ $re['name'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <div class="mb-4">
                                        <label for="one-profile-edit-avatar" class="form-label">Foto</label>
                                        <input class="form-control @error('foto') is-invalid @enderror" type="file"
                                            name="foto" id="one-profile-edit-avatar">
                                        @error('foto')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row mb-4">

                                <div class="col-6">
                                    <label class="form-label">Foto</label>
                                    <div class="mb-4">
                                        <img class="img-avatar" src="assets/media/avatars/avatar13.jpg" alt="">
                                    </div>
                                </div>
                            </div> --}}

                            <div class="mb-4">
                                <div class="d-sm-flex align-items-center justify-content-between pt-3">
                                    <a href="{{ route('pengguna_app.index') }}" class="btn btn-warning">Kembali</a>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
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
