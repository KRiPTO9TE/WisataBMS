
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Beranda | Klinthung Banyumas</title>

	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
	<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="" />
	
 
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<!-- Superfish -->
	<link rel="stylesheet" href="{{ asset('css/superfish.css') }}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}"> 
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
	<!-- CS Select -->
	<link rel="stylesheet" href="{{ asset('css/cs-select.css') }}">
	<link rel="stylesheet" href="{{ asset('css/cs-skin-border.css') }}">
	
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">


	<!-- Modernizr JS -->
	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="/"><img src="images/logo.png" width="35" height="35" alt="logo"> KLINTHUNG</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
						@if(Auth::check()==0)
							<li ><a href="/">Home</a></li>
							@elseif(Auth::check()==1 && Auth::user()->role == "user")
							<li class="active"><a href="/">Home</a></li>
							@endif
							<li class=""><a href="/wisata">Wisata</a></li>
                            <li ><a href="/kuliner">Kuliner</a></li>
                            <li class=""><a href="/fasil">Fasilitas</a></li>
                            <li>
								@if(Auth::check()==0)
								<a class="btn btn-primary " href="/login">Login</a>
								@elseif(Auth::check()==1 && Auth::user()->role == "user")
								<a href="#" class="fh5co-sub-ddown"><img src="{{ asset('images/user.png') }}" width="25" height="25" alt="user">{{ auth()->user()->name }}</a>
								
								<ul class="fh5co-sub-menu">
									<li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                        </form>
                                    </li>
								</ul>	
							</li>
							@endif
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->
	
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/img1.jpeg);">
				<div class="desc">
					<div class="container">
						<div class="row">   
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									<h1>KLINTHUNG</h1>
									<h2>Solusi Mudah Jelajahi Banyumas</h2>
									<h3>Yuk liburan di Banyumas!</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		
		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>KLINTHUNG</h3>
						<p>Klinthung Banyumas adalah aplikasi yang memudahkan para traveler dalam menemukan guide untuk menikmati indahnya Banyumas dengan fasilitas lengkap untuk berwisata anda.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/w1.jpg" alt="cafe" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Cafe</h3>
								<span>Temukan cafe di Banyumas</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/w2.jpg" alt="restoran" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Kuliner Modern</h3>
								<span>Jelajahi kuliner modern di Banyumas</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/w3.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Kuliner Tradisional</h3>
								<span>Jelajahi kuliner tradisional di Banyumas</span>
								</div>
						</div>
					</div>
					<div class="col-md-12 text-center animate-box">
						<p><a class="btn btn-primary btn-outline btn-lg" href="/kuliner">Jelajahi Sekarang!</a></p>
					</div>
				</div>
			</div>
		</div>

		

		
		<div id="fh5co-destination">
			<div class="tour-fluid">
				<div class="row">
					<div class="col-md-12">
						<ul id="fh5co-destination-list" class="animate-box">
						
						@foreach($wisata as $key => $data)
						@if($loop->index < 8)
							<li class="one-forth text-center" style="background-image: url(image/{{$data->image}});">
								<a href="/wisatas/{{$data->id}}">
									<div class="case-studies-summary">
										<h2>{{$data->name}}</h2>
									</div>
								</a>
							</li>
							@endif
						@endforeach
							<li class="one-forth text-center">
								<div class="title-bg">
									<div class="case-studies-summary">
									</div>
								</div>
							</li>
							<li class="one-half text-center">
								<div class="title-bg">
									<div class="case-studies-summary">
										<h2>Rekomendasi Tempat Wisata</h2>
										<span><a href="/wisata">Lihat semua tempat wisata</a></span>
									</div>
								</div>
							</li>
							<li class="one-forth text-center">
								<div class="title-bg">
									<div class="case-studies-summary">
									</div>
								</div>
							</li>
							
						</ul>		
					</div>
				</div>
			</div>
		</div>
        <div id="fh5co-features">
			<div class="container">
            
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Fasilitas</h3>
						<p>Kumpulan fasilitas yang ada di Banyumas untuk menghadirkan pengalaman liburan yang aman, tenang dan menyenangkan.</p>
					</div>
				</div>
			
				<div class="row">
					<div class="col-md-4 animate-box">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-credit-card2"></i>
							</span>
							<div class="feature-copy">
								<h3>ATM & Bank</h3>
								<p>Temukan ATM dan Bank disekitar anda berada.</p>
								
							</div>
						</div>

					</div>

					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-open-book"></i>
							</span>
							<div class="feature-copy">
								<h3>Pusat Pendidikan</h3>
								<p>Temukan sarana penunjang pendidikan di Banyumas.</p>
								
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-office"></i>
							</span>
							<div class="feature-copy">
								<h3>Penginapan</h3>
								<p>Cari peningapan yang cocok untuk kamu di Banyumas.</p>
								
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-plus2"></i>
							</span>
							<div class="feature-copy">
								<h3>Rumah Sakit dan Klinik</h3>
								<p>Kumpulan rumah sakit dan klinik yang tersedia di Banyumas.</p>
								
							</div>
						</div>

					</div>

					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-location3"></i>
							</span>
							<div class="feature-copy">
								<h3>SPBU</h3>
								<p>Temukan SPBU disekitar kamu, Jangan sampai kehabisan bahan bakar ya.</p>
								
							</div>
						</div>

					</div>
					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-road"></i>
							</span>
							<div class="feature-copy">
								<h3>Transportasi</h3>
								<p>Beragam pilihan Transportasi untuk liburanmu di Banyumas.</p>
								
							</div>
						</div>
					</div>
					
				</div>
				<div class="col-md-12 text-center animate-box">
						<p><a class="btn btn-primary btn-outline btn-lg" href="/fasil">Lihat semua fasilitas<i class="icon-arrow-right22"></i></a></p>
					</div>
			</div>
		</div>
			
	</div>
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p>Copyright ©2021 All rights reserved | Dinkominfo Kabupaten Banyumas</p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('js/sticky.js') }}"></script>

	<!-- Stellar -->
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	<!-- Superfish -->
	<script src="{{ asset('js/hoverIntent.js') }}"></script>
	<script src="{{ asset('js/superfish.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/magnific-popup-options.js') }}"></script>
	<!-- Date Picker -->
	<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
	<!-- CS Select -->
	<script src="{{ asset('js/classie.js') }}"></script>
	<script src="{{ asset('js/selectFx.js') }}"></script>
	
	<!-- Main JS -->
	<script src="{{ asset('js/main.js') }}"></script>


	</body>
</html>

