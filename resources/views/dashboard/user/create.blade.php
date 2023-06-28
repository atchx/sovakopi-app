@extends('dashboard.layouts.main')

@section('container')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tambah </span> User</h4>
<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-body">
            <form method="POST" action="/dashboard/user">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input name="username" type="text" class="form-control" id="username" placeholder="Masukan username" />
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Masukan password" />
                </div>
                <div class="mb-3">
                    <label for="roles" class="form-label">Roles</label>
                    <select name="roles" class="form-select" id="roles" aria-label="Default select example">
                        <option value="Pemilik">Pemilik</option>
                        <option value="Kasir">Kasir</option>
                        <option value="Dapur">Dapur</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="/dashboard/user/" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection