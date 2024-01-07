@extends('layouts.layout')

@section('page_content')
<div class="w-100">
    <div>
        <h2> Data Rayon </h2>
        <p> Home / Data Rombel </p>
    </div>
    
    <div class="page-container">
        <div class="head-list">
            <div class="d-flex justify-content-start w-100 p-2">
                <a href="{{ url('rayon/create') }}" class="btn btn-primary" data-mdb-ripple-init>Tambah</a>
            </div>
            <div class="d-flex justify-content-between w-100 p-2">
                <div class="btn-group">
                    <select class="page-count-selection">
                        <option>10</option> 
                    </select>
                    <span class="page-count-selection-span pl-2">entries per page<span>
                </div>
                <input type="text"/>
            </div>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Rayon</th>
                <th scope="col">Pembimbing Siswa</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @php $no =1; @endphp
                @foreach ($rayons as $item)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $item['rayon'] }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>
                            <a href="{{ route('rayon.edit', $item['id']) }}" class="btn btn-primary">Edit</a>
                            <a type="button" class="btn btn-danger" data-mdb-ripple-init>Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end w-100 p-2">
            <nav aria-label="Page navigation pagination-list">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection