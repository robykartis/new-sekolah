@extends('admin.layouts.master')
@section('title')
    {{ $judul }}
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css">
@endpush
@section('content')
    <!-- Page Content -->
    <div class="content">

        <!-- Dynamic Table Responsive -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    {{ $judul }}
                </h3>

                <button type="button" class="btn btn-alt-success btn-sm push" data-bs-toggle="modal"
                    data-bs-target="#modal-block-slideleft"> <i class="fa fa-plus"></i> Tambah Data</button>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-responsive class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter  datatable">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%;">No</th>
                            <th>Name</th>
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
@section('modal')
    <div class="modal fade" id="modal-block-slideleft" tabindex="-1" role="dialog" aria-labelledby="modal-block-slideleft"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideleft" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-transparent mb-0">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Modal Title</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content fs-sm">
                        <form id="dataForm" name="dataForm">
                            <div class="modal-body">
                                <input type="hidden" name="data_id" id="data_id">
                                <div class="form-group">
                                    <label for="kode" class="col-sm-2 control-label">Nama</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter Name" value="" maxlength="50" required="">
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-sm btn-alt-secondary me-1"
                                    data-bs-dismiss="modal">Batal</button>
                                <button type="submit" id="saveBtn" value="create" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
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
    <script
        src="{{ asset('template/admin/assets/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js') }}">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>


    <script type="text/javascript">
        function confirmDelete() {
            if (!confirm("Are You Sure to delete this"))
                event.preventDefault();
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif (Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });
    </script>
    <script type="text/javascript">
        $(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var table = $('.datatable').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: "{{ route('jabatan.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },

                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });


            $('#createForm').click(function() {
                $('#saveBtn').val("Save");
                $('#data_id').val('');
                $('#dataForm').trigger("reset");
                $('#modelHeading').html("Input data jabatan");
                $('#modal-block-slideleft').modal('show');
            });

            $('body').on('click', '.editForm', function() {
                var data_id = $(this).data('id');
                $.get("{{ route('jabatan.index') }}" + '/' + data_id + '/edit', function(data) {
                    $('#modelHeading').html("Edit data jabatan");
                    $('#saveBtn').val("edit-user");
                    $('#modal-block-slideleft').modal('show');
                    $('#data_id').val(data.id);
                    $('#name').val(data.name); //perbaiki input field nama
                })
            });

            // Save data
            $('#saveBtn').click(function(e) {
                e.preventDefault();
                $(this).html('Sending..');
                if ($('#name').val() == "") { //perbaiki nama input field
                    toastr.error("Nama harus diisi");
                    return;
                }
                $.ajax({
                    data: $('#dataForm').serialize(),
                    url: "{{ route('jabatan.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
                        // Tambahkan toastr untuk menampilkan pesan sukses
                        if ($('#saveBtn').val() == 'Save') {
                            toastr.success('Data berhasil ditambahkan.', 'Sukses', {
                                timeOut: 5000
                            });
                        } else {
                            toastr.success('Data berhasil diupdate.', 'Sukses', {
                                timeOut: 5000
                            });
                        }
                        $('#dataForm').trigger("reset");
                        $('#modal-block-slideleft').modal('hide');
                        table.draw();
                    },
                    error: function(data) {
                        console.log('Error:', data);
                        $('#saveBtn').html('Save Changes');
                    }
                });
            });





            $('body').on('click', '.deleteData', function() {
                var data_id = $(this).data("id");
                if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                    // Jalankan aksi untuk menghapus data
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('jabatan.store') }}" + '/' + data_id,
                        success: function(data) {
                            // Tambahkan toastr untuk menampilkan pesan sukses
                            toastr.success('Data berhasil dihapus.', 'Sukses', {
                                timeOut: 5000
                            });
                            table.draw();
                        },
                        error: function(data) {
                            console.log('Error:', data);
                        }
                    });
                }
            });
        });
    </script>
@endpush
