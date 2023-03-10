<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Pegawai::select('id', 'nama', 'nik', 'nip', 'id_jabatan', 'id_status', 'foto_diri')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . route('pegawai.edit', $row->id) . '" class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="Edit"><i class="fa fa-fw fa-pencil-alt"></i></a> |';
                    $btn .= '<a href="' . route('pegawai.show', $row->id) . '" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Show"><i class="fa fa-fw fa-eye"></i></a> |';
                    $btn .= '<a href="' . route('pegawai.destroy', $row->id) . '" onclick="confirmDelete()" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Delete"><i class="fa fa-fw fa-times"></i></a>';
                    return $btn;
                })
                ->addColumn('foto_diri', function ($row) {
                    return '<img class="img-avatar" src="' . asset('images/pengguna/small/small_' . $row->foto_diri) . '" alt="" width="50" height="50"/>';
                })
                ->rawColumns(['action', 'foto_diri'])
                ->make(true);
        }
        $judul = 'Data Pegawai';
        return view('admin.pages.pegawai.index', compact('judul'));
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
        //
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
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
