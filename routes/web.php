<?php

use App\Http\Controllers\Admin\AdministratorController;
use App\Http\Controllers\Admin\GurusekolahController;
use App\Http\Controllers\Admin\JabatanPegawaiController;
use App\Http\Controllers\Admin\KeplasekolahController;
use App\Http\Controllers\Admin\OrangtuaController;
use App\Http\Controllers\Admin\PegawaiController;
use App\Http\Controllers\Admin\PendidikanPegawaiController;
use App\Http\Controllers\Admin\PenggunaController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\StaffsekolahController;
use App\Http\Controllers\Admin\StatusPegawaiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/proses_login', 'proses_login')->name('proses_login');
    Route::get('/logout', 'logout')->name('logout');
});


Route::middleware(['auth', 'administrator:admin'])->group(function () {

    Route::prefix('administrator')->group(function () {
        Route::get('/dashboard', [AdministratorController::class, 'index'])->name('administrator.index');
        // Route Pengguna APP
        Route::prefix('pengguna-app')->group(function () {
            Route::controller(PenggunaController::class)->group(function () {
                Route::get('/', 'index')->name('pengguna_app.index');
                Route::get('/tambah', 'create')->name('pengguna_app.create');
                Route::post('/simpan', 'store')->name('pengguna_app.store');
                Route::get('/detail/{id}', 'show')->name('pengguna_app.show');
                Route::get('/edit/{id}', 'edit')->name('pengguna_app.edit');
                Route::put('/rubah/{id}', 'update')->name('pengguna_app.update');
                Route::get('/hapus/{id}', 'destroy')->name('pengguna_app.destroy');
            });
        });
        // Route Setting APP
        Route::prefix('setting-app')->group(function () {
            Route::controller(SettingController::class)->group(function () {
                Route::get('/', 'index')->name('setting_app.index');
                Route::get('/edit/{id}', 'edit')->name('setting_app.edit');
                Route::put('/rubah/{id}', 'update')->name('setting_app.update');
            });
        });
        // Route Jabatan Pegawai
        Route::prefix('pegawai')->group(function () {
            Route::resource('jabatan', JabatanPegawaiController::class);
        });
        // Route Status Pegawai
        Route::prefix('pegawai')->group(function () {
            Route::resource('status', StatusPegawaiController::class);
        });
        // Route Pendidikan Pegawai
        Route::prefix('pegawai')->group(function () {
            Route::resource('pendidikan', PendidikanPegawaiController::class);
        });
        // Route Pegawai
        Route::prefix('pegawai')->group(function () {
            Route::controller(PegawaiController::class)->group(function () {
                Route::get('/', 'index')->name('pegawai.index');
                Route::get('/tambah', 'create')->name('pegawai.create');
                Route::get('/edit/{id}', 'edit')->name('pegawai.edit');
                Route::get('/detail/{id}', 'show')->name('pegawai.show');
                Route::put('/rubah/{id}', 'update')->name('pegawai.update');
                Route::put('/hapus/{id}', 'destroy')->name('pegawai.destroy');
            });
        });
    });
});
Route::middleware(['auth', 'kepala_sekolah:admin'])->group(function () {
    Route::prefix('kepala-sekolah')->group(function () {
        Route::get('/dashboard', [KeplasekolahController::class, 'index'])->name('adm_kepala.index');
    });
});
Route::middleware(['auth', 'guru_sekolah:admin'])->group(function () {
    Route::prefix('guru-sekolah')->group(function () {
        Route::get('/dashboard', [GurusekolahController::class, 'index'])->name('adm_guru.index');
    });
});
Route::middleware(['auth', 'staff_sekolah:admin'])->group(function () {
    Route::prefix('staff-sekolah')->group(function () {
        Route::get('/dashboard', [StaffsekolahController::class, 'index'])->name('adm_staff.index');
    });
});

Route::middleware(['auth', 'orangtua_siswa:admin'])->group(function () {
    Route::prefix('orangtua-siswa')->group(function () {
        Route::get('/dashboard', [OrangtuaController::class, 'index'])->name('adm_orangtua.index');
    });
});
Route::middleware(['auth', 'siswa:admin'])->group(function () {
    Route::prefix('siswa')->group(function () {
        Route::get('/dashboard', [SiswaController::class, 'index'])->name('adm_siswa.index');
    });
});
