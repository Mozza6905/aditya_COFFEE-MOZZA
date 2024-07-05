@extends('layouts.app')
@section('tittle')
    Admin
@endsection
@section('content')
    <h1><i class="bi bi-people-fill me-2"></i>Admin</h1>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Admin</li>
    </ol>
    </nav>
    <hr>
    <div class="card">
    <div class="card-header">
    <div class="row align-item-center">
        <div class="col-md-6 fw-bold">
            Data Admin Kedai Coffee MZ
        </div>
        <div class="col-md-6">
            <div class="button-container">
            <a href="/createadmin" role="button" class="btn btn-outline-secondary"><i class="bi bi-plus-circle me-2"></i>Create Admin</a>
            </div>
        </div>
    </div>

    </div>
    <div class="card-body">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">No.</th>
        <th scope="col">Foto</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Alamat</th>
        <th scope="col">No. HP</th>
        <th scope="col">Jabatan</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($admin as $item)
            <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td><img src="{{ asset('storage/uploads/' . $item->foto_admin) }}" alt="" width="50"></td>
            <td>{{ $item->nama_admin }}</td>
            <td>{{ $item->jk_admin }}</td>
            <td>{{ $item->alamat_admin }}</td>
            <td>{{ $item->nohp_admin }}</td>
            <td>{{ $item->jabatan_admin }}</td>
            <td><a class="btn btn-light btn-sm" href="/editadmin/{{ $item->id }}" role="button"><i class="bi bi-pen-fill me-2"></i>Edit</a></td>
            <td><a class="btn btn-danger btn-sm" href="/deleteadmin/{{ $item->id }}" role="button"><i class="bi bi-trash-fill me-2"></i>Delete</a></td>
    @endforeach
            </tr>
    </tbody>
    </table>
    </div>
    </div>
@endsection
