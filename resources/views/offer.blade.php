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
			
			@foreach ($products as $product)

				<div>
					{{ $product->name }}
				</div>

			@endforeach

		</div>

	</section>

@stop