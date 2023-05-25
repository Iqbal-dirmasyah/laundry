@extends('layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Service</h1>
        
      </div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
{{ session('success') }}
</div>
@endif

<table class="table table-bordered my-4">


    <tr>
        <th>No</th>
        <th>Kode Service</th>
        <th>Nama Service</th>
        <th>Harga Service</th>
        
    </tr>
    @foreach ($services as $service)
    <tr>
        <td>{{ $loop->iteration}}</td>
        <td>{{ $service->kd_layanan}}</td>
        <td>{{ $service->nama}}</td>
        <td>{{ $service->harga}}</td>
       
    </tr>
    @endforeach
    </table>
{{ $services->links('pagination::bootstrap-5') }}

@endsection