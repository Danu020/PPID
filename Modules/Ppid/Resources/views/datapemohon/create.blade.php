@extends('adminlte::page')
@section('title', 'Tambah Data Pemohon')
@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="mb-3">Tambah Data Pemohon</h5>
            <form action="{{ route('datapemohon.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_pemohon" class="form-label">Nama Pemohon</label>
                    <input type="text" name="nama_pemohon" id="nama_pemohon" class="form-control" value="{{ old('nama_pemohon') }}" required>
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" name="nik" id="nik" class="form-control" value="{{ old('nik') }}" required>
                </div>
                <div class="mb-3">
                    <label for="alamat_pemohon" class="form-label">Alamat Pemohon</label>
                    <input type="text" name="alamat_pemohon" id="alamat_pemohon" class="form-control" value="{{ old('alamat_pemohon') }}" required>
                </div>
                <div class="mb-3">
                    <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                    <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control" value="{{ old('nomor_telepon') }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                </div>
                <div class="mb-3">
                    <label for="informasi_yang_dibutuhkan" class="form-label">Informasi yang Dibutuhkan</label>
                    <textarea name="informasi_yang_dibutuhkan" id="informasi_yang_dibutuhkan" class="form-control" required>{{ old('informasi_yang_dibutuhkan') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="alasan_permohonan" class="form-label">Alasan Permohonan</label>
                    <textarea name="alasan_permohonan" id="alasan_permohonan" class="form-control" required>{{ old('alasan_permohonan') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('datapemohon.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
