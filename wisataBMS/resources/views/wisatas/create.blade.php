@extends('wisatas.layout')

   

@section('content')

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

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Name:</strong>

            <input type="text" name="name" class="form-control" placeholder="Name">

        </div>

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

    </div><br><br>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
    <strong>Jam Operasional</strong><br>
    <br><strong>Weekdays</strong>
        
        <div class="form-group">

            
            <div class="col-xs-6 col-sm-6 ">
                
                <div class="form-group">
                    <strong>Weedays</strong>
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
    <strong>Maps</strong>
        <div class="form-group">

            
            
                
                <div class="form-group">

                    <strong>Latitude , Longitude</strong>

                    <input type="text" name="mapslat" class="form-control" placeholder="Latitude">

                
            </div>
        </div><br><br>
        
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Alamat:</strong>

            <input type="text" name="alamat" class="form-control" placeholder="alamat">

        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
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
@endsection