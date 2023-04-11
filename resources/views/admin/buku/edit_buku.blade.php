@extends('admin.layout.appadmin')
@section('content')

@foreach($buku as $buku)

<form method="POST" action="{{('/admin/buku/update')}}" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="mb-3">
  <input type="hidden" name="id" value="{{$buku->id}}">
    <label for="exampleInputEmail1" class="form-label">Judul</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul" value="{{ $buku->judul }}">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Penulis</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="penulis" value="{{ $buku->penulis }}">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Penerbit</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="penerbit" value="{{ $buku->penerbit}}">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tahun-terbit</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tahun_terbit" value="{{ $buku->tahun_terbit }}">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Harga</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga" value="{{ $buku->harga }}">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Stok</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="stok" value="{{ $buku->stok }}">
    
  </div>
  

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kategori_buku</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kategori_id" value="{{ $buku->kategori_id}}">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Gambar</label>
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cover">
    
  </div>

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach

@endsection