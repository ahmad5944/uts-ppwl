@extends('layouts.app')
@section('title', 'Tambah Produk')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    {{-- Breadcrumb dinamis --}}
    <x-breadcrumb :items=" [
        'Produk' => route('products.index'),
        'Tambah Produk' => ''
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
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="inputGroupFile04">Foto</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="file" class="form-control @error('foto') is-invalid @enderror" id="inputGroupFile04" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-package"></i></span>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Silahkan isi nama produk" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="basic-icon-default-message">Deskripsi</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-comment-detail"></i></span>
                                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Silahkan isi deskripsi produk"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="basic-icon-default-phone">Harga</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-dollar-circle"></i></span>
                                    <input type="text" class="form-control phone-mask @error('harga') is-invalid @enderror" placeholder="1,000,00" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="basic-icon-default-phone">Stok</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-package"></i></span>
                                    <input type="text" class="form-control phone-mask @error('stok') is-invalid @enderror" placeholder="10" />
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
@endsection
