@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Pelanggan</h1>
        <a href="/pelanggan-dashboard/create" class="btn btn-primary"><b>Tambah Data </b></a>
      </div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
{{ session('success') }}
</div>
@endif

<table class="table table-bordered my-4">


    <tr>
        <th>No</th>
        <th>Kode Pelanggan</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>No HP</th>
        <th>Alamat</th>
        <th>Aksi</th>
        
    </tr>
    @foreach ($pelanggans as $pelanggan)
    <tr>
        <td>{{ $loop->iteration}}</td>
        <td>{{ $pelanggan->kd_pelanggan}}</td>
        <td>{{ $pelanggan->nama}}</td>
        <td>{{ $pelanggan->jk}}</td>
        <td>{{ $pelanggan->no_hp}}</td>
        <td>{{ $pelanggan->alamat}}</td>
        <td>
            <a href="/pelanggan-dashboard/{{ $pelanggan->id}}/edit" class="btn btn-warning">EDIT</a>
            <form action="/pelanggan-dashboard/{{ $pelanggan->id}}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
                
                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin akan menghapus data ini?')">DELETE</button>
                
            </form>
            
        </td>
       
    </tr>
    @endforeach
    </table>
{{ $pelanggans->links('pagination::bootstrap-5') }}

@endsection