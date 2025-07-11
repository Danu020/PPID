@extends('adminlte::page')
@section('title', 'Daftar Jenis Dokumen')
@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="mb-3">Daftar Jenis Dokumen</h5>
            <a href="{{ route('jenisdokumen.create') }}" class="btn btn-primary mb-3">Tambah Jenis Dokumen</a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="thead-light">
                        <tr>
                            <th style="width: 50px; text-align: center;">No</th>
                            <th>Jenis Dokumen</th>
                            <th style="width: 120px; text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jenisdokumens as $index => $item)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $item->jenis_dokumen }}</td>
                            <td class="text-center">
                                <a href="{{ route('jenisdokumen.edit', $item->id) }}" class="btn btn-warning btn-sm mb-1">Edit</a>
                                <form action="{{ route('jenisdokumen.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center py-3">Data belum tersedia.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
