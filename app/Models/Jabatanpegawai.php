<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatanpegawai extends Model
{
    use HasFactory;
    protected $table = 'jabatanpegawais';
    protected $fillable  = ['name'];
}
