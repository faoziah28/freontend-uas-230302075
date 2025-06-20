@extends('layouts.main')

@section('content')
<div class="container py-4">
    <h4 class="text-success mb-4 fw-semibold">➕ Tambah Data Obat</h4>

    <form action="{{ route('obat.store') }}" method="POST" class="p-4 shadow-sm rounded bg-light">
        @csrf

        <div class="mb-3">
            <label for="nama_obat" class="form-label">Nama Obat</label>
            <input type="text" name="nama_obat" id="nama_obat" class="form-control" placeholder="Contoh: Paracetamol" required>
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" name="kategori" id="kategori" class="form-control" placeholder="Contoh: Analgesik" required>
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label">Jumlah Stok</label>
            <input type="number" name="stok" id="stok" class="form-control" placeholder="Contoh: 50" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga Satuan</label>
            <input type="number" name="harga" id="harga" class="form-control" placeholder="Contoh: 10000" required>
        </div>

        <div class="d-flex justify-content-end mt-4">
            <a href="{{ route('obat.index') }}" class="btn btn-secondary me-2">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Simpan
            </button>
        </div>
    </form>
</div>
@endsection
