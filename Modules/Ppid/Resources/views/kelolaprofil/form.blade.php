@extends('adminlte::page')
@section('title', 'Kelola Profil PPID')
@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="mb-3">Form Kelola Profil PPID</h5>
            <form action="{{ isset($kelola_profil) ? route('kelolaprofil.update', $kelola_profil->id) : route('kelolaprofil.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($kelola_profil))
                    @method('PUT')
                @endif
                <div class="mb-3">
                    <label for="nama_direktur" class="form-label">Nama Direktur</label>
                    <input type="text" name="nama_direktur" id="nama_direktur" class="form-control" value="{{ old('nama_direktur', $kelola_profil->nama_direktur ?? '') }}" required>
                </div>
                <div class="mb-3">
                    <label for="sambutan" class="form-label">Sambutan</label>
                    <textarea name="sambutan" id="sambutan" class="form-control" required>{{ old('sambutan', $kelola_profil->sambutan ?? '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="media" class="form-label">Media</label>
                    <input type="text" name="media" id="media" class="form-control" value="{{ old('media', $kelola_profil->media ?? '') }}">
                </div>
                <div class="mb-3">
                    <label for="ppid" class="form-label">PPID</label>
                    <input type="text" name="ppid" id="ppid" class="form-control" value="{{ old('ppid', $kelola_profil->ppid ?? '') }}">
                </div>
                <div class="mb-3">
                    <label for="foto_organisasi" class="form-label">Foto Organisasi</label>
                    <input type="file" name="foto_organisasi" id="foto_organisasi" class="form-control">
                    @if(isset($kelola_profil) && $kelola_profil->foto_organisasi)
                        <small>File saat ini: <a href="{{ asset('storage/' . $kelola_profil->foto_organisasi) }}" target="_blank">Lihat Foto</a></small>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="tugas_fungsi" class="form-label">Tugas dan Fungsi</label>
                    <textarea name="tugas_fungsi" id="tugas_fungsi" class="form-control">{{ old('tugas_fungsi', $kelola_profil->tugas_fungsi ?? '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="visi" class="form-label">Visi</label>
                    <input type="text" name="visi" id="visi" class="form-control" value="{{ old('visi', $kelola_profil->visi ?? '') }}">
                </div>
                <div class="mb-3">
                    <label for="misi" class="form-label">Misi</label>
                    <textarea name="misi" id="misi" class="form-control">{{ old('misi', $kelola_profil->misi ?? '') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">{{ isset($kelola_profil) ? 'Update' : 'Simpan' }}</button>
            </form>
        </div>
    </div>
</div>
@endsection
