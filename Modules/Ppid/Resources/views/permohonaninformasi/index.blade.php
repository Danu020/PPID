@extends('adminlte::page')
@section('title', 'permohonan informasi')
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
                <a href="{{ route('permohonaninformasi.create') }}" class="btn btn-primary">
                    + Tambah
                </a>
            </div>
            
            <!-- Tabel Data Sambutan -->
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped align-middle">
                    <thead class="thead-light">
                        <tr>
                            <th style="width: 50px; text-align: center;">No</th>
                            <th>Nama Pemohon</th>
                            <th>NIK</th>
                            <th>Alamat Pemohon</th>
                            <th>Nomor Telepon</th>
                            <th>Email</th>
                            <th>Informasi yang dibutuhkan</th>
                            <th>Alasan Permohonan</th>
                            <th>Status</th>
                            <th style="width: 120px; text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($permohonaninformasi as $index => $item)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $item->nama_pemohon }}</td>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->alamat_pemohon }}</td>
                            <td>{{ $item->nomor_telepon }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->informasi_yang_dibutuhkan }}</td>
                            <td>{{ $item->alasan_permohonan }}</td>
                            <td>
                                @if($item->status == 'menunggu')
                                    <span class="badge bg-warning text-dark">Menunggu</span>
                                @elseif($item->status == 'diproses')
                                    <span class="badge bg-primary">Diproses</span>
                                @elseif($item->status == 'ditolak')
                                    <span class="badge bg-danger">Ditolak</span>
                                @elseif($item->status == 'diterima')
                                    <span class="badge bg-success">Diterima</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('permohonaninformasi.edit', $item->id) }}" class="btn btn-warning btn-sm mb-1">Edit</a>
                                <form action="{{ route('permohonaninformasi.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10" class="text-center py-3">Data belum tersedia.</td>
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