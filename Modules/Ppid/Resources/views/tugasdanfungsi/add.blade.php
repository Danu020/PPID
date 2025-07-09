@extends('adminlte::page')

@section('title', 'Tambah Tugas dan Fungsi')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header">
            <h5>Tambah Tugas dan Fungsi</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('tugasdanfungsi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="tugas" class="form-label">Tugas PPID</label>
                    <textarea name="tugas" id="tugas" rows="5" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="fungsi" class="form-label">Fungsi PPID</label>
                    <textarea name="fungsi" id="fungsi" rows="5" class="form-control" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('tugasdanfungsi.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection