@extends('layouts.layout')

@section('page_content')
<div class="w-100">
    <div>
        <h2> Tambah Data Siswa </h2>
        <p> Home / Tambah Data Siswa </p>
    </div>
    <div class="page-container">
        {{-- Form class was-validated untuk validasi form --}}
        <form class="was-validated" action="{{ route('student.store') }}" method="POST">
            @csrf 
            <!-- Nama input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="nis">NIS :</label>
                <input type="text" id="nis" name="nis" class="form-control" required/>
                <div class="invalid-feedback">NIS harus diisi</div>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="nama">Nama :</label>
                <input type="text" id="nama" name="nama" class="form-control" required/>
                <div class="invalid-feedback">Nama harus diisi</div>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="rombel_id">Rombel :</label>
                <input type="text" id="rombel_id" name="rombel_id" class="form-control" required/>
                <div class="invalid-feedback">Rombel harus diisi</div>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="rayon_id">Rayon :</label>
                <input type="text" id="rayon_id" name="rayon_id" class="form-control" required/>
                <div class="invalid-feedback">Rayon harus diisi</div>
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