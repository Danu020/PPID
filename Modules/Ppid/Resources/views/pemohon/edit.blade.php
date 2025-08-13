@extends('adminlte::page') {{-- atau adminlte::page jika pakai adminLTE --}}
@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header">
            <h5>Edit Permohonan Informasi</h5>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('permohonaninformasi.update', $permohonaninformasi->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
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
                    <label>Jenis Permohonan</label>
                    <select name="jenis_permohonan_id" class="form-control select2" required>
                        <option value="">Pilih Jenis Permohonan</option>
                        @foreach($jenis_permohonan as $jenis)
                            <option value="{{ $jenis->id }}" {{ (old('jenis_permohonan_id', $permohonaninformasi->jenis_permohonan_id ?? '') == $jenis->id) ? 'selected' : '' }}>
                                {{ $jenis->jenis_permohonan }}
                            </option>
                        @endforeach
                    </select>
                <div class="mb-3">
                    <label>Informasi yang Dibutuhkan</label>
                    <textarea name="informasi_yang_dibutuhkan" class="form-control" required>{{ old('informasi_yang_dibutuhkan', $permohonaninformasi->informasi_yang_dibutuhkan ?? '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label>Alasan Permohonan</label>
                    <textarea name="alasan_permohonan" class="form-control" required>{{ old('alasan_permohonan', $permohonaninformasi->alasan_permohonan ?? '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label>Status</label>
                    <select name="status" class="form-control" required>
                        <option value="diproses" {{ $permohonaninformasi->status == 'diproses' ? 'selected' : '' }}>diproses</option>
                        <option value="disetujui" {{ $permohonaninformasi->status == 'disetujui' ? 'selected' : '' }}>disetujui</option>
                        <option value="ditolak" {{ $permohonaninformasi->status == 'ditolak' ? 'selected' : '' }}>ditolak</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>File</label>
                    <input type="file" name="file" class="form-control">
                    @if($permohonaninformasi->file)
                        <small class="form-text text-muted">File saat ini: <a href="{{ asset('storage/' . $permohonaninformasi->file) }}" target="_blank">Lihat File</a></small>
                    @endif
                </div>
                <div class="mb-3">
                    <label>Catatan</label>
                    <textarea name="catatan" class="form-control">{{ old('catatan', $permohonaninformasi->catatan ?? '') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="{{ route('permohonaninformasi.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
