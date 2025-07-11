@extends('adminlte::page')
@section('title', 'Tambah Permohonan Informasi')
@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header">
            <h5>Tambah Permohonan Informasi</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('permohonaninformasi.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Nama Pemohon</label>
                    <input type="text" name="nama_pemohon" class="form-control" value="{{ old('nama_pemohon', $permohonaninformasi->nama_pemohon ?? '') }}" required>
                </div>
                <div class="mb-3">
                    <label>NIK</label>
                    <input type="text" name="nik" class="form-control" value="{{ old('nik', $permohonaninformasi->nik ?? '') }}" required>
                </div>
                <div class="mb-3">
                    <label>Alamat Pemohon</label>
                    <textarea name="alamat_pemohon" class="form-control" required>{{ old('alamat_pemohon', $permohonaninformasi->alamat_pemohon ?? '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label>Nomor Telepon</label>
                    <input type="text" name="nomor_telepon" class="form-control" value="{{ old('nomor_telepon', $permohonaninformasi->nomor_telepon ?? '') }}" required>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $permohonaninformasi->email ?? '') }}" required>
                </div>
                <div class="mb-3">
                    <label>Informasi yang Dibutuhkan</label>
                    <textarea name="informasi_yang_dibutuhkan" class="form-control" required>{{ old('informasi_yang_dibutuhkan', $permohonaninformasi->informasi_yang_dibutuhkan ?? '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label>Alasan Permohonan</label>
                    <textarea name="alasan_permohonan" class="form-control" required>{{ old('alasan_permohonan', $permohonaninformasi->alasan_permohonan ?? '') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('permohonaninformasi.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection