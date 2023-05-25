@extends('layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Status Pengerjaan</h1>
        
      </div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
{{ session('success') }}
</div>
@endif

<table class="table table-bordered my-4">


    <tr>
        <th>No</th>
        <th>Nomor Order</th>
        <th>Metode Pembayaran</th>
        <th>Status Pengerjaan</th>
        
    </tr>
    @foreach ($statuses as $status)
    <tr>
        <td>{{ $loop->iteration}}</td>
        <td>{{ $status->order->no_order}}</td>
        <td>{{ $status->pembayaran->metode}}</td>
        <td>{{ $status->status}}</td>
       
    </tr>
    @endforeach
    </table>
{{ $statuses->links('pagination::bootstrap-5') }}

@endsection