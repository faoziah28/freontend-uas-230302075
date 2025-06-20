@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Tambah Obat</h4>

    <div class="row justify-content-end">
        <div class="col-md-6">
            <form action="{{ route('obat.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Nama Obat</label>
                    <input type="text" name="nama_obat" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Kategori</label>
                    <input type="text" name="kategori" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Stok</label>
                    <input type="number" name="stok" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control" required>
