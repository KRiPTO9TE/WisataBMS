<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ $wisata->name }} | Klinthung Banyumas</title>
	
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
	@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
	@endif
	
	@if ($errors->any())

	<div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif
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
							<li class="active"><a href="/wisata">Wisata</a></li>
                            <li class=""><a href="/kuliner">Kuliner</a></li>
                            <li class=""><a href="/fasil">Fasilitas</a></li>
							@elseif(Auth::check()==1 && Auth::user()->role == "admin")
							<li class=""><a href="/admin">Home</a></li>
							<li class="active"><a href="/wisatas">Wisata</a></li>
                            <li class=""><a href="/kuliners">Kuliner</a></li>
                            <li class=""><a href="/fasils">Fasilitas</a></li>
							@elseif(Auth::check()==1 && Auth::user()->role == "user")
							<li ><a href="/">Home</a></li>
							<li class="active"><a href="/wisata">Wisata</a></li>
                            <li class=""><a href="/kuliner">Kuliner</a></li>
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
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(/image/{{ $wisata->image }});">
				<div class="desc">
					<div class="container">
						<div class="row">   
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									<h1>Wisata {{ $wisata->category }}</h1>
									<h2>{{ $wisata->name }}</h2>
									<h3>Klinthung Banyumas</h3>
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
						<h3>Wisata {{ $wisata->category }}</h3>
						<p>Daftar kumpulan wisata di Kabupaten Banyumas dari hiburan sampai wisata keluarga yang siap untuk menemani liburanmu!</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<h2 class="heading-title">{{ $wisata->name }}</h2>
					</div>
					<div class="col-md-6 animate-box">
						<p>{{ $wisata->detail }}</p><br><br>
						
					</div>
					<div class="col-md-6 animate-box">

	


					
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						

						<!-- Wrapper for slides -->
						<div class="carousel-inner">
						<div class="item active">
							<img src="/image/{{ $wisata->image }}" alt="(/image/{{ $wisata->image }})" style="width:100%;">
						</div>
						@foreach ($wgambars as $wgambar)
						@if (  "{{ $wgambar->wisata_id }}"  == "{{ $wisata->id }}" )     						
						<div class="item">
							<img src="{{asset('image/'. $wgambar->image)}}" alt="{{ $wgambar->image }}" style="width:100%;">
							

						</div>
						@endif
						@endforeach
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
					@if(Auth::check()==1 && Auth::user()->role == "admin")
					<br>
					<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal1">+ gambar</button>
					@endif
					</div>

				
				<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Tambah Gambar</h4>
							</div>
							<div class="modal-body">
								

								

								<form action="{{ route('wgambars.store') }}" method="POST" enctype="multipart/form-data">

								@csrf
										

								<input type="hidden" id="wisata_id" name="wisata_id" value="{{ $wisata->id}}">
								

								
								
									<input type="file" name="image"  class="form-control" placeholder="image">


								<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-success">Tambah</button>
								</div>
					</form>
							</div>
						</div>
					</div>

			</div>
</div><br><br><br>
@if(Auth::check()==1 && Auth::user()->role == "admin")
<table class="table table-bordered">

<tr>

	<th>Gambar</th>

	<th>Action</th>

</tr>

@foreach ($wgambars as $wgambar)
@if("{{ $wgambar->wisata_id }}"  == "{{ $wisata->id }}")
<tr>


	

	<td><img src="/image/{{ $wgambar->image }}" width="100px" alt=""></td>
	<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal2">Hapus</button>


	<!-- Modal -->
	<div id="myModal2" class="modal fade" role="dialog">
		  <div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Hapus</h4>
				  </div>
			  <div class="modal-body">
				<p>Anda yakin untuk menghapus?</p>
			  </div>
			  <div class="modal-footer">
				
			  <form action="{{ route('wgambars.destroy',$wgambar->id) }}" method="POST">
												
												@csrf
												@method('DELETE')
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-danger">Delete</button>
											</form>
			  </div>
		</div>

		  </div>
	</div>

		
					
	</td>

</tr>

@endif

@endforeach

