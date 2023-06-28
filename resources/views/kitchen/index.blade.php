@extends('kitchen.layouts.main')

@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills mb-3 nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-bell me-1"></i> Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kitchen/menu"><i class="bx bx-link-alt me-1"></i> Produk / Menu</a>
                </li>
            </ul>
            <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-header">Pesanan</div>
                        <div class="card-body">
                            <h5 class="card-title">Meja 8</h5>
                            <p class="card-text">
                                Ayam Penyet 2<br>
                                Jus Jeruk 1
                            </p>
                            <div class="btn-group">
                                <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Menunggu
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Menunggu</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Sedang Dimasak</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Siap Saji</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-header">Pesanan</div>
                        <div class="card-body">
                            <h5 class="card-title">Meja 7</h5>
                            <p class="card-text">
                                Nasi Goreng 2<br>
                                Ifu Mie 1 <br>
                                Jus Mangga 1 <br>
                                Jus Alpokat 1
                            </p>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sedang Dimasak
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Menunggu</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Sedang Dimasak</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Siap Saji</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-header">Pesanan</div>
                        <div class="card-body">
                            <h5 class="card-title">Meja 5</h5>
                            <p class="card-text">
                                Nasi Goreng 2<br>
                                Ifu Mie 1 <br>
                                Jus Mangga 1 <br>
                                Jus Alpokat 1
                            </p>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Siap Saji
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Menunggu</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Sedang Dimasak</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Siap Saji</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-header">Pesanan</div>
                        <div class="card-body">
                            <h5 class="card-title">Meja 2</h5>
                            <p class="card-text">
                                Nasi Goreng 2<br>
                                Ifu Mie 1 <br>
                                Jus Mangga 1 <br>
                                Jus Alpokat 1
                            </p>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Siap Saji
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Menunggu</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Sedang Dimasak</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Siap Saji</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection