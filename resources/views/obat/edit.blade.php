@extends('layouts.main')

@section('content')
<div class="container py-4">
    <h4 class="text-warning mb-4 fw-semibold">✏️ Ubah Data Obat</h4>

    <form action="{{ route('obat.update', $obat['id']) }}" method="POST" class="p-4 shadow-sm rounded bg-light">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_obat" class="form-label">Nama Obat</label>
            <input type="text" name="nama_obat" id="nama_obat" value="{{ $obat['nama_obat'] }}" class="form-control" placeholder="Contoh: Paracetamol" required>
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" name="kategori" id="kategori" value="{{ $obat['kategori'] }}" class="form-control" placeholder="Contoh: Analgesik" required>
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label">Stok Tersedia</label>
            <input type="number" name="stok" id="stok" value="{{ $obat['stok'] }}" class="form-control" placeholder="Contoh: 100" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga (Rp)</label>
            <input type="number" name="harga" id="harga" value="{{ $obat['harga'] }}" class="form-control" placeholder="Contoh: 15000" required>
        </div>

        <div class="d-flex justify-content-end gap-2">
            <a href="{{ route('obat.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Batal
            </a>
            <button type="submit" class="btn btn-warning">
                <i class="fas fa-save"></i> Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection
