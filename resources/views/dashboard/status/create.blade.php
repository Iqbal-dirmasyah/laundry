@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data</h1>
        
      </div>

<div class="row">
<div class="col col-lg-6">

<form action="/status-dashboard" method="post">
@csrf
    <div class="mb-2">
    <label for="order" class="form-label">Nomor Order</label>
    <select class="form-select" name="order_id">
    @foreach($orders as $order)
    @if (old('order_id')== $order->id)
    <option value="{{ $order->id }}" selected>{{ $order->no_order }}</option>
    @else
    <option value="{{ $order->id }}">{{ $order->no_order }}</option>
    @endif
    @endforeach
    </select>
    </div>
    
    <div class="mb-2">
    <label for="pembayaran" class="form-label">Metode Pembayaran</label>
    <select class="form-select" name="pembayaran_id">
    @foreach($pembayarans as $pembayaran)
    @if (old('pembayaran_id')== $pembayaran->id)
    <option value="{{ $pembayaran->id }}" selected>{{ $pembayaran->metode }}</option>
    @else
    <option value="{{ $pembayaran->id }}">{{ $pembayaran->metode }}</option>
    @endif
    @endforeach
    </select>
    </div>

    <div class="mb-2">
    <label  class="form-label">Status</label>
    <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" id="status" >
    </div>


    <div class="mb-2">
    <button type="submit" name="submit" class="btn btn-primary">Create</textarea>
    </div>

    
    </form>
    </div>
</div>

   

@endsection