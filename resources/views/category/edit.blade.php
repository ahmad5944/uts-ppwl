@extends('layouts.app')

@section('content')
<div class="container-fluid px-0">
    <div class="bg-gradient-warning position-relative rounded-4 mb-4 p-4 text-white" style="background: linear-gradient(87deg, #f6c23e 0, #fb6340 100%); min-height: 120px;">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
            <div>
                <h2 class="fw-bold mb-1">Edit Kategori</h2>
                <p class="mb-0">Form untuk mengedit data kategori produk.</p>
            </div>
            <div class="mt-3 mt-md-0">
                <x-breadcrumb :items="[
                    ['label' => '<i class=\'bx bx-home\'></i> Dashboard', 'url' => route('dashboard')],
                    ['label' => 'Kategori', 'url' => route('categories.index')],
                    ['label' => 'Edit Kategori', 'url' => '#'],
                ]" color="warning" />
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card border-0 rounded-4">
                <div class="card-header bg-gradient-warning text-white rounded-top-4" style="background: linear-gradient(87deg, #f6c23e 0, #fb6340 100%) !important;">
                    <h4 class="mb-0">Edit Kategori</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('categories.update', $category) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Kategori</label>
                            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror rounded-3" value="{{ old('nama', $category->nama) }}" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-warning text-white rounded-3">Update</button>
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary rounded-3">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
