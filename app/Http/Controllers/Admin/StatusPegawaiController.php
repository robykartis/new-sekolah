<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Statuspegawai;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class StatusPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Statuspegawai::select('id', 'name')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="btn btn-sm btn-info editForm" data-bs-toggle="tooltip" title="Edit"><i class="fa fa-fw fa-pencil-alt"></i></a> |';
                    $btn .= '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-sm btn-danger deleteData" data-bs-toggle="tooltip" title="Delete"><i class="fa fa-fw fa-times"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $judul = 'Data Status';
        return view('admin.pages.pegawai.status.index', compact('judul'));
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
        ];
        Statuspegawai::updateOrCreate(
            [
                'id' => $request->input('data_id')
            ],
            $data
        );

        return response()->json(['success' => 'Jabatan Berhasil Ditambah']);
    }


    public function edit(string $id)
    {
        $data = Statuspegawai::find($id);
        return response()->json($data);
    }


    public function destroy(string $id)
    {
        Statuspegawai::find($id)->delete();

        return response()->json(['success' => 'Jabatan Berhasil Dihapus']);
    }
}
