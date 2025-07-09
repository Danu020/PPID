@extends('adminlte::page')
@section('title', 'Kelola Permohonan Informasi')
@section('plugins.Select2', true)
@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="mb-3">Daftar Permohonan Informasi</h5>
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped align-middle">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Pemohon</th>
                            <th>Informasi Dibutuhkan</th>
                            <th>Status</th>
                            <th style="width: 220px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($permohonaninformasi as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nama_pemohon }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($item->informasi_yang_dibutuhkan, 60) }}</td>
                            <td>
                                <span class="badge 
                                    @if($item->status == 'menunggu') bg-warning 
                                    @elseif($item->status == 'diproses') bg-primary 
                                    @elseif($item->status == 'ditolak') bg-danger 
                                    @else bg-success @endif">
                                    {{ ucfirst($item->status) }}
                                </span>
                            </td>
                            <td>
                                @if($item->status == 'menunggu')
                                    <form action="{{ route('permohonaninformasi.updateStatus', ['id' => $item->id, 'status' => 'diproses']) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-sm btn-primary" onclick="return confirm('Konfirmasi permohonan ini?')">Konfirmasi</button>
                                    </form>
                                    <form action="{{ route('permohonaninformasi.updateStatus', ['id' => $item->id, 'status' => 'ditolak']) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Tolak permohonan ini?')">Tolak</button>
                                    </form>
                                @elseif($item->status == 'diproses')
                                    <form action="{{ route('permohonaninformasi.updateStatus', ['id' => $item->id, 'status' => 'selesai']) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-sm btn-success" onclick="return confirm('Tandai sebagai selesai?')">Selesai</button>
                                    </form>
                                @else
                                    <em>Tidak ada aksi</em>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-3">Belum ada permohonan informasi.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection