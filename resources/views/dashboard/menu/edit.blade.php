@extends('dashboard.layouts.main')

@section('container')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tambah </span> Menu</h4>
<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-body">
            <form method="POST" action="/dashboard/menu/{{$product->id}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Masukan nama" value="{{ $product->name }}" required />
                </div>
                <div class=" mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <select name="category" class=" form-select" id="category" aria-label="Default select example">
                        <option value="Coffe Based">Coffe Based</option>
                        <option value="Latte">Latte</option>
                        <option value="Mocktail">Mocktail</option>
                        <option value="Powder Drink">Powder Drink</option>
                        <option value="Manual Brew">Manual Brew</option>
                        <option value="Tea">Tea</option>
                        <option value="Juice">Juice</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Harga</label>
                    <input name="price" type="text" class="form-control" id="name" placeholder="Masukan harga" required />
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea name="description" class=" form-control" id="description" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Gambar</label>
                    <input name="image" gambar class="form-control" type="file" id="formFile" required />
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="/dashboard/menu/" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection