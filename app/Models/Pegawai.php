<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawais';
    protected $guarded  = ['id'];

    public function get_jabatan()
    {
        return $this->belongsTo(Jabatanpegawai::class, 'id_jabatan')->select('name as nama_jabatan');
    }

    public function get_status()
    {
        return $this->belongsTo(Statuspegawai::class, 'id_status')->select('name as nama_status');
    }
    public function get_pendidikan()
    {
        return $this->belongsTo(Pendidikanpegawai::class, 'id_pendidikan')->select('name as nama_pendidikan');
    }

    public static function getDataTable()
    {
        return self::select('pegawais.id', 'pegawais.nama', 'pegawais.nik', 'pegawais.nip', 'jabatanpegawais.name as nama_jabatan', 'statuspegawais.name as nama_status', 'pegawais.foto_diri')
            ->join('jabatanpegawais', 'pegawais.id_jabatan', '=', 'jabatanpegawais.id')
            ->join('statuspegawais', 'pegawais.id_status', '=', 'statuspegawais.id');
    }
}
