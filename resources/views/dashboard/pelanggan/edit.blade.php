@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Pelanggan</h1>
        
      </div>
<div class="row">
<div class="col col-lg-6">
    
<form action="/pelanggan-dashboard/{{ $pelanggans->id }}" method="post">
@method('PUT')
@csrf
    
    <div class="mb-2">
    <label  class="form-label">Kode Pelanggan</label>
    <input type="text" class="form-control @error('kd_pelanggan') is-invalid @enderror" name="kd_pelanggan" id="kd_pelanggan" value="{{ old('kd_pelanggan',$pelanggans->kd_pelanggan) }}">
    </div>

    <div class="mb-2">
    <label  class="form-label">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama',$pelanggans->nama) }}" >
    </div>

    <div class="mb-2">
    <label class="form-label">Jenis Kelamin</label>
        <div class="d-flex">
          <div class="form-check me-3">
               <input class="form-check-input" type="radio" name="jk"  value="Laki-laki" {{ old ('jk')=='Laki-laki' ? 'checked': '' }} checked> Laki-laki
          </div>
          
          <div class="form-check " me-3>
              <input class="form-check-input" type="radio" name="jk"  value="Perempuan" @checked ( old ('jk')=='Perempuan')>Perempuan
          </div>
         
        </div>
    </div>

    <div class="mb-2">
    <label  class="form-label">No HP</label>
    <input type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" id="no_hp" value="{{ old('no_hp',$pelanggans->no_hp) }}">
    </div>
    <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat">{{ old('alamat',$pelanggans->alamat) }}</textarea>
    </div>

    <div class="mb-2">
    <button type="submit" name="submit" class="btn btn-primary">Create</textarea>
    </div>
    
    </form>
    </div>
</div>

   

@endsection