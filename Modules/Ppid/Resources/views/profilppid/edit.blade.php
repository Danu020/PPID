@extends('adminlte::page')

@section('title', 'Edit Profil PPID')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header">
            <h5>Edit Profil PPID</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('profilppid.update', $profilppid->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $profilppid->judul) }}" required>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="5" class="form-control" required>{{ old('deskripsi', $profilppid->deskripsi) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="{{ route('profilppid.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
