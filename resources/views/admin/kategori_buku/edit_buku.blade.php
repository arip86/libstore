@extends('admin.layout.appadmin')
@section('content')

@foreach($kategori_buku as $kategori_buku)
<form method="POST" action="{{('/admin/kategori_buku/update')}}" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="mb-3">
  <input type="hidden" name="idkategori_buku" value="{{ $kategori_buku->idkategori_buku }}"> <br/>
    <label for="exampleInputEmail1" class="form-label">{{$kategori_buku->kategori_buku}}</label>
    
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kategori_buku" value="{{$kategori_buku->kategori_buku}}">
      </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach


@endsection