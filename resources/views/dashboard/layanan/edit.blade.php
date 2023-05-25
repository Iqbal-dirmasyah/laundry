@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Fasilitas</h1>
        
      </div>
<div class="row">
<div class="col col-lg-6">
    
<form action="/layanan-dashboard/{{ $layanans->id }}" method="post">
@method('PUT')
@csrf
    
    <div class="mb-2">
    <label  class="form-label">Nama Fasilitas</label>
    <input type="text" class="form-control @error('fasilitas') is-invalid @enderror" name="fasilitas" id="fasilitas" value="{{ old('fasilitas',$layanans->fasilitas) }}" >
    </div>
    <div class="mb-2">
    <label  class="form-label">Keterangan</label>
    <input type="text" class="form-control @error('ket') is-invalid @enderror" name="ket" id="ket" value="{{ old('ket',$layanans->ket) }}">
    </div>

    <div class="mb-2">
    <button type="submit" name="submit" class="btn btn-primary">Create</textarea>
    </div>
    
    </form>
    </div>
</div>

   

@endsection