
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
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/sty.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

<div class="container">

<br><br>
    <div class="row">
        
        <div class="col">
            <div class="float-left">

            <a class="btn btn-primary" href="{{ route('fasils.index') }}"> Back</a>

            

            
            </div>
        </div>
        <div class="col">
        <div class="float-right">

        <h2>Add New Fasilitas</h2>
            

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
</div>

<form action="{{ route('fasils.store') }}" method="POST" enctype="multipart/form-data">

@csrf


<div class="container">
 <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Name:</strong>

            <input type="text" name="name" class="form-control" placeholder="Name">

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Image Cover:</strong>

            <input type="file" name="image" class="form-control" placeholder="Name">

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

<p style="color:red">Pastikan gambar berukuran lebih kecil dari 2048x2048 dan size tidak boleh lebih dari 2MB.</p>

</div><br><br>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Detail:</strong>

            <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>

        </div>

    </div>

    
    
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">
            
            
            <strong>Category:</strong>
            <select id="category" class="form-control" name="category">
                <option value="">Pilih salah satu</option>
                <option value="ATM & Bank">ATM & Bank</option>
                        <option value="Pendidikan">Pendidikan</option>
                        <option value="Penginapan">Penginapan</option>
                        <option value="Rumah Sakit & Klinik">Rumah Sakit & Klinik</option>
                        <option value="SPBU">SPBU</option>
                        <option value="Transportasi">Transportasi</option>
            </select>
            <!--<input type="text" name="category" class="form-control" placeholder="Category">
-->         <br>
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <strong>Jam Operasional Weekdays:</strong>
        <div class="row">
        
            <div class="col">
                <div class="md-form md-outline">
                    <strong>Buka:</strong>
                    <input type="time" name="bukday" id="default-picker" class="form-control" placeholder="Select time">
                    
                </div>
            </div>
            <div class="col">
                <div class="md-form md-outline">
                    <strong>Tutup:</strong>
                    <input type="time" name="ttpday" id="default-picker" class="form-control" placeholder="Select time">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <strong>Jam Operasional Weekends:</strong>
        <div class="row">
        
            <div class="col">
                <div class="md-form md-outline">
                    <strong>Buka:</strong>
                    <input type="time" name="bukend" id="default-picker" class="form-control" placeholder="Select time">
                    
                </div>
            </div>
            <div class="col">
                <div class="md-form md-outline">
                    <strong>Tutup:</strong>
                    <input type="time" name="ttpend" id="default-picker" class="form-control" placeholder="Select time">
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12"><br><br>
    <div class="row">

        <div class="col">
            <div class="form-group">
                <div id="map-canvas" style="width: 512px; height: 256px;"></div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <strong>Alamat:</strong>
                <input type="text" id="map-search" name="alamat" class="form-control" placeholder="Cari alamatnya disini">
                <br> <br>
                <label for="">Lat: <input type="text" name="mapslat" class="latitude"></label>
                <label for="">Long: <input type="text" name="mapslong" class="longitude"></label>
            </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('js/javascript.js') }}"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-R3eTNSF8z5mL5KmRT8mJJcENDBW5qMU&libraries=places&callback=initialize"></script>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <strong>Fasilitas</strong>
        <div class="form-group">
            <div class="row">
                   <div class="col-4">
                       <strong>Fasilitas yang tersedia:</strong>
                   </div>
                   <div class="col-8">
                       <label class="checkbox-inline"><input type="checkbox" name="fasi[]" value="Mushola">Mushola</label>
                       <label class="checkbox-inline"><input type="checkbox" name="fasi[]" value="Toilet dan WC">Toilet dan WC</label>
                       <label class="checkbox-inline"><input type="checkbox" name="fasi[]" value="Area Parkir">Area Parkir</label>
                       <label class="checkbox-inline"><input type="checkbox" name="fasi[]" value="Area Makan">Tempat Makan</label>
                       
                   </div>
            </div>
        </div>
    </div>     
    
    <div class="col-xs-12 col-sm-12 col-md-12">
    
    <strong>Web:</strong><br>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text"   id="basic-addon3">https://</span>
        </div>
            <input type="text" class="form-control" name="web" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <p style="color:red">Jika tidak ada, masukan saja alamat web Klinthung.</p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

    <strong>Telefon:</strong>

    <input type="text" name="telefon" class="form-control" placeholder="No Telefon">

</div>

</div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-xs-right">
        <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal">Submit</button>  
        <br><br><br><br><br><br>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal">
  <div class="modal-dialog">
    <div class="modal-content">
    <!-- header-->
      <div class="modal-header">
      <h5 class="modal-title">Submit ?</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <!--body-->
      <div class="modal-body">
        Apakah data yang sudah dimasukan sudah benar?
      </div>
      <!--footer-->
      <div class="modal-footer">
        <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-info" class="">Submit</button>
      </div>
    </div>
  </div>
</div>
</div>

</div>


	
  

  



    

	
	@endif
   
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->
	
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
    
	</body>
</html>

