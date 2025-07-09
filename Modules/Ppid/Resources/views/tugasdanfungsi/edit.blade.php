@extends('adminlte::page')

@section('title', 'Edit Profil PPID')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header">
            <h5>Edit Tugas dan Fungsi PPID</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('tugasdanfungsi.update', $tugasdanfungsi->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $tugasdanfungsi->judul) }}" required>
                </div>

                <div class="mb-3">
                    <label for="tugas" class="form-label">Tugas PPID</label>
                    <textarea name="tugas" id="tugas" rows="5" class="form-control" required>{{ old('tugas', $tugasdanfungsi->tugas) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="fungsi" class="form-label">Fungsi PPID</label>
                    <textarea name="fungsi" id="fungsi" rows="5" class="form-control" required>{{ old('fungsi', $tugasdanfungsi->fungsi) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="{{ route('tugasdanfungsi.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
