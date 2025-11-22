@extends('layouts.app')

@section('content')
<div class="container-fluid px-0">
    <div class="bg-gradient-primary position-relative rounded-4 mb-4 p-4 text-white" style="background: linear-gradient(87deg, #11cdef 0, #1171ef 100%); min-height: 120px;">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
            <div>
                <h2 class="fw-bold mb-1">Tambah Kategori</h2>
                <p class="mb-0">Form untuk menambah kategori produk baru.</p>
            </div>
            <div class="mt-3 mt-md-0">
                <x-breadcrumb :items="[
                    ['label' => '<i class=\'bx bx-home\'></i> Dashboard', 'url' => route('dashboard')],
                    ['label' => 'Kategori', 'url' => route('categories.index')],
                    ['label' => 'Tambah Kategori', 'url' => '#'],
                ]" color="primary" />
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card border-0 rounded-4">
                <div class="card-header bg-gradient-primary text-white rounded-top-4" style="background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important;">
                    <h4 class="mb-0">Tambah Kategori</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Kategori</label>
                            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror rounded-3" value="{{ old('nama') }}" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary rounded-3">Simpan</button>
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary rounded-3">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
