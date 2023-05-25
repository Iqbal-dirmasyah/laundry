@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Metode Pembayaran</h1>
        <a href="/pembayaran-dashboard/create" class="btn btn-primary"><b>Tambah Data </b></a>
      </div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
{{ session('success') }}
</div>
@endif
<table class="table table-bordered my-4">

     <tr>
        <th>No</th>
        <th>Metode Pembayaran</th>
        <th>Keterangan</th>
        <th>Aksi</th>
        
    </tr>
    @foreach ($pembayarans as $pembayaran)
    <tr>
        <td>{{ $loop->iteration}}</td>
        <td>{{ $pembayaran->metode}}</td>
        <td>{{ $pembayaran->ket}}</td>
        <td>
            <a href="/pembayaran-dashboard/{{ $pembayaran->id}}/edit" class="btn btn-warning">EDIT</a>
            <form action="/pembayaran-dashboard/{{ $pembayaran->id}}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
                
                <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin akan menghapus data ini?')">DELETE</button>
                
            </form>
            
        </td>
       
    </tr>
    @endforeach
    </table>
{{ $pembayarans->links('pagination::bootstrap-5') }}

@endsection