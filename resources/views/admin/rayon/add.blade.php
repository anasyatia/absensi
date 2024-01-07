@extends('layouts.layout')

@section('page_content')
<div class="w-100">
    <div>
        <h2> Tambah Data Rayon </h2>
        <p> Home / Tambah Data Rayon </p>
    </div>
    <div class="page-container">
        {{-- Form class was-validated untuk validasi form --}}
        <form class="was-validated" action="{{ route('rayon.store') }}" method="POST"> 
            @csrf
            <!-- Nama input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="rayon">Rayon :</label>
                <input type="text" id="rayon" name="rayon" class="form-control" required/>
            </div>
            <div class="form-group">
                <label for="user_id">Pembimbing siswa :</label>
                <select name="user_id" id="user_id" class="form-control">
                    @foreach($user as $id => $nama)
                        <option value="{{ $id }}">{{ $nama }}</option>
                    @endforeach
                </select>
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