@extends('layouts.app')
@section('tittle')
    Create Product
@endsection
@section('content')
    <h1><i class="bi bi-people-fill me-2"></i>Product</h1>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Product</li>
        <li class="breadcrumb-item active" aria-current="page">Create</li>
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
            <a href="/product" role="button" class="btn btn-outline-secondary"><i class="bi bi-arrow-left me-2"></i>Kembali</a>
            </div>
        </div>
    </div>

    </div>
    <div class="card-body">
            <form action="/saveproduct" class="row" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 col-md-6">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama_product" id="nama" 
                    placeholder="Masukan Product">
                    <div class="mt2 text-danger">
                        @error('nama_product')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="status" class="form-label">Status Product</label>
                    <select name="status" id="status" class="form-select">
                        <option value="">-- Pilih Status Product --</option>
                        <option value="Best Product">Best Product</option>
                        <option value="Normal Product">Normal Product</option>
                    </select>
                    <div class="mt2 text-danger">
                        @error('status')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="price" class="form-label">price</label>
                    <input type="text" class="form-control" name="price" id="price" 
                    placeholder="Masukan price">
                    <div class="mt2 text-danger">
                        @error('price')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="suplayer_name" class="form-label">suplayer_name</label>
                    <input type="text" class="form-control" name="suplayer_name" id="suplayer_name" 
                    placeholder="Masukan suplayer_name">
                    <div class="mt2 text-danger">
                        @error('suplayer_name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="stock" class="form-label">stock</label>
                    <input type="text" class="form-control" name="stock" id="stock" 
                    placeholder="Masukan stock">
                    <div class="mt2 text-danger">
                        @error('stock')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" name="foto" id="foto" >
                    <div class="mt2 text-danger">
                        @error('foto')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mt-3">
                    <button class="btn btn-success" type="submit"><i class="bi bi-floppy2-fill me-2"></i>Save Admin</button>
                </div>
           </form>
@endsection
