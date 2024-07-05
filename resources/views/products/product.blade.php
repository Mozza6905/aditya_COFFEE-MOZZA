@extends('layouts.app')
@section('tittle')
    Product
@endsection
@section('content')
    <h1><i class="bi bi-people-fill me-2"></i>Product</h1>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Product</li>
    </ol>
    </nav>
    <hr>
    <div class="card">
    <div class="card-header">
    <div class="row align-item-center">
        <div class="col-md-6 fw-bold">
            Data Product Kedai Coffee MZ
        </div>
        <div class="col-md-6">
            <div class="button-container">
            <a href="/createproduct" role="button" class="btn btn-outline-secondary"><i class="bi bi-plus-circle me-2"></i>Create Admin</a>
            </div>
        </div>
    </div>

    </div>
    <div class="card-body">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">No.</th>
        <th scope="col">Nama</th>
        <th scope="col">Foto</th>
        <th scope="col">Price</th>
        <th scope="col">Stock</th>
        <th scope="col">Suplayer</th>
        <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($product as $item)
            <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $item->nama_product }}</td>
            <td><img src="{{ asset('storage/uploads/' . $item->foto) }}" alt="" width="50"></td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->stock }}</td>
            <td>{{ $item->suplayer_name }}</td>
            <td>{{ $item->status }}</td>
            <td><a class="btn btn-light btn-sm" href="/editproduct/{{ $item->id }}" role="button"><i class="bi bi-pen-fill me-2"></i>Edit</a></td>
            <td><a class="btn btn-danger btn-sm" href="/deleteproduct/{{ $item->id }}" role="button"><i class="bi bi-trash-fill me-2"></i>Delete</a></td>
    @endforeach
            </tr>
    </tbody>
    </table>
    </div>
    </div>
@endsection
