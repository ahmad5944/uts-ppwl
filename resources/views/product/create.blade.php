@extends('layouts.app')

@section('content')
<div class="container-fluid px-0">
    <div class="bg-gradient-primary position-relative rounded-4 mb-4 p-4 text-white" style="background: linear-gradient(87deg, #11cdef 0, #1171ef 100%); min-height: 120px;">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
            <div>
                <h2 class="fw-bold mb-1">Tambah Produk</h2>
                <p class="mb-0">Form untuk menambah produk baru ke sistem.</p>
            </div>
            <div class="mt-3 mt-md-0">
                <x-breadcrumb :items="[
                    ['label' => '<i class=\'bx bx-home\'></i> Dashboard', 'url' => route('dashboard')],
                    ['label' => 'Produk', 'url' => route('products.index')],
                    ['label' => 'Tambah Produk', 'url' => '#'],
                ]" />
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card border-0 rounded-4">
                <div class="card-header bg-gradient-primary text-white rounded-top-4" style="background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important;">
                    <h4 class="mb-0">Tambah Produk</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Produk</label>
                            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror rounded-3" value="{{ old('nama') }}" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Kategori</label>
                            <select name="category_id" id="category_id" class="form-select rounded-3 @error('category_id') is-invalid @enderror" required>
                                <option value="">-- Pilih Kategori --</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->nama }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" name="harga" id="harga" class="form-control rounded-3 @error('harga') is-invalid @enderror" value="{{ old('harga') }}" required>
                            @error('harga')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar Produk</label>
                            <div class="border rounded-3 p-3 bg-light position-relative" id="drop-area" style="cursor:pointer;min-height:120px;display:flex;align-items:center;justify-content:center;flex-direction:column;">
                                <input type="file" name="gambar" id="gambar" class="form-control d-none @error('gambar') is-invalid @enderror" accept="image/*">
                                <div id="preview" class="mb-2"></div>
                                <span id="drop-text" class="text-muted"><i class='bx bx-upload fs-2'></i><br>Drag & drop gambar di sini atau klik untuk memilih</span>
                            </div>
                            @error('gambar')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
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
            preview.innerHTML = `<img src="${e.target.result}" class="rounded" style="max-width:120px;max-height:120px;object-fit:cover;">`;
            dropText.style.display = 'none';
        };
        reader.readAsDataURL(file);
    }
</script>
@endpush
@endsection
