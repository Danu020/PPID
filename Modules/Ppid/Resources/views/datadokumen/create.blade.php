@extends('adminlte::page')
@section('title', 'Tambah Data Dokumen')
@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="mb-3">Tambah Data Dokumen</h5>
            <form action="{{ route('datadokumen.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_dokumen" class="form-label">Nama Dokumen</label>
                    <input type="text" name="nama_dokumen" id="nama_dokumen" class="form-control" value="{{ old('nama_dokumen') }}" required>
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="date" name="tahun" id="tahun" class="form-control" value="{{ old('tahun') }}">
                </div>
                <div class="mb-3">
                    <label for="jenis_dokumens_id" class="form-label">Jenis Dokumen</label>
                    <select name="jenis_dokumens_id" id="jenis_dokumens_id" class="form-control" required>
                        <option value="">- Pilih Jenis Dokumen -</option>
                        @foreach($jenis_dokumens as $jenis)
                            <option value="{{ $jenis->id }}">{{ $jenis->nama_jenis }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">Upload File</label>
                    <input type="file" name="file" id="file" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('datadokumen.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
