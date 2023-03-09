@extends('admin.layouts.master')
@section('title')
    Pengaturan APP
@endsection
@section('breadcrumbs')
    {{ Breadcrumbs::render() }}
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center mt-4">
                @foreach ($data as $title)
                    <h4>{{ $title->name }} </h4>
                    <p class="text-muted mt-3 mb-4">
                        {{ $title->address }}
                    </p>
                @endforeach

            </div>
        </div><!-- end col -->
    </div><!-- end row -->


    <div class="row mt-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-3 font-weight-bold text-uppercase">INFO</h5>
                    <div id="accordion">
                        @foreach ($data as $item)
                            <div class="card mb-1">
                                <div class="card-header bg-white border-bottom-0 p-3" id="headingOne">
                                    <h5 class="m-0 font-size-16">
                                        Name
                                    </h5>
                                </div>
                                <div>
                                    <div class="card-body text-muted pt-0">
                                        {{ $item->name }}
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
                                        {{ $item->address }}
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
                                        {{ $item->email }}
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
                                        {{ $item->telpon }}
                                    </div>
                                </div>
                            </div>
                    </div>

                </div>
                <div class="card-footer">
                    <a href="{{ route('setting_app.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                </div>
                @endforeach
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
