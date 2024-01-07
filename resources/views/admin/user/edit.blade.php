@extends('layouts.layout')

@section('page_content')
<div class="w-100">
    <div>
        <h2> Edit Data User </h2>
        <p> Home / Edit Data User </p>
    </div>
    <div class="page-container">
        {{-- Form class was-validated untuk validasi form --}}
        <form class="was-validated" action="{{ route('user.update', $user['id']) }}" method="POST">
            @csrf
            @method('PATCH')

            @if ($errors->any())
            <ul class="alert alert-danger p-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
            <!-- Nama input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="nama">Nama :</label>
                <input value="{{ $users['nama'] }}" type="text" id="nama" name="nama" class="form-control" required/>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="email">Email :</label>
                <input value="{{ $users['email'] }}" type="text" id="email" name="email" class="form-control" required/>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="password">Password :</label>
                <input value="{{ $users['password'] }}" type="text" id="password" name="password" class="form-control" required/>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="role">Role :</label>
                <input value="{{ $users['role'] }}" type="text" id="role" name="role" class="form-control" required/>
            </div>
        
            <!-- Submit button -->
            <div class="d-flex justify-content-end w-100 p-2">
                <div>
                    <button type="submit" class="btn btn-primary btn-block">Ubah</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection