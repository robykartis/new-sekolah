<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikanpegawai extends Model
{
    use HasFactory;
    protected $table = 'pendidikanpegawais';
    protected $fillable  = ['name'];
}
