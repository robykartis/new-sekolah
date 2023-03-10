@extends('admin.layouts.master')
@section('title')
    Pengaturan APP
@endsection
@section('breadcrumbs')
    {{ Breadcrumbs::render() }}
@endsection
@section('content')
    <div class="content content-boxed">
        <div class="row">
            <div class="col-md-7 col-xl-8">
                <!-- Updates -->
                @foreach ($data as $item)
                    <ul class="timeline timeline-alt py-0">
                        <li class="timeline-event">
                            <div class="timeline-event-icon bg-default">
                                <i class="fa fa-circle-check"></i>
                            </div>
                            <div class="timeline-event-block block">
                                <div class="block-header">
                                    <h3 class="block-title">Name</h3>

                                </div>
                                <div class="block-content">
                                    <p class="fw-semibold mb-2">
                                        {{ $item->name }}
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-event">
                            <div class="timeline-event-icon bg-modern">
                                <i class="fa fa-house-circle-check"></i>
                            </div>
                            <div class="timeline-event-block block">
                                <div class="block-header">
                                    <h3 class="block-title">Address</h3>

                                </div>
                                <div class="block-content">
                                    <p class="fw-semibold mb-2">
                                        {{ $item->address }}
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-event">
                            <div class="timeline-event-icon bg-info">
                                <i class="fa fa-envelope-open-text"></i>
                            </div>
                            <div class="timeline-event-block block">
                                <div class="block-header">
                                    <h3 class="block-title">Email</h3>
                                </div>
                                <div class="block-content">
                                    <p class="fw-semibold mb-2">
                                        {{ $item->email }}
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-event">
                            <div class="timeline-event-icon bg-smooth">
                                <i class="fa fa-mobile-retro"></i>
                            </div>
                            <div class="timeline-event-block block">
                                <div class="block-header">
                                    <h3 class="block-title">Telpon</h3>

                                </div>
                                <div class="block-content">
                                    <p class="fw-semibold mb-2">
                                        {{ $item->telpon }}
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-event">
                            <div class="timeline-event-icon bg-dark">
                                <a href="{{ route('setting_app.edit', $item->id) }}" class="btn btn-success mb-2"><i
                                        class="fa fa-cog"></i>Edit</a>
                            </div>

                        </li>

                    </ul>
                @endforeach
                <!-- END Updates -->
            </div>
            <div class="col-md-5 col-xl-4">
                <!-- Products -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            <i class="fa fa-briefcase text-muted me-1"></i> Logo
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="d-flex align-items-center justify-content-center push">

                            <div class="block-content block-content-full text-center bg-image">
                                <img class="img-fluid" src="{{ asset('images/app/' . $item->logo) }}" alt="logo">
                            </div>

                        </div>

                    </div>
                </div>
                <!-- END Products -->
            </div>
        </div>
    </div>
@endsection
