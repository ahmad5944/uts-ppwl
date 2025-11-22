@extends('layouts.app')

@section('content')
<div class="container py-4">
    <x-breadcrumb :items="[
        ['label' => '<i class=\'bx bx-home\'></i> Dashboard', 'url' => route('dashboard')],
        ['label' => 'Kategori', 'url' => route('categories.index')],
        ['label' => 'Edit', 'url' => '#'],
    ]" color="warning" />
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow border-0 rounded-4">
                <div class="card-header bg-gradient-warning text-white rounded-top-3" style="background: linear-gradient(87deg, #f6c23e 0, #fb6340 100%) !important;">
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
