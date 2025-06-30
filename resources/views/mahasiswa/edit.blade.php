@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Edit Mahasiswa</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" value="{{ $mahasiswa->jurusan }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Ganti Foto (kosongkan jika tidak diganti)</label>
                <input type="file" name="foto" class="form-control">
                @if($mahasiswa->foto)
                    <div class="mt-3">
                        <img src="{{ asset('storage/' . $mahasiswa->foto) }}" class="rounded" width="120" style="object-fit: cover;">
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">🔄 Update</button>
        </form>
    </div>
</div>
@endsection
