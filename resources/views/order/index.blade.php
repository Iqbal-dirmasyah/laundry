@extends('layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Order</h1>
        
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
        <th>Barang</th>
        <th>Berat/Satuan</th>
        <th>Pengerjaan</th>
        <th>No Order</th>
        <th>Metode Pembayaran</th>
        
    </tr>
    @foreach ($orders as $order)
    <tr>
        <td>{{ $loop->iteration}}</td>
        <td>{{ $order->pelanggan->nama}}</td>
        <td>{{ $order->barang}}</td>
        <td>{{ $order->satuan}}</td>
        <td>{{ $order->no_order}}</td>
        <td>{{ $order->pembayaran->metode}}</td>
       
    </tr>
    @endforeach
    </table>
{{ $orders->links('pagination::bootstrap-5') }}

@endsection