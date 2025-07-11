@extends('adminlte::page')
@section('title', 'Kelola Permohonan Informasi (Admin)')
@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="mb-3">Daftar Permohonan Informasi (Admin)</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
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
                            <th style="width: 180px; text-align: center;">Aksi</th>
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
                                <a href="{{ route('datapemohon.show', $item->id) }}" class="btn btn-info btn-sm mb-1">Detail</a>
                                <a href="{{ route('datapemohon.edit', $item->id) }}" class="btn btn-warning btn-sm mb-1">Edit</a>
                                <form action="{{ route('datapemohon.destroy', $item->id) }}" method="POST" class="d-inline">
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