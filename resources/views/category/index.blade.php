@extends('layouts.app')
@section('title', 'Daftar Kategori')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
	{{-- Breadcrumb dinamis --}}
	<x-breadcrumb :items=" [
        'Kategori' => route('categories.index'),
        'Daftar Kategori' => ''
    ]" />
	<!-- Responsive Table -->
	<div class="card">
		<div class="card-header d-flex justify-content-between align-items-center">
			<h5 class="mb-0">Daftar Kategori</h5>
			<!-- Search Form -->
			<form action="{{ route('categories.index') }}" method="GET" class="d-flex" style="width: 300px;">
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
							<th style="width: 5%;">No</th>
							<th style="width: 85%;">Nama</th>
							<th >Actions</th>
						</tr>
					</thead>
					<tbody>
						@forelse($categories as $category)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $category->nama }}</td>
								<td >
									<a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-primary"><i class="bx bx-edit"></i></a>
									<form action="{{ route('categories.destroy', $category->id) }}" 
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
								<td colspan="3" class="text-center">Tidak ada data kategori.</td>
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