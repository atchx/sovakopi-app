@extends('kitchen.layouts.main')

@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">

            <ul class="nav nav-pills mb-3 nav-fill">
                <li class="nav-item">
                    <a class="nav-link" href="/kitchen"><i class="bx bx-bell me-1"></i> Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-link-alt me-1"></i> Produk / Menu</a>
                </li>
            </ul>
            <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card h-100">
                        <img class="card-img-top" src="/admin/assets/img/elements/2.jpg" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </p>
                            <button type="button" class="btn btn-danger">Habis</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card h-100">
                        <img class="card-img-top" src="/admin/assets/img/elements/2.jpg" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </p>
                            <button type="button" class="btn btn-primary">Tersedia</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card h-100">
                        <img class="card-img-top" src="/admin/assets/img/elements/2.jpg" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </p>
                            <button type="button" class="btn btn-primary">Tersedia</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card h-100">
                        <img class="card-img-top" src="/admin/assets/img/elements/2.jpg" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </p>
                            <button type="button" class="btn btn-primary">Tersedia</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection