@extends('adminlte::page')
@section('title', 'Edit Struktur Organisasi')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header">
            <h5>Edit Struktur Organisasi</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('struktur.update', $struktur->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" value="{{ $struktur->judul }}" required>
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Ganti Foto (opsional)</label>
                    <input type="file" name="foto" id="foto" class="form-control">
                    @if($struktur->foto)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $struktur->foto) }}" width="150" class="img-thumbnail">
                        </div>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="{{ route('struktur.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
