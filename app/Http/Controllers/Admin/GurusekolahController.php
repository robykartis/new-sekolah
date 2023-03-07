<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GurusekolahController extends Controller
{
    public function index()
    {
        return view('admin.guru_sekolah.dashboard');
    }
}
