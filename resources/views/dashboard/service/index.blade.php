@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Layanan</h1>
        <a href="/service-dashboard/create" class="btn btn-primary"><b>Tambah Data </b></a>
      </div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
{{ session('success') }}
</div>
@endif

<table class="table table-bordered my-4">


    <tr>
        <th>No</th>
        <th>Kode Layanan</th>
        <th>Nama Service</th>
        <th>Harga Service</th>
        <th>Aksi</th>
        
    </tr>
    @foreach ($services as $service)
    <tr>
        <td>{{ $loop->iteration}}</td>
        <td>{{ $service->kd_layanan}}</td>
        <td>{{ $service->nama}}</td>
        <td>{{ $service->harga}}</td>
        <td>
            <a href="/service-dashboard/{{ $service->id}}/edit" class="btn btn-warning">EDIT</a>
            <form action="/service-dashboard/{{ $service->id}}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
                
                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin akan menghapus data ini?')">DELETE</button>
                
            </form>
            
        </td>
       
    </tr>
    @endforeach
    </table>
{{ $services->links('pagination::bootstrap-5') }}

@endsection