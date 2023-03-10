@extends('admin.layouts.master')
@section('title')
    Edit Pengaturan APP
@endsection
@section('breadcrumbs')
    {{ Breadcrumbs::render() }}
@endsection
@section('content')
    <div class="content content-boxed">
        <!-- User Profile -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">User Profile</h3>
            </div>
            <div class="block-content">
                <form action="{{ route('setting_app.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row justify-content-center push">

                        <input type="hidden" value="{{ $data->id }}">
                        <div class="col-lg-10 col-xl-10">
                            <div class="row mb-4">
                                <div class="col-6">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" class="form-control  @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ old('name', $data->name) }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email', $data->email) }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-6">
                                    <label class="form-label" for="telpon">Telpon</label>
                                    <input type="number" class="form-control @error('telpon') is-invalid @enderror"
                                        id="telpon" name="telpon" value="{{ old('telpon', $data->telpon) }}">
                                    @error('telpon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="one-profile-edit-avatar" class="form-label">Choose a new avatar</label>
                                    <input class="form-control" name="logo" type="file" id="one-profile-edit-avatar">
                                    @error('logo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="address">Address</label>
                                <textarea class="form-control @error('address') is-invalid @enderror" name="address">{{ old('address', $data->address) }}</textarea>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-4 text-center">
                                <label class="form-label">Logo</label>
                                <div class="mb-4">

                                    <img class="img-avatar" src="{{ asset('images/app/' . $data->logo) }}"
                                        alt="logo {{ $data->name }}">
                                </div>

                            </div>
                            <div class="mb-4">
                                <div class="d-sm-flex align-items-center justify-content-between pt-3">
                                    <a href="{{ route('setting_app.index') }}" class="btn btn-warning">Kembali</a>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END User Profile -->
    </div>
@endsection
