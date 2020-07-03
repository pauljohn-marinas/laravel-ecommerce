@extends('shop.layouts.main')
@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url({{asset('custom/images/bg_6.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Collection</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home</a></span> <span>Product</span></p>
          </div>
        </div>
      </div>
    </div>
		
		<section class="ftco-section bg-light">
    	<div class="container-fluid">
    		<div class="row">
                  @foreach($products as $product)
                    
                      <div class="col-sm col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="{{route('product-detail',$product->id)}}" class="img-prod"><img class="img-fluid" src="{{asset('storage/uploads/'. $product->image)}}" alt="Colorlib Template">
                                <span class="status">30%</span>
                            </a>
                            <div class="text py-3 px-3">
                                <h3><a href="{{route('product-detail',$product->id)}}">{{$product->name}}</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="mr-2 price-dc">${{$product->name}}</span><span class="price-sale">$80.00</span></p>
                                    </div>
                                    <div class="rating">
                                        <p class="text-right">
                                            <span class="ion-ios-star-outline"></span>
                                            <span class="ion-ios-star-outline"></span>
                                            <span class="ion-ios-star-outline"></span>
                                            <span class="ion-ios-star-outline"></span>
                                            <span class="ion-ios-star-outline"></span>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <p class="bottom-area d-flex">
                                  <form action="{{route('order.store')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="price" value="{{$product->price}}">
                                    <button type="submit" class="add-to-cart" style="border:none; background-color:#fff !important; cursor:pointer;"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></button>
                                    <!-- <a href="#" class="add-to-cart"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a> -->
                                  </form>
                                    
                                    <!-- <a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a> -->
                                </p>
                            </div>
                        </div>
                      </div>
				          @endforeach
        </div>
        <div class="d-flex justify-content-center mt-5">
          {{ $products->links() }}
        </div>
    		<!-- <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> -->
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
@endsection