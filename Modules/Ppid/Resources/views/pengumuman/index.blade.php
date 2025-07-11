@extends('adminlte::page')
@section('title', 'Daftar Pengumuman')
@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="mb-3">Daftar Pengumuman</h5>
            <a href="{{ route('pengumuman.create') }}" class="btn btn-primary mb-3">Tambah Pengumuman</a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Tanggal</th>
                            <th>Sumber</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pengumumans as $index => $pengumuman)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $pengumuman->judul }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($pengumuman->deskripsi, 60) }}</td>
                            <td>{{ $pengumuman->tanggal }}</td>
                            <td>{{ $pengumuman->sumber }}</td>
                            <td>
                                @if($pengumuman->gambar)
                                    <img src="{{ asset('storage/' . $pengumuman->gambar) }}" alt="Gambar" width="80">
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                                {{-- <a href="{{ route('pengumuman.show', $pengumuman->id) }}" class="btn btn-info btn-sm">Lihat</a> --}}
                                <a href="{{ route('pengumuman.edit', $pengumuman->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('pengumuman.destroy', $pengumuman->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus pengumuman ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center py-3">Belum ada pengumuman.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
