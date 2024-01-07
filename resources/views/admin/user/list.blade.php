@extends('layouts.layout')

@section('page_content')
<div class="w-100">
    <div>
        <h2> Data User </h2>
        <p> Home / Data User </p>
    </div>
    
    <div class="page-container">
        <div class="head-list">
            <div class="d-flex justify-content-start w-100 p-2">
                <a href="{{ url('user/create') }}" class="btn btn-primary" data-mdb-ripple-init>Tambah</a>
            </div>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @php $no =1; @endphp
                @foreach ($users as $item)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>{{ $item['role'] }}</td>
                        <td class="d-flex">
                            <a style="margin-right: 20px" href="{{ route('user.edit', $item['id']) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('user.delete', $item['id']) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" data-mdb-ripple-init>Delete</button>
                            </form>
                            {{-- <a type="button" class="btn btn-danger" data-mdb-ripple-init>Delete</a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- <div class="modal" tabindex="-1" id="edit-stock">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Konfirmasi Hapus</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p>Yakin ingin menghapus data ini? </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <form action="{{ route('user.delete',$item['id']) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Hapus</button>
                  </form>
                </div>
              </div>
            </div>
          </div> --}}

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