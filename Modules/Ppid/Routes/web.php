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
    Route::prefix('permohonan-informasi')->group(function () {
        Route::get('/', 'PermohonaninformasiController@index')->name('permohonaninformasi.index');
        Route::get('/create', 'PermohonaninformasiController@create')->name('permohonaninformasi.create');
        Route::post('/store', 'PermohonaninformasiController@store')->name('permohonaninformasi.store');
        Route::get('/{id}/edit', 'PermohonaninformasiController@edit')->name('permohonaninformasi.edit');
        Route::put('/{id}/update', 'PermohonaninformasiController@update')->name('permohonaninformasi.update');
        Route::delete('/{id}/delete', 'PermohonaninformasiController@destroy')->name('permohonaninformasi.destroy');
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

});