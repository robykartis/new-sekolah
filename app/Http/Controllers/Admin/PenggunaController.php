<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Intervention\Image\Facades\Image;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('id', 'name', 'role', 'email', 'foto')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . route('pengguna_app.edit', $row->id) . '" class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="Edit"><i class="fa fa-fw fa-pencil-alt"></i></a> |';
                    $btn .= '<a href="' . route('pengguna_app.destroy', $row->id) . '" onclick="confirmDelete()" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Delete"><i class="fa fa-fw fa-times"></i></a>';
                    return $btn;
                })
                ->addColumn('foto', function ($row) {
                    return '<img class="img-avatar" src="' . asset('images/pengguna/small/small_' . $row->foto) . '" alt="" width="50" height="50"/>';
                })
                ->rawColumns(['action', 'foto'])
                ->make(true);
        }
        return view('admin.pages.pengguna.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = [
            [
                'name' => 'Administrator',
                'value' => 'administrator'
            ],
            [
                'name' => 'Kepala Sekolah',
                'value' => 'kepala_sekolah'
            ],
            [
                'name' => 'Guru Sekolah',
                'value' => 'guru_sekolah'
            ],
            [
                'name' => 'Staff Sekolah',
                'value' => 'staff_sekolah'
            ],
            [
                'name' => 'Orangtua Siswa',
                'value' => 'orangtua_siswa'
            ],
            [
                'name' => 'Siswa',
                'value' => 'siswa'
            ],

        ];
        $judul = 'Tambah Data Pengguna';
        return view('admin.pages.pengguna.create', compact('role', 'judul'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required',
            'password' => 'required|string|confirmed|min:8',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'name.required' => 'Nama pengguna tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'role.required' => 'Pilih salah satu role akun pengguna',
            'password.required' => 'Password harap tidak boleh kosong',
            'foto.required' => 'Masukan foto pengguna'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        try {
            $image = $request->file('foto');
            $file_name = rand(1000, 9999) . $image->getClientOriginalName();

            $img = Image::make($image->path());
            $img->resize('760', '760')
                ->save(public_path('images/pengguna/small') . '/small_' . $file_name);
            $image->move('images/pengguna', $file_name);

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role = $request->role;
            $user->password = Hash::make($request->password);
            $user->foto = $file_name;
            $user->save();

            return redirect()->route('pengguna_app.index')->with('success', 'Tambah Data Berhasil');
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                return back()->with('error', 'Email Sudah Terdaftar')->withInput();
            }
        }
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
        $data = User::findOrFail($id);
        $role = [
            [
                'name' => 'Administrator',
                'value' => 'administrator'
            ],
            [
                'name' => 'Kepala Sekolah',
                'value' => 'kepala_sekolah'
            ],
            [
                'name' => 'Guru Sekolah',
                'value' => 'guru_sekolah'
            ],
            [
                'name' => 'Staff Sekolah',
                'value' => 'staff_sekolah'
            ],
            [
                'name' => 'Orangtua Siswa',
                'value' => 'orangtua_siswa'
            ],
            [
                'name' => 'Siswa',
                'value' => 'siswa'
            ],

        ];

        $judul = 'Edit Data Pengguna';
        return view('admin.pages.pengguna.edit', compact('role', 'judul', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required',
            'password' => 'nullable|string|confirmed|min:8',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'name.required' => 'Nama pengguna tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'role.required' => 'Pilih salah satu role akun pengguna',
            'password.nullable' => 'Password harap tidak boleh kosong',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        try {
            $user = User::findOrFail($id);
            if ($request->hasFile('foto')) {
                $user->delete_image_pengguna();
                $image = $request->file('foto');
                $file_name = rand(1000, 9999) . $image->getClientOriginalName();
                $img = Image::make($image->path());
                $img->resize('180', '120')
                    ->save(public_path('images/pengguna/small') . '/small_' . $file_name);
                $image->move('images/pengguna', $file_name);
                $user->foto = $file_name;
            }
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role = $request->role;
            if ($request->password)
                $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->route('pengguna_app.index')
                ->with('success', 'Data Pengguna Berhasil di Rubah');
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete_image_pengguna();
        $user->delete();
        return redirect()->route('pengguna_app.index')
            ->with('success', 'Data Pengguna Berhasil Dihapus');
    }
}
