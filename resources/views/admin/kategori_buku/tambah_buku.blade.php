@extends('admin.layout.appadmin')
@section('content')

<form method="POST" action="{{url('admin/kategori_buku/store')}}" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kategori_buku">
    
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection