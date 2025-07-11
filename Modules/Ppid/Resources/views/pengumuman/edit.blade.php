@extends('adminlte::page')
@section('title', 'Edit Pengumuman')
@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="mb-3">Edit Pengumuman</h5>
            <form action="{{ route('pengumuman.update', $pengumuman->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $pengumuman->judul) }}" required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="6" required>{{ old('deskripsi', $pengumuman->deskripsi) }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ old('tanggal', $pengumuman->tanggal) }}" required>
                </div>
                <div class="mb-3">
                    <label for="sumber" class="form-label">Sumber</label>
                    <input type="text" name="sumber" id="sumber" class="form-control" value="{{ old('sumber', $pengumuman->sumber) }}">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" name="gambar" id="gambar" class="form-control">
                    @if($pengumuman->gambar)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $pengumuman->gambar) }}" alt="Gambar" width="120">
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('pengumuman.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
