@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <h4 class="fw-bold text-dark mb-4">📋 Data Obat</h4>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="d-flex justify-content-between mb-3">
        <form action="{{ route('obat.index') }}" method="GET" class="d-flex" style="width: 60%;">
            <input type="text" name="search" class="form-control me-2" placeholder="Cari obat..." value="{{ request('search') }}">
            <button type="submit" class="btn btn-outline-dark">
                <i class="fas fa-search"></i> Cari
            </button>
        </form>
        <a href="{{ route('obat.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dataObat as $index => $item)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $item['nama_obat'] }}</td>
                        <td>{{ $item['kategori'] }}</td>
                        <td class="text-center">{{ $item['stok'] }}</td>
                        <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                        <td class="text-center">
                            <a href="{{ route('obat.edit', $item['id']) }}" class="btn btn-sm btn-warning me-1">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('obat.destroy', $item['id']) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">Belum ada data.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
