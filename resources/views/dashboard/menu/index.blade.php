@extends('dashboard.layouts.main')

@section('container')
<div class="card-body">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Daftar </span> Menu</h4>
    <a href="/dashboard/menu/create" type="button" class="btn btn-primary">
        <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah Menu
    </a>
</div>
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="row mb-5">
    @foreach ($products as $product)
    <div class="col-md-6 col-lg-4 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">{{$product->name }}</h5>
                <h6 class="card-subtitle text-muted">Rp. {{$product->price }}</h6>
            </div>
            <img class="img-fluid" src="{{ asset('storage/' . $product->image) }}" alt="Card image cap" />
            <div class="card-body">
                <p class="card-text">{{$product->description }}</p>
                <a href="/dashboard/menu/{{ $product->id }}/edit" class="btn btn-warning">Edit</a>
                <form class="d-inline" action="/dashboard/menu/{{ $product->id }}" method="POST">
                    @method('delete')
                    @csrf
                    <button onclick="return confirm('Hapus data?')" class="btn btn-danger">
                        <span class="tf-icons bx bx-trash"></span>&nbsp; Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection