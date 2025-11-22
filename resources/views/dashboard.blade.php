
@extends('layouts.app')

@section('content')
<div class="container-fluid px-0">
    <div class="bg-gradient-primary position-relative rounded-4 mb-4 p-4 text-white" style="background: linear-gradient(87deg, #11cdef 0, #1171ef 100%); min-height: 180px;">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
            <div>
                <h2 class="fw-bold mb-1">Dashboard</h2>
                <p class="mb-0">Selamat datang di halaman Dashboard UTS PPWL.</p>
            </div>
            <div class="mt-3 mt-md-0">
                <x-breadcrumb :items="[
                    ['label' => '<i class=\'bx bx-home\'></i> Dashboard', 'url' => route('dashboard')],
                ]" />
            </div>
        </div>
    </div>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card rounded-4 border-0">
                <div class="card-body text-center py-4">
                    <div class="mb-2"><i class='bx bx-category-alt fs-1 text-primary'></i></div>
                    <h5 class="fw-bold mb-0">Kategori</h5>
                    <div class="text-muted">Manajemen kategori produk</div>
                    <a href="{{ route('categories.index') }}" class="btn btn-outline-primary btn-sm mt-3">Lihat Kategori</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card rounded-4 border-0">
                <div class="card-body text-center py-4">
                    <div class="mb-2"><i class='bx bx-cube fs-1 text-success'></i></div>
                    <h5 class="fw-bold mb-0">Produk</h5>
                    <div class="text-muted">Manajemen produk & stok</div>
                    <a href="{{ route('products.index') }}" class="btn btn-outline-success btn-sm mt-3">Lihat Produk</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card rounded-4 border-0">
                <div class="card-body text-center py-4">
                    <div class="mb-2"><i class='bx bx-user fs-1 text-info'></i></div>
                    <h5 class="fw-bold mb-0">Profil</h5>
                    <div class="text-muted">Pengaturan akun Anda</div>
                    <a href="{{ route('profile.edit') }}" class="btn btn-outline-info btn-sm mt-3">Edit Profil</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
