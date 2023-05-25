@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Harga</h1>
        
      </div>
<div class="row">
<div class="col col-lg-6">
    
<form action="/harga-dashboard/{{ $hargas->id }}" method="post">
@method('PUT')
@csrf
    
    <div class="mb-2">
    <label  class="form-label">Kategori Barang</label>
    <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" id="kategori" value="{{ old('kategori',$hargas->kategori) }}" >
    </div>
    <div class="mb-2">
    <label  class="form-label">Satuan</label>
    <input type="text" class="form-control @error('satuan') is-invalid @enderror" name="satuan" id="satuan" value="{{ old('satuan',$hargas->satuan) }}">
    </div>
    <div class="mb-2">
    <label  class="form-label">Harga</label>
    <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" id="harga" value="{{ old('harga',$hargas->harga) }}">
    </div>

    <div class="mb-2">
    <button type="submit" name="submit" class="btn btn-primary">Create</textarea>
    </div>
    
    </form>
    </div>
</div>

   

@endsection