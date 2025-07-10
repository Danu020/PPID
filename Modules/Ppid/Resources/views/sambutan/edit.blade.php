@extends('adminlte::page') {{-- atau adminlte::page jika pakai adminLTE --}}
@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header">
            <h5>Edit Sambutan Direktur</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('sambutan.update', $sambutan->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" value="{{ $sambutan->judul }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="nama_direktur" class="form-label">Nama Direktur</label>
                    <input type="text" name="nama_direktur" value="{{ $sambutan->nama_direktur }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="text" name="jabatan" value="{{ $sambutan->jabatan }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="isi" class="form-label">Isi Sambutan</label>
                    <textarea name="isi" rows="5" class="form-control" required>{{ $sambutan->isi }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="media" class="form-label">Media (URL)</label>
                    <input type="url" name="media" value="{{ $sambutan->media }}" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="{{ route('sambutan.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
