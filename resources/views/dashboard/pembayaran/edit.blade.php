@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Metode Pembayaran</h1>
        
      </div>
<div class="row">
<div class="col col-lg-6">
    
<form action="/pembayaran-dashboard/{{ $pembayarans->id }}" method="post">
@method('PUT')
@csrf
    
    <div class="mb-2">
    <label  class="form-label">Metode Pembayaran</label>
    <input type="text" class="form-control @error('metode') is-invalid @enderror" name="metode" id="metode" value="{{ old('metode',$pembayarans->metode) }}" >
    </div>
    <div class="mb-2">
    <label  class="form-label">Keterangan</label>
    <input type="text" class="form-control @error('ket') is-invalid @enderror" name="ket" id="ket" value="{{ old('ket',$pembayarans->ket) }}">
    </div>

    <div class="mb-2">
    <button type="submit" name="submit" class="btn btn-primary">Create</textarea>
    </div>
    
    </form>
    </div>
</div>

   

@endsection