@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Fasilitas Laundry</h1>
        <a href="/layanan-dashboard/create" class="btn btn-primary"><b>Tambah Data </b></a>
      </div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
{{ session('success') }}
</div>
@endif
<table class="table table-bordered my-4">

     <tr>
        <th>No</th>
        <th>Nama Fasilitas</th>
        <th>Keterangan</th>
        <th>Aksi</th>
        
    </tr>
    @foreach ($layanans as $layanan)
    <tr>
        <td>{{ $loop->iteration}}</td>
        <td>{{ $layanan->fasilitas}}</td>
        <td>{{ $layanan->ket}}</td>
        <td>
            <a href="/layanan-dashboard/{{ $layanan->id}}/edit" class="btn btn-warning">EDIT</a>
            <form action="/layanan-dashboard/{{ $layanan->id}}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
                
                <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin akan menghapus data ini?')">DELETE</button>
                
            </form>
            
        </td>
       
    </tr>
    @endforeach
    </table>
{{ $layanans->links('pagination::bootstrap-5') }}

@endsection