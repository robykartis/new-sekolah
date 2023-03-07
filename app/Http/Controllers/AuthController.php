<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->role == 'administrator') {
                return redirect()->route('administrator.index');
            } elseif ($user->role == 'kepala_sekolah') {
                return redirect()->route('adm_kepala.index');
            } elseif ($user->role == 'guru_sekolah') {
                return redirect()->route('adm_guru.index');
            } elseif ($user->role == 'staff_sekolah') {
                return redirect()->route('adm_staff.index');
            } elseif ($user->role == 'orangtua_siswa') {
                return redirect()->route('adm_orangtua.index');
            } elseif ($user->role == 'siswa') {
                return redirect()->route('adm_siswa.index');
            }
        }
        return view('auth.login');
    }
    public function proses_login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email Harus di Isi!',
            'password.required' => 'Password Harus di Isi!'
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $input = $request->all();


        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->role == 'administrator') {
                return redirect()->route('administrator.index');
            } elseif (auth()->user()->role == 'kepala_sekolah') {
                return redirect()->route('adm_kepala.index');
            } elseif (auth()->user()->role == 'guru_sekolah') {
                return redirect()->route('adm_guru.index');
            } elseif (auth()->user()->role == 'staff_sekolah') {
                return redirect()->route('adm_staff.index');
            } elseif (auth()->user()->role == 'orangtua_siswa') {
                return redirect()->route('adm_orangtua.index');
            } elseif (auth()->user()->role == 'siswa') {
                return redirect()->route('adm_siswa.index');
            }
        } else {
            return redirect()->route('login')
                ->with('error', 'Email-Address And Password Are Wrong.');
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('/');
    }
}
