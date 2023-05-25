@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Order</h1>
        <a href="/order-dashboard/create" class="btn btn-primary"><b>Tambah Data </b></a>
      </div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
{{ session('success') }}
</div>
@endif

<table class="table table-bordered my-4">

     <tr>
        <th>No</th>
        <th>Nama Pelanggan</th>
        <th>Barang</th>
        <th>Berat/Satuan</th>
        <th>No Order</th>
        <th>Metode Pembayaran</th>
        <th>Aksi</th>
        
    </tr>
    @foreach ($orders as $order)
    <tr>
        <td>{{ $loop->iteration}}</td>
        <td>{{ $order->pelanggan->nama}}</td>
        <td>{{ $order->barang}}</td>
        <td>{{ $order->satuan}}</td>
        <td>{{ $order->no_order}}</td>
        <td>{{ $order->pembayaran->metode}}</td>
        <td>
            <a href="/order-dashboard/{{ $order->id}}/edit" class="btn btn-warning">EDIT</a>
            <form action="/order-dashboard/{{ $order->id}}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
                
                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin akan menghapus data ini?')">DELETE</button>
                
            </form>
            
        </td>
       
    </tr>
    @endforeach
    </table>
{{ $orders->links('pagination::bootstrap-5') }}

@endsection