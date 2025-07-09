@extends('adminlte::page')

@section('title', 'Tambah Struktur Organisasi')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header">
            <h5>Tambah Struktur Organisasi</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('struktur.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto Struktur (jpeg/png)</label>
                    <input type="file" name="foto" id="foto" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('struktur.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
