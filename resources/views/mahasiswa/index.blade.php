@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Data Mahasiswa</h4>
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-light btn-sm">+ Tambah Mahasiswa</a>
    </div>

    <div class="card-body">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        @if($mahasiswas->count() > 0)
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light text-center">
                    <tr>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mahasiswas as $m)
                    <tr>
                        <td class="text-center">
                            @if($m->foto)
                                <img src="{{ asset('storage/' . $m->foto) }}" class="rounded-circle" width="60" height="60" style="object-fit: cover;">
                            @else
                                <span class="text-muted">Tidak Ada</span>
                            @endif
                        </td>
                        <td>{{ $m->nama }}</td>
                        <td>{{ $m->nim }}</td>
                        <td>{{ $m->jurusan }}</td>
                        <td class="text-center">
                            <a href="{{ route('mahasiswa.edit', $m->id) }}" class="btn btn-warning btn-sm me-1">
                                ✏️ Edit
                            </a>
                            <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">🗑️ Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
            <div class="alert alert-info text-center">Belum ada data mahasiswa.</div>
        @endif
    </div>
</div>
@endsection
