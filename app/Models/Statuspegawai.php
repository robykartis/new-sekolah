<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statuspegawai extends Model
{
    use HasFactory;
    protected $table = 'statuspegawais';
    protected $fillable  = ['name'];
}
