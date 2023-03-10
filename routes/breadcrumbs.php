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
    $trail->push('Jabatan Pegawai', route('jabatan.index'));
});
// Status Pegawai
Breadcrumbs::for('status.index', function (BreadcrumbTrail $trail) {
    $trail->parent('administrator.index');
    $trail->push('Status Pegawai', route('status.index'));
});
// Status Pegawai
Breadcrumbs::for('pendidikan.index', function (BreadcrumbTrail $trail) {
    $trail->parent('administrator.index');
    $trail->push('Pendidikan Pegawai', route('pendidikan.index'));
});
// Pegawai
Breadcrumbs::for('pegawai.index', function (BreadcrumbTrail $trail) {
    $trail->parent('administrator.index');
    $trail->push('Pegawai', route('pegawai.index'));
});
// Tambah Pegawai
Breadcrumbs::for('pegawai.create', function (BreadcrumbTrail $trail) {
    $trail->parent('administrator.index');
    $trail->push('Pegawai', route('pegawai.index'));
    $trail->push('Tambah', route('pegawai.create'));
});
// Detail Pegawai
Breadcrumbs::for('pegawai.show', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('administrator.index');
    $trail->push('Pegawai', route('pegawai.index'));
    $trail->push('Detail', route('pegawai.show', $id));
});
// =======================END HALAMAN ADMINISTRATOR APP========================//
