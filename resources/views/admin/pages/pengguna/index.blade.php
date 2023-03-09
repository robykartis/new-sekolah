@extends('admin.layouts.master')
@section('title')
    Pengguna
@endsection
@section('breadcrumbs')
    {{ Breadcrumbs::render() }}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <span class="badge badge-soft-primary float-right">Daily</span>
                        <h5 class="card-title mb-0">Cost per Unit</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                $17.21
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span class="text-muted">12.5% <i class="mdi mdi-arrow-up text-success"></i></span>
                        </div>
                    </div>

                    <div class="progress shadow-sm" style="height: 5px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 57%;">
                        </div>
                    </div>
                </div>
                <!--end card body-->
            </div><!-- end card-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <span class="badge badge-soft-primary float-right">Per Week</span>
                        <h5 class="card-title mb-0">Market Revenue</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                $1875.54
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span class="text-muted">18.71% <i class="mdi mdi-arrow-down text-danger"></i></span>
                        </div>
                    </div>

                    <div class="progress shadow-sm" style="height: 5px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 57%;">
                        </div>
                    </div>
                </div>
                <!--end card body-->
            </div><!-- end card-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <span class="badge badge-soft-primary float-right">Per Month</span>
                        <h5 class="card-title mb-0">Expenses</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                $784.62
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span class="text-muted">57% <i class="mdi mdi-arrow-up text-success"></i></span>
                        </div>
                    </div>

                    <div class="progress shadow-sm" style="height: 5px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 57%;">
                        </div>
                    </div>
                </div>
                <!--end card body-->
            </div>
            <!--end card-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <span class="badge badge-soft-primary float-right">All Time</span>
                        <h5 class="card-title mb-0">Daily Visits</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                1,15,187
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span class="text-muted">17.8% <i class="mdi mdi-arrow-down text-danger"></i></span>
                        </div>
                    </div>

                    <div class="progress shadow-sm" style="height: 5px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 57%;">
                        </div>
                    </div>
                </div>
                <!--end card body-->
            </div><!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h4 class="card-title">List Akun Pengguna</h4>
                    <div class="card-tools ml-auto">
                        <a href="{{ route('pengguna_app.create') }}" class="btn btn-success btn-sm" title="Tambah Pengguna">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">

                    <table class="table dt-responsive nowrap datatable">
                        <thead class="thead-light">
                            {{-- <tr>
                                <th rowspan="2" class="align-middle">Name</th>
                                <th colspan="2">HR Information</th>
                                <th colspan="3">Contact</th>
                            </tr> --}}
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
@endsection
@push('css-page')
    <link href="{{ asset('template/admin/plugins/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('template/admin/plugins/datatables/responsive.bootstrap4.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('template/admin/plugins/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/admin/plugins/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('js-page')
    <!-- third party js -->
    <script src="{{ asset('template/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/admin/plugins/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('template/admin/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('template/admin/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('template/admin/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('template/admin/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('template/admin/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('template/admin/plugins/datatables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('template/admin/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('template/admin/plugins/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('template/admin/plugins/datatables/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('template/admin/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('template/admin/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('template/admin/assets/pages/datatables-demo.js') }}"></script>


    <script type="text/javascript">
        function confirmDelete() {
            if (!confirm("Are You Sure to delete this"))
                event.preventDefault();
        }
    </script>
    <script type="text/javascript">
        $(function() {
            var table = $('.datatable').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: "{{ route('pengguna_app.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'role',
                        name: 'role'
                    },
                    {
                        data: 'foto',
                        name: 'foto',
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });
            var user_id;
            $(document).on('click', '.delete', function() {
                user_id = $(this).attr('id');
                $('#confirmModal').modal('show');
            });
            $('#ok_button').click(function() {
                $.ajax({
                    url: "users/destroy/" + user_id,
                    beforeSend: function() {
                        $('#ok_button').text('Deleting...');
                    },
                    success: function(data) {
                        setTimeout(function() {
                            $('#confirmModal').modal('hide');
                            $('#user_table').DataTable().ajax.reload();
                            alert('Data Deleted');
                        }, 2000);
                    }
                })
            });
        });
    </script>
@endpush
