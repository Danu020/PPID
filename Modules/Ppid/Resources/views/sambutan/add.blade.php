@extends('adminlte::page')
@section('title', 'Tambah Sambutan')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header">
            <h5>Tambah Sambutan Direktur</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('sambutan.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="nama_direktur" class="form-label">Nama Direktur</label>
                    <input type="text" name="nama_direktur" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="isi" class="form-label">Isi Sambutan</label>
                    <textarea name="isi" class="form-control" rows="5" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="media" class="form-label">Media (URL/Link)</label>
                    <input type="url" name="media" class="form-control" placeholder="https://..." required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('sambutan.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection