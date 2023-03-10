@extends('admin.layouts.master')
@section('title')
    Pengguna
@endsection
@section('breadcrumbs')
    {{ Breadcrumbs::render() }}
@endsection
@push('css-page')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet"
        href="{{ asset('template/admin/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('template/admin/assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('template/admin/assets/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css') }}">
@endpush
@section('content')
    <!-- Page Content -->
    <div class="content">

        <!-- Dynamic Table Responsive -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Dynamic Table <small>DataTables Responsive Mode</small>
                </h3>
                <a href="{{ route('pengguna_app.create') }}" class="btn btn-success btn-sm"> <i
                        class="fa fa-plus"></i>Tambah
                    Data</a>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-responsive class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter  datatable">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%;">No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th style="width: 15%;">Role</th>
                            <th style="width: 7%;">Foto</th>
                            <th style="width: 12%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- Dynamic Table Responsive -->
    </div>
@endsection

@push('js-page')
    <!-- third party js -->
    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{ asset('template/admin/assets/js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('template/admin/assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/admin/assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('template/admin/assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}">
    </script>
    <script src="{{ asset('template/admin/assets/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js') }}">
    </script>
    <script src="{{ asset('template/admin/assets/js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('template/admin/assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}">
    </script>
    <script src="{{ asset('template/admin/assets/js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('template/admin/assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('template/admin/assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('template/admin/assets/js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('template/admin/assets/js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('template/admin/assets/js/pages/be_tables_datatables.min.js') }}"></script>


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
