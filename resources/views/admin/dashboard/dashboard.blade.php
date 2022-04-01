@extends('admin.index')
@section('container')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Selamat datang, Admin!</h3>
                    {{-- <p class="text-subtitle text-muted">Navbar will appear in top of the page.</p> --}}
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon red">
                                            <i class="fas fa-user-friends fa-lg" style="color: rgb(255, 255, 255)"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <a href="/employees">
                                            <h6 class="text-muted font-semibold">Kelola Ruangan</h6>
                                        </a>
                                        <h6 class="font-extrabold mb-0">1</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon blue">
                                            <i class="fas fa-file-alt fa-lg" style="color: rgb(255, 255, 255)"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <a href="/catalogs">
                                            <h6 class="text-muted font-semibold">Kelola Aset</h6>
                                        </a>
                                        <h6 class="font-extrabold mb-0">3</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon green">
                                            <i class="fas fa-bell fa-lg" style="color: rgb(255, 255, 255)"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <a href="/request">
                                            <h6 class="text-muted font-semibold">Kelola Peminjaman</h6>
                                        </a>
                                        <h6 class="font-extrabold mb-0">4</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
