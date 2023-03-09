@extends('admin.layouts.master')
@section('title')
    Edit Pengaturan APP
@endsection
@section('breadcrumbs')
    {{ Breadcrumbs::render() }}
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center mt-4">

                <h4>{{ $data->name }} </h4>
                <p class="text-muted mt-3 mb-4">
                    {{ $data->address }}
                </p>


            </div>
        </div><!-- end col -->
    </div><!-- end row -->


    <div class="row mt-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-3 font-weight-bold text-uppercase">INFO</h5>
                    <div id="accordion">
                        <form action="{{ route('setting_app.update', $data->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" value="{{ $data->id }}">
                            <div class="card mb-1">
                                <div class="card-header bg-white border-bottom-0 p-3" id="headingOne">
                                    <h5 class="m-0 font-size-16">
                                        Name
                                    </h5>
                                </div>
                                <div>
                                    <div class="card-body text-muted pt-0">
                                        <input type="text" name="name" value="{{ old('name', $data->name) }}"
                                            class="form-control  @error('name') is-invalid @enderror">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-header bg-white border-bottom-0 p-3" id="headingOne">
                                    <h5 class="m-0 font-size-16">
                                        Address
                                    </h5>
                                </div>
                                <div>
                                    <div class="card-body text-muted pt-0">
                                        <textarea type="text" name="address" class="form-control  @error('address') is-invalid @enderror">{{ $data->address }}</textarea>
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-header bg-white border-bottom-0 p-3" id="headingOne">
                                    <h5 class="m-0 font-size-16">
                                        Email
                                    </h5>
                                </div>
                                <div>
                                    <div class="card-body text-muted pt-0">
                                        <input type="email" name="email" value="{{ old('email', $data->email) }}"
                                            class="form-control  @error('email') is-invalid @enderror">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-header bg-white border-bottom-0 p-3" id="headingOne">
                                    <h5 class="m-0 font-size-16">
                                        Telpon
                                    </h5>
                                </div>
                                <div>
                                    <div class="card-body text-muted pt-0">
                                        <input type="number" name="telpon" value="{{ old('telpon', $data->telpon) }}"
                                            class="form-control  @error('telpon') is-invalid @enderror">
                                        @error('telpon')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                    </div>

                </div>
                <div class="card-footer">
                    <div class="d-sm-flex align-items-center justify-content-between pt-3">
                        <a href="{{ route('setting_app.index') }}" class="btn btn-warning">Kembali</a>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Rubah</button>
                    </div>
                </div>
                </form>
            </div>

        </div> <!-- end col -->

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="mt-0">Logo</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
