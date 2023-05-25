@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Order</h1>
        
      </div>
<div class="row">
<div class="col col-lg-6">
    
<form action="/order-dashboard/{{ $orders->id }}" method="post">
@method('PUT')
@csrf
    
 <div class="mb-2">
    <label for="pelanggan" class="form-label">Kode Pelanggan</label>
    <select class="form-select" name="pelanggan_id">
    @foreach($pelanggans as $pelanggan)
    @if (old('pelanggan_id')== $pelanggan->id)
    <option value="{{ $pelanggan->id }}" selected>{{ $pelanggan->nama }}</option>
    @else
    <option value="{{ $pelanggan->id }}">{{ $pelanggan->nama }}</option>
    @endif
    @endforeach
    </select>
    </div>
    
    <div class="mb-2">
    <label  class="form-label">Barang</label>
    <input type="text" class="form-control @error('barang') is-invalid @enderror" name="barang" id="barang" value="{{ old('barang',$orders->barang) }}" >
    </div>
    <div class="mb-2">
    <label  class="form-label">Berat</label>
    <input type="text" class="form-control @error('satuan') is-invalid @enderror" name="satuan" id="satuan" value="{{ old('satuan',$orders->satuan) }}">
    </div>
    <div class="mb-2">
    <label  class="form-label">No Order</label>
    <input type="text" class="form-control @error('no_order') is-invalid @enderror" name="no_order" id="no_order" value="{{ old('no_order',$orders->no_order) }}">
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
    <button type="submit" name="submit" class="btn btn-primary">Create</textarea>
    </div>
    
    </form>
    </div>
</div>

   

@endsection