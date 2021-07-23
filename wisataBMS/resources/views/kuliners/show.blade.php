<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ $kuliner->name }} | Klinthung Banyumas</title>
	
	<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
	<link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
	
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
	
	<link rel="stylesheet" href="{{ asset('css/sty.css') }}">


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
					<h1 id="fh5co-logo"><a href="#"><img src="{{ asset('images/logo.png') }}" width="35" height="35" alt="logo"> KLINTHUNG</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
						@if(Auth::check()==0)
							<li ><a href="/">Home</a></li>
							<li class=""><a href="/wisata">Wisata</a></li>
                            <li class="active"><a href="/kuliner">Kuliner</a></li>
                            <li class=""><a href="/fasil">Fasilitas</a></li>
							@elseif(Auth::check()==1 && Auth::user()->role == "admin")
							<li class=""><a href="/admin">Home</a></li>
							<li class=""><a href="/wisatas">Wisata</a></li>
                            <li class="active"><a href="/kuliners">Kuliner</a></li>
                            <li class=""><a href="/fasils">Fasilitas</a></li>
							@elseif(Auth::check()==1 && Auth::user()->role == "user")
							<li ><a href="/user">Home</a></li>
							<li class=""><a href="/wisata">Wisata</a></li>
                            <li class="active"><a href="/kuliner">Kuliner</a></li>
                            <li class=""><a href="/fasil">Fasilitas</a></li>
							@endif
                            <li>
								@if(Auth::check()==0)
								<a class="btn btn-primary " href="/login">Login</a>
								@elseif(Auth::check()==1)
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

		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Kuliner {{ $kuliner->category }}</h3>
						<p>Pilihan Jelajah Kuliner di Kabupaten Banyumas dari cafe hingga kuliner tradisional yang siap untuk menemani liburanmu!</p>
					</div>
				</div>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators ">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
	<li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner animate-box">
    <div class="item active ">
      <img src="/image/{{ $kuliner->image }}"width="1280" height="720" alt="Los Angeles">
    </div>

    <div class="item ">
      <img src="/image/{{ $kuliner->image1 }}"width="1280" height="720" alt="Los Angeles">
    </div>

    <div class="item ">
      <img src="/image/{{ $kuliner->image2 }}"width="1280" height="720" alt="Los Angeles">
    </div>
	<div class="item ">
      <img src="/image/{{ $kuliner->image3 }}"width="1280" height="720" alt="Los Angeles">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control animate-box" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control animate-box" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br><br><br>
				<div class="row">
					<div class="col-md-12 animate-box">
						<h2 class="heading-title">{{ $kuliner->name }}</h2>
					</div>
					<div class="col-md-12 animate-box">
						<p>{{ $kuliner->detail }}</p><br><br>
						
				</div>
				
				
				</div>
				
			</div>
		</div>

		<div id="map" style="width: full; height: 560px;"></div>
		<!--<div style="width: full; height: 560px;">
					{!! Mapper::render() !!}
		</div>-->
		<section class="common-form-section contact-form-wrapper" id="footer-contact">
        <div class="container">
            <!--end section title -->
            <div class="row">
                <div class="flex-container clearfix">
                    <div class="col-md-8 col-sm-12">
                        <div class="customise-form contact-form clearfix">
                            
                                
								<div class="row">
                                    <div class="col-sm-12">
                                        <h3>Jam Operasional</h3>
                                    </div>
									<div class="col-xs-6 ">
										<h4>Weekdays</h4>
										<p>{{ $kuliner->btdays }}</p>
                                    </div>
									<div class="col-xs-6">
										<h4>Weekend</h4>
										<p>{{ $kuliner->btend }}</p><br>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-sm-12">
                                        <h3>Kunjungi kami di</h3>
										<p>{{ $kuliner->alamat }} </p>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="contact-information">
                            <h3>Kontak</h3>
                            <div>Nomer Telefon
                                <div><a href="tel:{{ $kuliner->telefon }}">{{ $kuliner->telefon }}</a></div>
                            </div>
                            <div>Web<a href="{{ $kuliner->web }}">{{ $kuliner->web }}</a></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






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
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyA-R3eTNSF8z5mL5KmRT8mJJcENDBW5qMU"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
	<script>
 		var map = new GMaps({
  		el: '#map',
  		lat: {{ $kuliner->mapslat }},
    	lng: {{ $kuliner->mapslong }}
  	});
	</script>

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

