@extends('layouts.app')

@section('content')
<div class="container-fluid px-0">
    <div class="bg-gradient-primary position-relative rounded-4 mb-4 p-4 text-white" style="background: linear-gradient(87deg, #11cdef 0, #1171ef 100%); min-height: 120px;">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
            <div>
                <h2 class="fw-bold mb-1">Produk</h2>
                <p class="mb-0">Daftar produk yang tersedia di sistem.</p>
            </div>
            <div class="mt-3 mt-md-0">
                <x-breadcrumb :items="[
                    ['label' => '<i class=\'bx bx-home\'></i> Dashboard', 'url' => route('dashboard')],
                    ['label' => 'Produk', 'url' => route('products.index')],
                ]" />
            </div>
        </div>
    </div>
    <div class="card border-0 mb-4 bg-white rounded-4">
        <div class="card-body pb-0">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-3 gap-2">
                <form method="GET" action="{{ route('products.index') }}" class="w-100 w-md-auto">
                    <div class="input-group input-group-lg">
                        <input type="text" name="search" class="form-control rounded-start-4" placeholder="Cari produk..." value="{{ request('search') }}" style="font-size:1.1rem;">
                        <button class="btn btn-outline-primary rounded-end-4" type="submit"><i class='bx bx-search'></i></button>
                    </div>
                </form>
                <a href="{{ route('products.create') }}" class="btn btn-primary rounded-4" style="font-size:1.15rem;padding:10px 28px;"><i class='bx bx-plus'></i></a>
            </div>
            <div class="table-responsive">
                <table class="table align-middle table-hover table-striped mb-3 rounded-4 overflow-hidden" style="background:#fff;">
                    <thead class="bg-light">
                        <tr style="font-weight:600;">
                            <th>#</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if($product->gambar)
                                        <img src="{{ asset('storage/'.$product->gambar) }}" alt="{{ $product->nama }}" class="rounded" style="width: 56px; height: 56px; object-fit: cover;">
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td class="fw-semibold">{{ $product->nama }}</td>
                                <td>{{ $product->category->nama ?? '-' }}</td>
                                <td>Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                                <td class="text-truncate" style="max-width: 200px;">{{ $product->deskripsi }}</td>
                                <td>
                                    <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning rounded-3"><i class='bx bx-edit'></i></a>
                                    <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger btn-delete rounded-3"><i class='bx bx-trash'></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada data.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.querySelectorAll('.delete-form').forEach(form => {
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Yakin hapus data?',
            text: 'Data yang dihapus tidak dapat dikembalikan!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
});
</script>
@endpush
