@extends('frontend.index')
@section('front')

<br>
<br>
<br>
<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Latest Products</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua.</p>
                                
						</div>
					</div>
                    
				</div>
                
				<div class="row">
					<!-- single product -->
                    @foreach($buku as $data) 
					<div class="col-lg-3 col-md-6">
                    
						<div class="single-product">
                        
							<img class="img-fluid" src="{{url('admin/image')}}/{{$data->cover}}" alt="">
							<div class="product-details">
                                <h6>{{$data->judul}}</h6>
								<div class="price">
									<h6>{{$data->harga}}</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
                                
								<div class="prd-bottom">

									<a href="{{url('order/create')}}" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">Order</p>
									</a>
									
								</div>
							</div>
						</div>
					</div>
                    
                    @endforeach
                    
					<!-- single product -->
						</div>
				</div>
               
			</div>
		</div>
        
		<!-- single product slide -->
					<!-- single product -->
	
					<!-- single product -->
		
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="{{asset('frontend/img/product/p8.jpg" alt="">
							<div class="product-details">
								<h6>addidas New Hammer sole
									for Sports person</h6>
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- End latest product Area -->
    @endsection