@extends('dashboard.layouts.main')

@section('container')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Daftar </span> User</h4>
<div class="card">
    <div class="card-body">
        <a href="/dashboard/user/create" type="button" class="btn btn-primary">
            <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah Akun
        </a>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


    <div class="table-responsive text-nowrap">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Roles</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($users as $user)
                <tr>
                    <td><strong>{{$user->username}}</strong></td>
                    <td><span class="badge bg-label-primary me-1">{{$user->roles}}</span></td>
                    <td>
                        <form action="/dashboard/user/{{$user->id}}" method="POST">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('Hapus data?')" class="btn btn-sm btn-danger">
                                <span class="tf-icons bx bx-trash"></span>&nbsp; Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection