
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Beranda | Klinthung Banyumas</title>
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
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
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
					<h1 id="fh5co-logo"><a href="index.html"><img src="images/logo.png" width="35" height="35" alt="logo"> KLINTHUNG</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li ><a href="#">Home</a></li>
							<li class="active">
								<a href="vacation.html" class="fh5co-sub-ddown">Objek Wisata</a>
								<ul class="fh5co-sub-menu">
                                    <li><a href="#">Semua Wisata</a></li>
                                    <li><a href="#">Hiburan</a></li>
									<li><a href="#">Wisata Keluarga</a></li>
									<li><a href="#">Wisata Taman</a></li>
								</ul>
							</li>
                            <li>
								<a href="vacation.html" class="fh5co-sub-ddown">Kuliner</a>
								<ul class="fh5co-sub-menu">
									<li><a href="#">Semua Kuliner</a></li>
									<li><a href="#">Cafe</a></li>
									<li><a href="#">Kuliner Modern</a></li>
									<li><a href="#">Kuliner Tradisional</a></li>
								</ul>
							</li>
                            <li>
								<a href="vacation.html" class="fh5co-sub-ddown">Fasilitas</a>
								<ul class="fh5co-sub-menu">
									<li><a href="#">Semua Fasilitas</a></li>
									<li><a href="#">ATM & Bank</a></li>
                                    <li><a href="#">Pusat Pendidikan</a></li>
                                    <li><a href="#">Penginapan</a></li>
                                    <li><a href="#">Rumah Sakit & Klinik</a></li>
                                    <li><a href="#">SPBU</a></li>
                                    <li><a href="#">Transportasi</a></li>
								</ul>
							</li>
							<li class=""><a href="#">Berita</a></li>
                            <li>
								<a class="btn btn-primary " href="/login">Login</a>
								
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->
        <div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Wisata</h3>
						<p>Daftar kumpulan wisata di Kabupaten Banyumas dari hiburan sampai wisata keluarga yang siap untuk menemani liburanmu!</p>
					</div>
				</div>
			</div>
            
			<div class="container">
            <div class="row row-bottom-padded-md">
            
            
                @foreach($wisata as $key => $data)
                
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="image/{{$data->image}}" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="#">{{$data->name}}</a></h3>
									<span class="posted_by">{{$data->category}}</span>
									<p><a href="#">Learn More...</a></p>
								</div>
							</div> 
						</div>
					</div>
				@endforeach
                
                
					<div class="clearfix visible-md-block"></div>
				</div>

			</div>
		</div>
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="https://www.instagram.com/pemkab_banyumas/"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
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
    
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

