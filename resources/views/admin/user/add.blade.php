@extends('layouts.layout')

@section('page_content')
<div class="w-100">
    <div>
        <h2> Tambah Data User </h2>
        <p> Home / Tambah Data User </p>
    </div>
    <div class="page-container">
        {{-- Form class was-validated untuk validasi form --}}
        <form class="was-validated" action="{{ route('user.store') }}" method="POST"> 
            @csrf
            @if (($errors)->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
            @if(Session::get('failed'))
            <div class="alert alert-danger p-3"> {{ Session::get('failed') }} </div>
            @endif
            <!-- Nama input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label for="nama" class="form-label" for="nama">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" required/>
                <div class="invalid-feedback">Nama harus diisi</div>
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="nama">Email</label>
                <input type="email" id="email" name="email" class="form-control" required/>
                <div class="invalid-feedback">Email harus diisi</div>
            </div>

            <!-- Role input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label for="role" class="form-label" for="nama">Role</label>
                <select name="role" id="role" class="form-select form-control" required>
                    <option value="admin">Administrator</option>
                    <option value="ps">Pembimbing Siswa</option>
                </select>
                <div class="invalid-feedback">Role harus dipilih</div>
            </div>
        
            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control"required/>
            </div>
        
            <!-- Submit button -->
            <div class="d-flex justify-content-end w-100 p-2">
                <div>
                    <button type="submit" class="btn btn-primary btn-block">Tambah</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection