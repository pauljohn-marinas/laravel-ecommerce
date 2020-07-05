@extends('shop.layouts.main')
@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url({{asset('custom/images/bg_6.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">My Cart</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home</a></span> <span>Cart</span></p>
          </div>
        </div>
      </div>
    </div>
		
		<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
							@forelse($orders as $order)
						      <tr class="text-center">
						        <td class="product-remove">
									<form action="{{route('order.destroy', $order->id)}}" method="post">
										@csrf
										@method('delete')
										<button style="cursor:pointer; font-size:20px; background-color:#fff !important; border:0 !important; outline:none;" type="submit">X</button>
									</form>

								</td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url({{asset('storage/uploads/'.$order->product->image)}});"></div></td>
						        
						        <td class="product-name">
						        	<h3>{{$order->product->name}}</h3>
						        	<p>{{$order->product->description}}</p>
						        </td>
						        
						        <td class="price">{{$order->product->price}}</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             		<input type="text" name="quantity" class="quantity form-control input-number" value="{{$order->quantity}}" min="1" max="100">
									</div>
								</td>
						        
						        <td class="total">{{$order->product->price * $order->quantity }}</td>
							  </tr><!-- END TR-->
							@empty
								<tr>
									<td colspan=6>
										<p class="text-center">
											No Items!
										</p>
									</td>
								</tr>
							@endforelse
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>$20.60</span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>$0.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>$3.00</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>$17.60</span>
    					</p>
    				</div>
    				<p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
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