@foreach($animes as $anime)
	<div class="product">
		<figure class="product-media">
			{{-- <span class="product-label label-sale">Estreno</span> --}}
			{{-- <span class="product-label label-top">Top</span> --}}
			<a href="product.html">
				<img src="assets/images/demos/demo-19/products/product-{{rand(1,10)}}.jpg" alt="Product image" class="product-image">
			</a>

			<div class="product-action-vertical">
				<a href="#" class="btn-product-icon btn-wishlist" title="Add to Wishlist"><span>add to wishlist</span></a>
			</div><!-- End .product-action-vertical -->

			<div class="product-action">
				<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
			</div><!-- End .product-action -->
		</figure><!-- End .product-media -->

		<div class="product-body">
			<div class="product-cat">
				<a href="#">{{$anime->categ_name}}</a>
			</div><!-- End .product-cat -->
			<h3 class="product-title"><a href="product.html">{{$anime->name}}</a></h3><!-- End .product-title -->
			<div class="product-price">
				<span class="new-price">Bs {{$anime->sale_price}}.00</span>
				<span class="old-price">Antes Bs {{$anime->purchase_price}}.00</span>
			</div><!-- End .product-price -->
		</div><!-- End .product-body -->
	</div><!-- End .product -->
@endforeach
