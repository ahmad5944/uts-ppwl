@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <!-- Welcome Card -->
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Selamat datang, Admin!</h5>
                            <p class="mb-4">
                                Selamat datang di halaman <span class="fw-bold">Dashboard</span> UTS PPWL.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img
                                src="../assets/img/illustrations/man-with-laptop-light.png"
                                height="140"
                                alt="Admin Illustration"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <!-- Total Products Card -->
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt1">
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Total Produk</span>
                            <h3 class="card-title mb-2">{{ $productCount }}</h3>
                        </div>
                    </div>
                </div>

                <!-- Total Categories Card -->
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/wallet-info.png" alt="categories" class="rounded" />
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt2">
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Total Kategori</span>
                            <h3 class="card-title mb-2">{{ $categoryCount }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection