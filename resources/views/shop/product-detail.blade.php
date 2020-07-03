@extends('shop.layouts.main')
@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url({{asset('custom/images/bg_6.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Product Single</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="index.html">Product</a></span> <span>Product Single</span></p>
          </div>
        </div>
      </div>
    </div>
		
	<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="{{asset('storage/uploads/'.$product->image)}}" class="image-popup"><img src="{{asset('storage/uploads/'.$product->image)}}" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>{{$product->name}}</h3>
    				<p class="price"><span>${{$product->price}}</span></p>
    				<p>{{$product->description}}</p>
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group d-flex">
		              <div class="select-wrap">
	                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                  <select name="" id="" class="form-control">
	                  	<option value="">Small</option>
	                    <option value="">Medium</option>
	                    <option value="">Large</option>
	                    <option value="">Extra Large</option>
	                  </select>
	                </div>
		            </div>
							</div>
							<div class="w-100"></div>
							<div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<!-- <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button> -->
						</span>
			<form action="{{route('order.store.single')}}" method="post">
	             	<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
	             	<span class="input-group-btn ml-2">
	                	<!-- <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="ion-ios-add"></i>
	                 </button> -->
	             	</span>
	          	</div>
			  </div>
			  
				@csrf
				<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
				<input type="hidden" name="product_id" value="{{$product->id}}">
				<input type="hidden" name="price" value="{{$product->price}}">
				<button type="submit" style="padding:0 50px; vertical-align:middle; font-size: 16px; color:#fff !important; border:1px solid #f1b8c4 !important; border-radius:30px; background-color:#f1b8c4 !important; cursor:pointer;">Add to cart</button>
				<!-- <a href="#" class="add-to-cart"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a> -->
			</form>
          	<!-- <p><a href="cart.html" class="btn btn-primary py-3 px-5">Add to Cart</a></p> -->
    			</div>
    		</div>
    	</div>
    </section>

		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center py-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
            	<h1 class="big">Subscribe</h1>
              <h2>Subcribe to our Newsletter</h2>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection()