@extends('layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Pembayaran</h1>
        
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
        
    </tr>
    @foreach ($pembayarans as $pembayaran)
    <tr>
        <td>{{ $loop->iteration}}</td>
        <td>{{ $pembayaran->metode}}</td>
       
    </tr>
    @endforeach
    </table>
{{ $pembayarans->links('pagination::bootstrap-5') }}

@endsection