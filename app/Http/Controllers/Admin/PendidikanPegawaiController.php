<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendidikanpegawai;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PendidikanPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Pendidikanpegawai::select('id', 'name')->get();
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
        $judul = 'Data Pendidikan';
        return view('admin.pages.pegawai.pendidikan.index', compact('judul'));
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
        ];
        Pendidikanpegawai::updateOrCreate(
            [
                'id' => $request->input('data_id')
            ],
            $data
        );

        return response()->json(['success' => 'Pendidkan Berhasil Ditambah']);
    }


    public function edit(string $id)
    {
        $data = Pendidikanpegawai::find($id);
        return response()->json($data);
    }


    public function destroy(string $id)
    {
        Pendidikanpegawai::find($id)->delete();
        return response()->json(['success' => 'Pendidkan Berhasil Dihapus']);
    }
}
