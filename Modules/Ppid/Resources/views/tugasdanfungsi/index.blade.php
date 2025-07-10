@extends('adminlte::page')
@section('title', 'List Menu')
@section('plugins.Select2', true)
@section('content_header')
    <h1 class="m-0 text-dark"></h1>
@stop

@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <!-- Header: Tombol Tambah -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="{{ route('tugasdanfungsi.create') }}" class="btn btn-primary">+ Tambah</a>
            </div>

            <!-- Tabel Data Profil PPID -->
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped align-middle">
                    <thead class="thead-light">
                        <tr>
                            <th style="width: 50px; text-align: center;">No</th>
                            <th>Judul</th>
                            <th>Tugas PPID</th>
                            <th>Fungsi PPID</th>
                            <th style="width: 120px; text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tugasdanfungsi as $index => $item)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($item->tugas, 100) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($item->fungsi, 100) }}</td>
                            <td class="text-center">
                                <a href="{{ route('tugasdanfungsi.edit', $item->id) }}" class="btn btn-warning btn-sm mb-1">Edit</a>
                                <form action="{{ route('tugasdanfungsi.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center py-3">Data belum tersedia.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.bootstrap5.css">
@stop

@push('js')
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            responsive: true,
            autoWidth: false
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-"></script>
<script src="bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.3.1/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.3.1/js/dataTables.bootstrap5.js"></script>
@endpush