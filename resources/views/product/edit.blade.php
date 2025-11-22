@extends('layouts.app')
@section('title', 'Edit Produk')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    {{-- Breadcrumb dinamis --}}
    <x-breadcrumb :items="[
        'Produk' => route('products.index'),
        'Edit Produk' => ''
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
                    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- NAMA --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="nama">Nama</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bx bx-package"></i></span>
                                    <input
                                        type="text"
                                        name="nama"
                                        id="nama"
                                        class="form-control @error('nama') is-invalid @enderror"
                                        value="{{ old('nama', $product->nama) }}"
                                        placeholder="Silahkan isi nama produk"
                                        required
                                    />
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- KATEGORI --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="category_id">Kategori</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bx bx-category"></i></span>
                                    <select
                                        name="category_id"
                                        id="category_id"
                                        class="form-select @error('category_id') is-invalid @enderror"
                                        required
                                    >
                                        <option value="">-- Pilih Kategori --</option>
                                        @foreach($categories as $category)
                                            <option
                                                value="{{ $category->id }}"
                                                {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}
                                            >
                                                {{ $category->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- HARGA --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="harga">Harga</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bx bx-dollar-circle"></i></span>
                                    <input
                                        type="number"
                                        name="harga"
                                        id="harga"
                                        class="form-control @error('harga') is-invalid @enderror"
                                        value="{{ old('harga', $product->harga) }}"
                                        min="0"
                                        required
                                    />
                                    @error('harga')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- DESKRIPSI --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="deskripsi">Deskripsi</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bx bx-comment-detail"></i></span>
                                    <textarea
                                        name="deskripsi"
                                        id="deskripsi"
                                        class="form-control @error('deskripsi') is-invalid @enderror"
                                        placeholder="Silahkan isi deskripsi produk"
                                    >{{ old('deskripsi', $product->deskripsi) }}</textarea>
                                    @error('deskripsi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                       <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-10">

                                <label for="gambar"
                                    id="drop-area"
                                    class="border rounded-3 p-3 bg-light position-relative w-100"
                                    style="cursor: pointer; min-height: 150px;
                                    display:flex; align-items:center; justify-content:center; flex-direction:column;">

                                    <input
                                        type="file"
                                        name="gambar"
                                        id="gambar"
                                        class="d-none @error('gambar') is-invalid @enderror"
                                        accept="image/*"
                                    >

                                    <div id="preview" class="mb-2">
                                        @if($product->gambar)
                                            <img src="{{ asset('storage/'.$product->gambar) }}"
                                                class="rounded"
                                                style="max-width:120px; max-height:120px; object-fit:cover;">
                                        @endif
                                    </div>

                                    <span id="drop-text" class="text-muted text-center" style="{{ $product->gambar ? 'display:none;' : '' }}">
                                        <i class='bx bx-upload fs-2'></i><br>
                                        Drag & drop gambar di sini atau klik untuk memilih
                                    </span>

                                </label>

                                @error('gambar')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    const dropArea = document.getElementById('drop-area');
    const input = document.getElementById('gambar');
    const preview = document.getElementById('preview');
    const dropText = document.getElementById('drop-text');

    dropArea.addEventListener('click', () => input.click());
    dropArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropArea.classList.add('border-primary');
    });
    dropArea.addEventListener('dragleave', (e) => {
        e.preventDefault();
        dropArea.classList.remove('border-primary');
    });
    dropArea.addEventListener('drop', (e) => {
        e.preventDefault();
        dropArea.classList.remove('border-primary');
        if (e.dataTransfer.files.length) {
            input.files = e.dataTransfer.files;
            showPreview(input.files[0]);
        }
    });
    input.addEventListener('change', (e) => {
        if (input.files.length) {
            showPreview(input.files[0]);
        }
    });
    function showPreview(file) {
        if (!file.type.startsWith('image/')) return;
        const reader = new FileReader();
        reader.onload = (e) => {
            preview.innerHTML =
                `<img src="${e.target.result}" class="rounded"
                       style="max-width:120px;max-height:120px;object-fit:cover;">`;
            dropText.style.display = 'none';
        };
        reader.readAsDataURL(file);
    }
</script>
@endpush

@endsection
