@extends('layouts.app')
@section('title', 'Tambah Kategori')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    {{-- Breadcrumb dinamis --}}
    <x-breadcrumb :items=" [
        'Kategori' => route('categories.index'),
        'Tambah Kategori' => ''
    ]" />

    <div class="row">
        <div class="mb-4">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">
                <i class="bx bx-arrow-back"></i> Kembali
            </a>
        </div>

        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="nama">Nama</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bx bx-package"></i></span>
                                    <input type="text" name="nama" id="nama"
                                        class="form-control @error('nama') is-invalid @enderror"
                                        placeholder="Silahkan isi nama kategori"
                                        value="{{ old('nama') }}" required>
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@push('scripts')

@endpush

@endsection
