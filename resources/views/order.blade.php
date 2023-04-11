@extends('frontend.index')
@section('front')
<br>
<br>
<br>
<br>
<br>
<br>

<section >
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
<form method="POST" action="{{url('/order/store')}}" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jumlah</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jumlah">
    
  </div>
  
 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tanggal Pemesanan</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="order_date">
    
  

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kategori_buku</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kategori_id">
    
  </div>
  

 
  <button type="submit" class="btn btn-primary">Checkout</button>
</form>
</div>
</div>
</section>

@endsection