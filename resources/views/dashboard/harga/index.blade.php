@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Harga</h1>
        <a href="/harga-dashboard/create" class="btn btn-primary"><b>Tambah Data </b></a>
      </div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
{{ session('success') }}
</div>
@endif
<table class="table table-bordered my-4">

     <tr>
        <th>No</th>
        <th>Kategori Barang</th>
        <th>Satuan</th>
        <th>Harga</th>
        <th>Aksi</th>
        
    </tr>
    @foreach ($hargas as $harga)
    <tr>
        <td>{{ $loop->iteration}}</td>
        <td>{{ $harga->kategori}}</td>
        <td>{{ $harga->satuan}}</td>
        <td>{{ $harga->harga}}</td>
        <td>
            <a href="/harga-dashboard/{{ $harga->id}}/edit" class="btn btn-warning">EDIT</a>
            <form action="/harga-dashboard/{{ $harga->id}}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
                
                <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin akan menghapus data ini?')">DELETE</button>
                
            </form>
            
        </td>
       
    </tr>
    @endforeach
    </table>
{{ $hargas->links('pagination::bootstrap-5') }}

@endsection