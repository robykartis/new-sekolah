<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';
    protected $fillable = [
        'name',
        'logo',
        'address',
        'email',
        'telpon',
    ];

    function delete_logo_app()
    {
        if ($this->image && file_exists(public_path('images/app/' . $this->image)))
            unlink(public_path('images/app/' . $this->image));
        if ($this->image && file_exists(public_path('images/app/small/small_' . $this->image)))
            unlink(public_path('images/app/small/small_' . $this->image));
    }
}
