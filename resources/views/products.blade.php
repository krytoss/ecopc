@extends('layouts.master')

@section('content')

	<div id="categories-menu">
			
		<div class="container">
				
			<ul class="menu horizontal align-center">
					
				@foreach ($categories as $cat)

					<li>
						<a href="{{ URL::to('category/' . $cat->slug) }}">
							{{ $cat->name }}
						</a>
					</li>

				@endforeach

			</ul>

		</div>

	</div>

	<section id="products">

		<div class="container">
			
			@foreach ($products->chunk(4) as $chunk)

				<div class="row">
					@foreach ($chunk as $product)

						<div class="col col-lg-3 col-md-4">

							<div class="product-card">
								
								<a href="{{ URL::to('products/' . $product->slug) }}" class="product-card-link">

									<div class="product-name">
										<h2>{{ $product->name }}</h2>
									</div>

									<div class="product-info">
										{{ strip_tags(str_limit($product->description, 100, '...')) }}
									</div>
										
									<div class="product-img">
										<img src="{{ App\Thumbnail::where('product_id', $product->id)->first() ? asset('img/products/'.App\Thumbnail::where('product_id', $product->id)->first()->file_name) : asset('img/no_thumb.png') }}">
									</div>

									<ul class="brief-info-list">

						                <li class="clearfix">
						                  <span class="left">
						                    Záruka:
						                  </span>
						                  <span class="right align-right bold">
						                    {{ $product->warranty }}
						                  </span>
						                </li>

						                <li class="clearfix">
						                  <span class="left">
						                    Kód produktu:
						                  </span>
						                  <span class="right align-right bold">
						                    {{ $product->product_code }}
						                  </span>
						                </li>

						                <li class="clearfix">
						                  <span class="left">
						                    Skladom:
						                  </span>
						                  <span class="right align-right bold">
						                    {{ $product->stock }} ks
						                  </span>
						                </li>

						              </ul>

									<div class="product-price">
										Cena s DPH<br>
										<span class="bold">{{ $product->priceWithVat() }} €</span>
									</div>

								</a>

							</div>

						</div>

					@endforeach
				</div>

			@endforeach

		</div>

	</section>

@stop