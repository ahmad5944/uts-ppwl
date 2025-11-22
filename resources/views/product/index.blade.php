@extends('layouts.app')
@section('title', 'Daftar Produk')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
	{{-- Breadcrumb dinamis --}}
	<x-breadcrumb :items=" [
        'Produk' => route('products.index'),
        'Daftar Produk' => ''
    ]" />
	<!-- Responsive Table -->
	<div class="card">
		<div class="card-header d-flex justify-content-between align-items-center">
			<h5 class="mb-0">Daftar Produk</h5>
			<!-- Search Form -->
			<form action="{{ route('products.index') }}" method="GET" class="d-flex" style="width: 300px;">
				<input type="text" name="search" class="form-control me-2" placeholder="Cari..." value="{{ request('search') }}">
				<button class="btn btn-primary btn-sm" type="submit">
					<i class="bx bx-search"></i>
				</button>
			</form>
		</div>
		<div class="card-body">
			<div class="table-responsive text-nowrap">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Foto</th>
							<th>Nama</th>
							<th>Kategori</th>
							<th>Deskripsi</th>
							<th>Harga</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@forelse($products as $product)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>
									@if($product->gambar)
										<img src="{{ asset('storage/' . $product->gambar) }}" alt="{{ $product->nama }}" class="img-thumbnail" width="80">
									@else
										<img src="{{ asset('assets/img/avatars/5.png') }}" alt="default" class="img-thumbnail" width="80">
									@endif
								</td>
								<td>{{ $product->nama }}</td>
								<td>{{ $product->category?->nama ?? '-' }}</td>
								<td>{{ $product->deskripsi }}</td>
								<td>Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
								<td>
									<a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary"><i class="bx bx-edit"></i></a>
									<form action="{{ route('products.destroy', $product->id) }}" 
										method="POST" 
										class="d-inline form-delete">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-sm btn-danger">
											<i class="bx bx-trash"></i>
										</button>
									</form>
								</td>
							</tr>
						@empty
							<tr>
								<td colspan="7" class="text-center">Tidak ada data produk.</td>
							</tr>
						@endforelse
					</tbody>
				</table>
			</div>
			<!-- Pagination (optional, if using pagination) -->
			{{-- 
			<div class="mt-3 d-flex justify-content-center">
				{{ $products->links() }}
			</div>
			--}}
		</div>
	</div>
</div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteForms = document.querySelectorAll('.form-delete');

        deleteForms.forEach(form => {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Data kategori akan dihapus secara permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>