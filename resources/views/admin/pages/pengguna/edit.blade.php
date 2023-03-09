@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-9">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $judul }} </h4>
                    <form action="{{ route('pengguna_app.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="simpleinput">Nama Pengguna</label>
                                    <input type="text" name="name" value="{{ old('name', $data->name) }}"
                                        id="simpleinput" class="form-control  @error('name') is-invalid @enderror"
                                        placeholder="Masukan Nama Pengguna">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="example-password">Email Pengguna</label>
                                    <input type="email" name="email" value="{{ old('email', $data->email) }}"
                                        id="example-password" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Masukan Alamat Email Pengguna">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="example-password">Masukan Password</label>
                                    <input type="password" name="password" value="{{ old('password') }}"
                                        id="example-password" class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Masukan Password Pengguna">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="example-password">Ulangi Password</label>
                                    <input type="password" name="password_confirmation" id="example-password"
                                        class="form-control {{ $errors->has('password') ? ' text-red' : '' }}"
                                        placeholder="Masukan Ulang Password Pengguna">
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pilih Role Pengguna</label>
                                    <select class="form-control @error('role') is-invalid @enderror" name="role"
                                        id="exampleFormControlSelect1">
                                        <option value="">--- Pilih Role ---</option>
                                        @foreach ($role as $item)
                                            <option value="{{ $item['value'] }}"
                                                {{ $data->role == $item['value'] ? 'selected' : '' }}>{{ $item['name'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Foto Pengguna</label>
                                    <div class="custom-file">
                                        <input type="file" name="foto"
                                            class="custom-file-input @error('foto') is-invalid @enderror" id="customFile">
                                        @error('foto')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label class="custom-file-label" for="customFile">Upload Foto Pengguna</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between pt-3">
                            <a href="{{ route('pengguna_app.index') }}" class="btn btn-warning">Kembali</a>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Rubah</button>
                        </div>
                    </form>
                </div>
                <!-- end card-body-->
            </div>
        </div>
        <div class="col-xl-3">
            <div class="card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Foto Pengguna</h4>
                        <div class="row">
                            <div class="col-sm-12">
                                <img src="{{ asset('images/pengguna/' . $data->foto) }}" alt="Foto {{ $data->name }}"
                                    class="img-fluid rounded" width="200" />

                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
        </div>
    </div>
@endsection
