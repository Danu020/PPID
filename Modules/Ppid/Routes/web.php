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

    // Data Dokumen CRUD
    Route::prefix('data-dokumen')->group(function () {
        Route::get('/', 'DatadokumenController@index')->name('datadokumen.index');
        Route::get('/create', 'DatadokumenController@create')->name('datadokumen.create');
        Route::post('/store', 'DatadokumenController@store')->name('datadokumen.store');
        Route::get('/{id}/edit', 'DatadokumenController@edit')->name('datadokumen.edit');
        Route::put('/{id}/update', 'DatadokumenController@update')->name('datadokumen.update');
        Route::delete('/{id}/delete', 'DatadokumenController@destroy')->name('datadokumen.destroy');
    });
});