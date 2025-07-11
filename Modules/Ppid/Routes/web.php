<?php

use Illuminate\Support\Facades\Route;
use Modules\Ppid\Http\Controllers\SambutanController;
use Modules\Ppid\Http\Controllers\PermohonaninformasiController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('ppid')->group(function() {
    
    // Sambutan Direktur
    Route::prefix('sambutan-direktur')->group(function() {
        Route::get('/', 'SambutanController@index')->name('sambutan.index');
        Route::get('/create', 'SambutanController@create')->name('sambutan.create');
        Route::post('/store', 'SambutanController@store')->name('sambutan.store');
        Route::get('/{id}/edit', 'SambutanController@edit')->name('sambutan.edit');
        Route::put('/{id}/update', 'SambutanController@update')->name('sambutan.update');
        Route::delete('/{id}/delete', 'SambutanController@destroy')->name('sambutan.destroy');
    });
    
    // Profil Ppid
    Route::prefix('profil-ppid')->group(function() {
        Route::get('/', 'ProfilppidController@index')->name('profilppid.index');
        Route::get('/create', 'ProfilppidController@create')->name('profilppid.create');
        Route::post('/store', 'ProfilppidController@store')->name('profilppid.store');
        Route::get('/{id}/edit', 'ProfilppidController@edit')->name('profilppid.edit');
        Route::put('/{id}/update', 'ProfilppidController@update')->name('profilppid.update');
        Route::delete('/{id}/delete', 'ProfilppidController@destroy')->name('profilppid.destroy');
    });

    // Struktur Organisasi
    Route::prefix('struktur-organisasi')->group(function () {
        Route::get('/', 'StrukturorganisasiController@index')->name('struktur.index');
        Route::get('/create', 'StrukturorganisasiController@create')->name('struktur.create');
        Route::post('/store', 'StrukturorganisasiController@store')->name('struktur.store');
        Route::get('/{id}/edit', 'StrukturorganisasiController@edit')->name('struktur.edit');
        Route::put('/{id}/update', 'StrukturorganisasiController@update')->name('struktur.update');
        Route::delete('/{id}/delete', 'StrukturorganisasiController@destroy')->name('struktur.destroy');
    });

    // Tugas dan Fungsi
    Route::prefix('tugas-dan-fungsi')->group(function () {
        Route::get('/', 'TugasdanfungsiController@index')->name('tugasdanfungsi.index');
        Route::get('/create', 'TugasdanfungsiController@create')->name('tugasdanfungsi.create');
        Route::post('/store', 'TugasdanfungsiController@store')->name('tugasdanfungsi.store');
        Route::get('/{id}/edit', 'TugasdanfungsiController@edit')->name('tugasdanfungsi.edit');
        Route::put('/{id}/update', 'TugasdanfungsiController@update')->name('tugasdanfungsi.update');
        Route::delete('/{id}/delete', 'TugasdanfungsiController@destroy')->name('tugasdanfungsi.destroy');
    });

    // Permohonan Informasi
    Route::prefix('pemohon')->group(function () {
        // Untuk pengguna
        Route::get('/', 'PermohonaninformasiController@index')->name('pemohon.index');
        Route::get('/create', 'PermohonaninformasiController@create')->name('permohonaninformasi.create');
        Route::post('/store', 'PermohonaninformasiController@store')->name('permohonaninformasi.store');
        Route::get('/{id}', 'PermohonaninformasiController@show')->name('permohonaninformasi.show');
        Route::get('/{id}/edit', 'PermohonaninformasiController@edit')->name('permohonaninformasi.edit');
        Route::put('/{id}/update', 'PermohonaninformasiController@update')->name('permohonaninformasi.update');
        // Route::delete('/{id}/delete', 'PermohonaninformasiController@destroy')->name('permohonaninformasi.destroy');

        // Untuk admin
        // Route::get('/admin/all', 'PermohonaninformasiController@adminIndex')->name('permohonaninformasi.admin.index');
    });

    // Berita CRUD
    Route::prefix('berita')->group(function () {
        Route::get('/', 'BeritaController@index')->name('berita.index');
        Route::get('/create', 'BeritaController@create')->name('berita.create');
        Route::post('/store', 'BeritaController@store')->name('berita.store');
        Route::get('/{id}', 'BeritaController@show')->name('berita.show');
        Route::get('/{id}/edit', 'BeritaController@edit')->name('berita.edit');
        Route::put('/{id}/update', 'BeritaController@update')->name('berita.update');
        Route::delete('/{id}/delete', 'BeritaController@destroy')->name('berita.destroy');
    });

    // Pengumuman CRUD
    Route::prefix('pengumuman')->group(function () {
        Route::get('/', 'PengumumanController@index')->name('pengumuman.index');
        Route::get('/create', 'PengumumanController@create')->name('pengumuman.create');
        Route::post('/store', 'PengumumanController@store')->name('pengumuman.store');
        Route::get('/{id}', 'PengumumanController@show')->name('pengumuman.show');
        Route::get('/{id}/edit', 'PengumumanController@edit')->name('pengumuman.edit');
        Route::put('/{id}/update', 'PengumumanController@update')->name('pengumuman.update');
        Route::delete('/{id}/delete', 'PengumumanController@destroy')->name('pengumuman.destroy');
    });

    // Jenis Permohonan CRUD
    Route::prefix('jenis-permohonan')->group(function () {
        Route::get('/', 'JenisPermohonanController@index')->name('jenispermohonan.index');
        Route::get('/create', 'JenisPermohonanController@create')->name('jenispermohonan.create');
        Route::post('/store', 'JenisPermohonanController@store')->name('jenispermohonan.store');
        Route::get('/{id}', 'JenisPermohonanController@show')->name('jenispermohonan.show');
        Route::get('/{id}/edit', 'JenisPermohonanController@edit')->name('jenispermohonan.edit');
        Route::put('/{id}/update', 'JenisPermohonanController@update')->name('jenispermohonan.update');
        Route::delete('/{id}/delete', 'JenisPermohonanController@destroy')->name('jenispermohonan.destroy');
    });

    // Data Pemohon CRUD
    Route::prefix('data-pemohon')->group(function() {
        Route::get('/', 'PermohonaninformasiController@index')->name('permohonaninformasi.index');
    });

    // Jenis Dokumen CRUD
    Route::prefix('jenis-dokumen')->group(function () {
        Route::get('/', 'JenisDokumenController@index')->name('jenisdokumen.index');
        Route::get('/create', 'JenisDokumenController@create')->name('jenisdokumen.create');
        Route::post('/store', 'JenisDokumenController@store')->name('jenisdokumen.store');
        Route::get('/{id}', 'JenisDokumenController@show')->name('jenisdokumen.show');
        Route::get('/{id}/edit', 'JenisDokumenController@edit')->name('jenisdokumen.edit');
        Route::put('/{id}/update', 'JenisDokumenController@update')->name('jenisdokumen.update');
        Route::delete('/{id}/delete', 'JenisDokumenController@destroy')->name('jenisdokumen.destroy');
    });
});