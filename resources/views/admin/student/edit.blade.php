@extends('layouts.layout')

@section('page_content')
<div class="w-100">
    <div>
        <h2> Edit Data Rombel </h2>
        <p> Home / Edit Data Rombel </p>
    </div>
    <div class="page-container">
        {{-- Form class was-validated untuk validasi form --}}
        <form class="was-validated" action="{{ route('rombel.update', $rombels['id']) }}" method="POST">
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
                <label class="form-label" for="rombel">Rombel :</label>
                <input value="{{ $rombels['rombel'] }}" type="text" id="rombel" name="rombel" class="form-control" required/>
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