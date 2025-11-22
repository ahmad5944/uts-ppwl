@extends('layouts.app')

@section('content')
<div class="container py-4">
    <x-breadcrumb :items="[
        ['label' => '<i class=\'bx bx-home\'></i> Dashboard', 'url' => route('dashboard')],
        ['label' => 'Kategori', 'url' => route('categories.index')],
        ['label' => 'Tambah', 'url' => '#'],
    ]" color="primary" />
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow border-0 rounded-4">
                <div class="card-header bg-gradient-primary text-white rounded-top-3" style="background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important;">
                    <h4 class="mb-0">Add</h4>
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
