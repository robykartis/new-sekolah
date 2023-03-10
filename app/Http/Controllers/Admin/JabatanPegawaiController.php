<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jabatanpegawai;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class JabatanPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Jabatanpegawai::select('id', 'name')->get();
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
        $judul = 'Data Jabatan';
        return view('admin.pages.pegawai.jabatan.index', compact('judul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
        ];
        Jabatanpegawai::updateOrCreate(
            [
                'id' => $request->input('data_id')
            ],
            $data
        );

        return response()->json(['success' => 'Jabatan Berhasil Ditambah']);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $data = Jabatanpegawai::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Jabatanpegawai::find($id)->delete();

        return response()->json(['success' => 'Jabatan Berhasil Dihapus']);
    }
}