</table>
@endif
			
	<div id="fh5co-car" class="fh5co-section-grayy">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
					<h3>Fasilitas</h3>
					
				</div>
			</div>
			<div class="row row-bottom-padded-md">
			@foreach($wisata->fasi as $value)
				<div class="col-xs-3 col-sm-3 col-md-3 animate-box">
				
					<div class="car">
						<div class="one-4">
							<h3>{{$value}}</h3>
						</div>
					</div>
				</div>
			@endforeach
				
			</div>
		</div>
	</div>
	
	</div>
				
				
				</div>
				
			</div>
		</div>
		</div>
</div>


<section class="pricing-plans animate-box" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <ul class="pricing">
                        <li class="price">
							
                             Weekdays <span><sup>Rp</sup>{{ $wisata->tktaday }}</span><br>
							 Weekends <span><sup>Rp</sup>{{ $wisata->tktaend }}</span>
                        </li>
						<h2>Tiket Anak Anak</h2>
                    </ul>
                </div>
				<div class="col-sm-6 col-md-6">
                    <ul class="pricing">
                        <li class="price">
							
                             Weekdays <span><sup>Rp</sup>{{ $wisata->tktdday }}</span><br>
							 Weekends <span><sup>Rp</sup>{{ $wisata->tktdend }}</span>
                        </li>
						<h2>Tiket Dewasa</h2>
                    </ul>
					
                </div>
                
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .container --> 
    </section>
	<br><br><br>
		<div class="animate-box" id="googleMap" style="width: full; height: 560px;"></div>
		<!--<div style="width: full; height: 560px;">
					{!! Mapper::render() !!}
		</div>-->
		<div id="fh5co-contact" class="fh5co-section-gray">
			<div class="container">
				
				<form action="#">
					<div class="row animate-box">
						<div class="col-md-6">
							<h3 class="section-title">Alamat</h3>
							<p>Kunjungi kami di alamat berikut</p>
							<ul class="contact-info">
								<li><i class="icon-location-pin"></i>{{ $wisata->alamat }}</li>
								<li><i class="icon-phone2"></i>{{ $wisata->telefon }}</li>
								<li><i class="icon-globe2"></i><a href="http://{{ $wisata->web }}">{{ $wisata->web }}</a></li>
							</ul>
						</div>
						<div class="col-md-6">
						<h3 class="section-title">Jam Operasional</h3>
								
									<table>
										<tr class="monday fvl-d">
											<td><span>Weekdays</span></td>
											<td>{{ $wisata->bukday }}</td>
											<td>-</td>
											<td>{{ $wisata->ttpday }}</td>
										</tr>
										<tr class="tuesday fvl-d">
											<td><span>Weekends</span></td>
											<td>{{ $wisata->bukend }}</td><td>-</td>
											<td>{{ $wisata->ttpend }}</td>
										</tr>
										
									</table>
								
								<script>
								const time = () => {

									const activerow = document.querySelector('#activerow');

									const monday = document.querySelector('.monday');
									const tuesday = document.querySelector('.monday');
									const wednesday = document.querySelector('.monday');
									const thursday = document.querySelector('.monday');
									const friday = document.querySelector('.monday');
									const saturday = document.querySelector('.tuesday');
									const sunday = document.querySelector('.tuesday');


									switch (new Date().getDay()) {

										case 1:
											monday.setAttribute("id", "activerow");
											break;
										case 2:
											tuesday.setAttribute("id", "activerow");
											break;
										case 3:
											wednesday.setAttribute("id", "activerow");
											break;
										case 4:
											thursday.setAttribute("id", "activerow");
											break;
										case 5:
											friday.setAttribute("id", "activerow");
											break;
										case 6:
											saturday.setAttribute("id", "activerow");
											break;
										case 0:
											sunday.setAttribute("id", "activerow");
											break;
									}

								}
								time();
								</script>

							
						</div>
						
					</div>
				</form>
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
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA-R3eTNSF8z5mL5KmRT8mJJcENDBW5qMU"></script>
<script>
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng({{ $wisata->mapslat }},{{ $wisata->mapslong }}),
    zoom:16,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // membuat Marker
  var marker=new google.maps.Marker({
      position: new google.maps.LatLng({{ $wisata->mapslat }},{{ $wisata->mapslong }}),
      map: peta
  });

}

// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
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

