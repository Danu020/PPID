@extends('adminlte::page')
@section('title', 'Tambah Data Informasi')
@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="mb-3">Tambah Data Informasi</h5>
            <form action="{{ route('datainformasi.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_informasi" class="form-label">Nama Informasi</label>
                    <input type="text" name="nama_informasi" id="nama_informasi" class="form-control" value="{{ old('nama_informasi') }}" required>
                </div>
                <div class="mb-3">
                    <label for="jenis_informasi_id" class="form-label">Jenis Informasi</label>
                    <select name="jenis_informasi_id" id="jenis_informasi_id" class="form-control" required>
                        <option value="">- Pilih Jenis Informasi -</option>
                        @foreach($jenisInformasi as $jenis)
                            <option value="{{ $jenis->id }}">{{ $jenis->jenis_informasi }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Link</label>
                    <input type="url" name="link" id="link" class="form-control" value="{{ old('link') }}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('datainformasi.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
