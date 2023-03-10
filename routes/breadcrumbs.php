<?php

use App\Models\User;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;





// =======================HALAMAN ADMIN========================//
// Dashboard Administrator
Breadcrumbs::for('administrator.index', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('administrator.index'));
});

// // =======================HALAMAN ADMINISTRATOR APP========================//
// Pengguna APP
Breadcrumbs::for('pengguna_app.index', function (BreadcrumbTrail $trail) {
    $trail->parent('administrator.index');
    $trail->push('Pengguna', route('pengguna_app.index'));
});
Breadcrumbs::for('pengguna_app.create', function (BreadcrumbTrail $trail) {
    $trail->parent('administrator.index');
    $trail->push('Pengguna', route('pengguna_app.index'));
    $trail->push('Tambah', route('pengguna_app.create'));
});
Breadcrumbs::for('pengguna_app.edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('administrator.index');
    $trail->push('Pengguna', route('pengguna_app.index'));
    $trail->push('Edit', route('pengguna_app.edit', $id));
});

// Setting APP
Breadcrumbs::for('setting_app.index', function (BreadcrumbTrail $trail) {
    $trail->parent('administrator.index');
    $trail->push('Pengaturan', route('setting_app.index'));
});
Breadcrumbs::for('setting_app.edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('administrator.index');
    $trail->push('Pengaturan', route('setting_app.index'));
    $trail->push('Edit', route('setting_app.edit', $id));
});
// Jabatan Pegawai
Breadcrumbs::for('jabatan.index', function (BreadcrumbTrail $trail) {
    $trail->parent('administrator.index');
    $trail->push('Jabatan', route('jabatan.index'));
});
// Pegawai
Breadcrumbs::for('pegawai.index', function (BreadcrumbTrail $trail) {
    $trail->parent('administrator.index');
    $trail->push('Pegawai', route('pegawai.index'));
});
// =======================END HALAMAN ADMINISTRATOR APP========================//
