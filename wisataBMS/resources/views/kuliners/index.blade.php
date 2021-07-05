
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Page | Klinthung Banyumas</title>
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
					<h1 id="fh5co-logo"><a href="/admin"><img src="{{ asset('images/logo.png') }}" width="35" height="35" alt="logo"> KLINTHUNG</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class=""><a href="/admin">Home</a></li>
							<li class=""><a href="/wisatas">Wisata</a></li>
                            <li class="active"><a href="/kuliners">Kuliner</a></li>
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
		</header><br><br>

  

        <div class="container">

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Daftar Kuliner</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-success" href="{{ route('kuliners.create') }}"> Tambah Kuliner</a>

        </div>

    </div>

</div>



@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

@endif

 

<table class="table table-bordered">

    <tr>

        <th>No</th>

        <th>Image</th>

        <th>Name</th>

        <th>Details</th>

        <th width="280px">Action</th>

    </tr>

    @foreach ($kuliners as $kuliner)

    <tr>

        <td>{{ ++$i }}</td>

        <td><img src="/image/{{ $kuliner->image }}" width="100px"></td>

        <td>{{ $kuliner->name }}</td>
		<td><a class="btn btn-info" href="{{ route('kuliners.show',$kuliner->id) }}">Lihat detail</a> </td>
			
        <td>
		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Hapus</button>
		<a class="btn btn-primary" href="{{ route('kuliners.edit',$kuliner->id) }}">Edit</a>


		<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
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
        			
					<form action="{{ route('kuliners.destroy',$kuliner->id) }}" method="POST">
                		
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
	

    @endforeach

</table>
</div>


{!! $kuliners->links() !!}



    



   
	

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


        

