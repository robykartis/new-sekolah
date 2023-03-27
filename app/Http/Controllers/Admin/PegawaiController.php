<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jabatanpegawai;
use App\Models\Pegawai;
use App\Models\Pendidikanpegawai;
use App\Models\Statuspegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Intervention\Image\Facades\Image;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Pegawai::getDataTable()->get();
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
        $kelamin = [
            [
                'value' => 'Laki-laki',
                'name' => 'Laki-laki'
            ],
            [
                'value' => 'Perempuan',
                'name' => 'Perempuan'
            ]
        ];
        $agama = [
            [
                'value' => 'Islam',
                'name' => 'Islam'
            ],
            [
                'value' => 'Kristen',
                'name' => 'Kristen'
            ],
            [
                'value' => 'Hindu',
                'name' => 'Hindu'
            ],
            [
                'value' => 'Buddha',
                'name' => 'Buddha'
            ],
            [
                'value' => 'Katolik',
                'name' => 'Katolik'
            ],
            [
                'value' => 'Kong Hu Chu',
                'name' => 'Kong Hu Chu'
            ],
            [
                'value' => 'Dll',
                'name' => 'Dll'
            ],

        ];
        $pernikahan = [
            [
                'value' => 'Menikah',
                'name' => 'Menikah'
            ],
            [
                'value' => 'Belum Menikah',
                'name' => 'Belum Menikah'
            ]
        ];
        $jabatan = Jabatanpegawai::all();
        $status = Statuspegawai::all();
        $pendidikan = Pendidikanpegawai::all();
        $judul = 'Tambah Pegawai';

        return view('admin.pages.pegawai.create', compact([
            'judul',
            'kelamin',
            'agama',
            'pendidikan',
            'pernikahan',
            'jabatan',
            'status'
        ]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $dd = $request->all();
        // dd($dd);
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:255',
            'npwp' => 'string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'tgl_lahir' => 'required|string|max:255',
            'agama' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'gelar' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'sts_pernikahan' => 'string|max:255',
            'id_pendidikan' => 'required|string|max:255',
            'id_jabatan' => 'required|string|max:255',
            'id_status' => 'required|string|max:255',
            'tgl_daftar' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:pegawais',
            'telpon' => 'required|string|max:255',
            'foto_diri' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto_ktp' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto_npwp' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto_ijazah' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'nik.required' => 'Nik tidak boleh kosong',
            'jenis_kelamin.required' => 'Pilih jenis kelamin',
            'tgl_lahir.required' => 'Tanggal lahir tidak boleh kosong',
            'agama.required' => 'Agama tidak boleh kosong',
            'nip.required' => 'NIP tidak boleh kosong',
            'id_pendidikan.required' => 'Pilih pendidikan',
            'gelar.required' => 'Gelar tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'id_jabatan.required' => 'Pilih jabatan',
            'id_status.required' => 'Pilih status',
            'tgl_daftar.required' => 'Pilih tanggal daftar',
            'email.required' => 'Email tidak boleh kosong',
            'telpon.required' => 'Nomor telpon tidak boleh kosong',
            'foto_ijazah.required' => 'Upload foto tidak boleh kosong',
            'foto_diri.required' => 'Upload foto tidak boleh kosong',
            'foto_ktp.required' => 'Upload foto tidak boleh kosong',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        try {
            $image = $request->file('foto_diri');
            $file_ft_diri = rand(1000, 9999) . $image->getClientOriginalName();
            $img = Image::make($image->path());
            $img->resize('760', '760')
                ->save(public_path('images/pegawai/foto_diri/small') . '/small_' . $file_ft_diri);
            $image->move('images/pegawai/foto_diri', $file_ft_diri);

            $image = $request->file('foto_ktp');
            $file_ft_ktp = rand(1000, 9999) . $image->getClientOriginalName();
            $img = Image::make($image->path());
            $img->resize('760', '760')
                ->save(public_path('images/pegawai/foto_ktp/small') . '/small_' . $file_ft_ktp);
            $image->move('images/pegawai/foto_ktp', $file_ft_ktp);

            $image = $request->file('foto_npwp');
            $file_ft_npwp = rand(1000, 9999) . $image->getClientOriginalName();
            $img = Image::make($image->path());
            $img->resize('760', '760')
                ->save(public_path('images/pegawai/foto_npwp/small') . '/small_' . $file_ft_npwp);
            $image->move('images/pegawai/foto_npwp', $file_ft_npwp);

            $image = $request->file('foto_ijazah');
            $file_ft_ijazah = rand(1000, 9999) . $image->getClientOriginalName();
            $img = Image::make($image->path());
            $img->resize('760', '760')
                ->save(public_path('images/pegawai/foto_ijazah/small') . '/small_' . $file_ft_ijazah);
            $image->move('images/pegawai/foto_ijazah', $file_ft_ijazah);

            $pegawai = new Pegawai();
            $pegawai->name = $request->name;
            $pegawai->nik = $request->nik;
            $pegawai->npwp = $request->npwp;
            $pegawai->jenis_kelamin = $request->jenis_kelamin;
            $pegawai->tgl_lahir = $request->tgl_lahir;
            $pegawai->agama = $request->agama;
            $pegawai->nip = $request->nip;
            $pegawai->id_pendidikan = $request->id_pendidikan;
            $pegawai->gelar = $request->gelar;
            $pegawai->alamat = $request->alamat;
            $pegawai->sts_pernikahan = $request->sts_pernikahan;
            $pegawai->id_jabatan = $request->id_jabatan;
            $pegawai->id_status = $request->id_status;
            $pegawai->tgl_daftar = $request->tgl_daftar;
            $pegawai->email = $request->email;
            $pegawai->telpon = $request->telpon;
            $pegawai->foto_diri = $file_ft_diri;
            $pegawai->foto_ktp = $file_ft_ktp;
            $pegawai->foto_npwp = $file_ft_npwp;
            $pegawai->foto_ijazah = $file_ft_ijazah;
            $pegawai->save();

            return redirect()->route('pegawai.index')->with('success', 'Tambah Data Berhasil');
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
        $data = Pegawai::findOrFail($id);
        $judul = 'Detail Pegawai';
        return view('admin.pages.pegawai.show', compact('judul', 'data'));
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
