@extends('adminlte::page')
@section('title', 'Edit Data Pemohon')
@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="mb-3">Edit Data Pemohon</h5>
            <form action="{{ route('permohonaninformasi.update', $permohonaninformasi->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_pemohon" class="form-label">Nama Pemohon</label>
                    <input type="text" name="nama_pemohon" id="nama_pemohon" class="form-control" value="{{ old('nama_pemohon', $permohonaninformasi->nama_pemohon) }}" required>
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" name="nik" id="nik" class="form-control" value="{{ old('nik', $permohonaninformasi->nik) }}" required>
                </div>
                <div class="mb-3">
                    <label for="alamat_pemohon" class="form-label">Alamat Pemohon</label>
                    <input type="text" name="alamat_pemohon" id="alamat_pemohon" class="form-control" value="{{ old('alamat_pemohon', $permohonaninformasi->alamat_pemohon) }}" required>
                </div>
                <div class="mb-3">
                    <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                    <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control" value="{{ old('nomor_telepon', $permohonaninformasi->nomor_telepon) }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $permohonaninformasi->email) }}" required>
                </div>
                <div class="mb-3">
                    <label for="informasi_yang_dibutuhkan" class="form-label">Informasi yang Dibutuhkan</label>
                    <textarea name="informasi_yang_dibutuhkan" id="informasi_yang_dibutuhkan" class="form-control" required>{{ old('informasi_yang_dibutuhkan', $permohonaninformasi->informasi_yang_dibutuhkan) }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="alasan_permohonan" class="form-label">Alasan Permohonan</label>
                    <textarea name="alasan_permohonan" id="alasan_permohonan" class="form-control" required>{{ old('alasan_permohonan', $permohonaninformasi->alasan_permohonan) }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="menunggu" @if($permohonaninformasi->status == 'menunggu') selected @endif>Menunggu</option>
                        <option value="diproses" @if($permohonaninformasi->status == 'diproses') selected @endif>Diproses</option>
                        <option value="ditolak" @if($permohonaninformasi->status == 'ditolak') selected @endif>Ditolak</option>
                        <option value="diterima" @if($permohonaninformasi->status == 'diterima') selected @endif>Diterima</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('datapemohon.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
