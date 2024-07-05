@extends('layouts.app')
@section('tittle')
    Create Admin
@endsection
@section('content')
    <h1><i class="bi bi-people-fill me-2"></i>Admin</h1>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Admin</li>
        <li class="breadcrumb-item active" aria-current="page">Create</li>
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
            <a href="/admin" role="button" class="btn btn-outline-secondary"><i class="bi bi-arrow-left me-2"></i>Kembali</a>
            </div>
        </div>
    </div>

    </div>
    <div class="card-body">
            <form action="/updateadmin/{{ $admin->id }}" class="row" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3 col-md-6">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama_admin" id="nama" 
                    value="{{ $admin->nama_admin }}">
                    <div class="mt2 text-danger">
                        @error('nama_admin')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="jk_admin" class="form-label">Jenis Kelamin</label>
                    <select name="jk_admin" id="jk_admin" class="form-select">
                    @if ($admin->jk_admin == 'Laki-laki')
                        <option value="{{ $admin->jk_admin }}">{{ $admin->jk_admin }}</option>
                        <option value="Perempuan">Perempuan</option>
                    @else
                        <option value="{{ $admin->jk_admin }}">{{ $admin->jk_admin }}</option>
                        <option value="Laki-laki">Laki-laki</option>
                    @endif
                    </select>
                    <div class="mt2 text-danger">
                        @error('jk_admin')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email_admin" id="email" 
                    value="{{ $admin->email_admin }}">
                    <div class="mt2 text-danger">
                        @error('email_admin')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3 col-md-12">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat_admin" id="alamat" rows="5"
                    >{{ $admin->alamat_admin }}</textarea>
                    <div class="mt2 text-danger">
                        @error('alamat_admin')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nohp" class="form-label">No. HP</label>
                    <input type="text" class="form-control" name="nohp_admin" id="nohp" 
                    value="{{ $admin->nohp_admin }}">
                    <div class="mt2 text-danger">
                        @error('nohp_admin')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan_admin" id="jabatan" 
                    value="{{ $admin->jabatan_admin }}">
                    <div class="mt2 text-danger">
                        @error('jabatan_admin')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="hidden" id="ft" value="{{ $admin->foto_admin }}" name="foto_lama" >
                    <input type="file" class="form-control" name="foto_admin" id="foto" >
                    <div class="mt2 text-danger">
                        @error('foto_admin')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mt-3">
                    <button class="btn btn-success" type="submit"><i class="bi bi-floppy2-fill me-2"></i>Update Admin</button>
                </div>
           </form>
@endsection
