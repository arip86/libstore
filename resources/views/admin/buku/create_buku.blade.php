@extends('admin.layout.appadmin')
@section('content')

<form method="POST" action="{{url('admin/buku/store')}}" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Judul</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Penulis</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="penulis">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Penerbit</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="penerbit">
    
  </div>
 

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tahun-terbit</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tahun_terbit">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Harga</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Stok</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="stok">
    
  </div>
  

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kategori_buku</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kategori_id">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Gambar</label>
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cover">
    
  </div>

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection