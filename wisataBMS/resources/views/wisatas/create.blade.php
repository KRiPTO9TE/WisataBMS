
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	@if(Auth::check()==0)
	<a href="/login">login</a>
	<title>login to see this content</title>
	@elseif (Auth::check()==1 && (Auth::user()->role != "admin"))
	<a href="/login">login</a>
	<title>login to see this content</title>
	@elseif (Auth::check()==1 && (Auth::user()->role == "admin"))
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Page | Klinthung Banyumas</title>
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
	<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="author" content="" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  
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
					<h1 id="fh5co-logo"><a href="/admin"><img src="{{ asset('images/logo.png') }}" width="35" height="35" alt="logo"> KLINTHUNG</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class=""><a href="/admin">Home</a></li>
							<li class="active"><a href="/wisatas">Wisata</a></li>
                            <li class=""><a href="/kuliners">Kuliner</a></li>
                            <li class=""><a href="/fasils">Fasilitas</a></li>
                            <li>
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
						</ul>
					</nav>
				</div>
			</div>
		</header>
<br><br>
<div class="container">


        <div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-left">

        <h2>Add New Wisata</h2>

    </div>

    <div class="pull-right">

        <a class="btn btn-primary" href="{{ route('wisatas.index') }}"> Back</a>

    </div>

</div>

</div>

 

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

 

<form action="{{ route('wisatas.store') }}" method="POST" enctype="multipart/form-data">

@csrf



 <div class="row">

    <div class="col-xs-3 col-sm-3 col-md-3">

        <div class="form-group">

            <strong>Name:</strong>

            <input type="text" maxlength="34" name="name" class="form-control" placeholder="Name">

        </div>
        <p style="color:red">Pastikan kurang dari 34 karakter.</p>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Detail:</strong>

            <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>

        </div>

    </div>

    <div class="col-xs-3 col-sm-3 col-md-3">

        <div class="form-group">

            <strong>Image Cover:</strong>

            <input type="file" name="image" class="form-control" placeholder="image">

        </div>

    </div>
    <div class="col-xs-3 col-sm-3 col-md-3">

        <div class="form-group">

            <strong>Image:</strong>

            <input type="file" name="image1" class="form-control" placeholder="image">

        </div>

    </div>
    <div class="col-xs-3 col-sm-3 col-md-3">

        <div class="form-group">

            <strong>Image:</strong>

            <input type="file" name="image2" class="form-control" placeholder="image">

        </div>

    </div>
    <div class="col-xs-3 col-sm-3 col-md-3">

        <div class="form-group">

            <strong>Image:</strong>

            <input type="file" name="image3" class="form-control" placeholder="image">

        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

    <p style="color:red">Pastikan gambar berukuran lebih kecil dari 2048x2048 dan size tidak boleh lebih dari 2MB.</p>

    </div><br><br>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
    <strong>Jam Operasional</strong>
        
        <div class="form-group">

            
            <div class="col-xs-6 col-sm-6 ">
                
                <div class="form-group">
                    <strong>Weekdays</strong>
                    <strong>Buka-Tutup</strong>

                    <input type="text" name="btdays" class="form-control" placeholder="jj.mm-jj.mm">

                </div>
            </div>
            <div class="col-xs-6 col-sm-6 ">
                
                <div class="form-group">
                <strong>Weekend</strong>
                    <strong>Buka-Tutup</strong>

                    <input type="text" name="btend" class="form-control" placeholder="jj.mm-jj.mm">

                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">
            <br>
            <strong>Category:</strong>
            <select id="category" name="category">
                <option value="">Pilih salah satu</option>
                <option value="Air">Air</option>
                <option value="Taman">Taman</option>
                <option value="Keluarga">Keluarga</option>
                <option value="Hiburan">Hiburan</option>
            </select>
            <!--<input type="text" name="category" class="form-control" placeholder="Category">
-->         <br><br>
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="col-xs-6 col-sm-6 ">
            <div class="form-group">
                <div id="map-canvas" style="width: 512px; height: 256px;"></div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 ">
            <div class="form-group">
                <strong>Alamat:</strong>
                <input type="text" id="map-search" name="alamat" class="form-control" placeholder="Cari alamatnya disini">
                <br> <br>
                <label for="">Lat: <input type="text" name="mapslat" class="latitude"></label>
                <label for="">Long: <input type="text" name="mapslong" class="longitude"></label>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('js/javascript.js') }}"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-R3eTNSF8z5mL5KmRT8mJJcENDBW5qMU&libraries=places&callback=initialize"></script>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <br>
    <strong>Harga Tiket Masuk Weekdays</strong>
        <div class="form-group">

            
            <div class="col-xs-6 col-sm-6 ">
                
                <div class="form-group">

                    <strong>Anak anak</strong>

                    <input type="text" name="tika" class="form-control" placeholder="HTM Anak anak">

                </div>
            </div>
            <div class="col-xs-6 col-sm-6 ">
                
                <div class="form-group">

                    <strong>Dewasa</strong>

                    <input type="text" name="tikd" class="form-control" placeholder="HTM Dewasa">

                </div>
            </div>
        </div><br><br>
        
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <strong>Harga Tiket Masuk Weekend</strong>
        <div class="form-group">

            
            <div class="col-xs-6 col-sm-6 ">
                
                <div class="form-group">

                    <strong>Anak anak</strong>

                    <input type="text" name="tikaw" class="form-control" placeholder="HTM Anak anak">

                </div>
            </div>
            <div class="col-xs-6 col-sm-6 ">
                
                <div class="form-group">

                    <strong>Dewasa</strong>

                    <input type="text" name="tikdw" class="form-control" placeholder="HTM Dewasa">

                </div>
            </div>
        </div><br><br>
        
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Web:</strong>

            <input type="text" name="web" class="form-control" placeholder="alamat Web">

        </div>
        <p style="color:red">Jika tidak ada, masukan saja alamat web Klinthung.</p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

    <strong>Telefon:</strong>

    <input type="text" name="telefon" class="form-control" placeholder="No Telefon">

</div>

</div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-right">

            <button type="submit" class="btn btn-primary">Submit</button>
<br><br><br><br><br><br>
    </div>

</div>

</div>


	
  

  



    

	
	@endif
   
	

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

