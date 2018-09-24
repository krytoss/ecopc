<!DOCTYPE html>
<html>
<head>
	<title>ecoPC.sk - @yield('title')</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-grid.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>

	<header id="main-header">
		
		<div id="social" class="align-right">

			<div class="container">
			
				<a href="#"><i class="fab fa-facebook-f semi-bold align-center" aria-hidden="true"></i></a>
				<a href="#"><i class="fab fa-instagram semi-bold align-center" aria-hidden="true"></i></a>
				<a href="{{ URL::to('cart') }}" class="cart">Košík <i class="fas fa-shopping-cart"></i><span class="badge">{{ $cart_qty }}</span></a>

			</div>

		</div>

		<div id="logo" class="align-center">
			
			<div class="container">
				
				<a href="{{ URL::to('/') }}">
					<img src="{{ asset('img/logo.png') }}" alt="Logo ecoPC.sk, refurbished počítače za najlepšie ceny">
				</a>

			</div>

		</div>

		<div id="main-menu" class="{{{ Request::is('/') ? 'main-page' : '' }}}">
			
			<div class="container">
				
				<ul class="menu horizontal align-center">
					
					<li>
						<a href="{{ URL::to('/') }}" class="{{{ Request::is('/') ? 'active' : '' }}}">Domov</a>
					</li>

					<li>
						<a href="{{ URL::to('products') }}" class="{{{ Request::is('offer') ? 'active' : '' }}}{{{ Request::is('category/*') ? 'active' : '' }}}">Ponuka</a>
					</li>

					<li>
						<a href="#">Prečo ecoPC.sk?</a>
					</li>

					<li>
						<a href="{{ URL::to('contact') }}" class="{{{ Request::is('contact') ? 'active' : '' }}}">Kontakt</a>
					</li>

				</ul>

			</div>

		</div>

	</header>

	<main>

		@yield('content')

	</main>

	<footer id="main-footer">
		

		
	</footer>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

</body>
</html>