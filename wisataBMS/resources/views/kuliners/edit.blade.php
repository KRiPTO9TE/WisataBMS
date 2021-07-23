@extends('kuliners.layout')

     

@section('content')
<br><br>
<div class = "container">

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit kuliner</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('kuliners.index') }}"> Back</a>

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

    

    <form action="{{ route('kuliners.update',$kuliner->id) }}" method="POST" enctype="multipart/form-data"> 

        @csrf

        @method('PUT')

     

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Name:</strong>

                    <input type="text" name="name" value="{{ $kuliner->name }}" class="form-control" placeholder="Name">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Detail:</strong>

                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $kuliner->detail }}</textarea>

                </div>

            </div>

            <div class="col-xs-3 col-sm-3 col-md-3">

                <div class="form-group">

                    <strong>Image Cover:</strong>

                    <input type="file" name="image" class="form-control" placeholder="image">

                    <img src="/image/{{ $kuliner->image }}" width="75px">

                </div>

            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">

                <div class="form-group">

                    <strong>Image:</strong>

                    <input type="file" name="image1" class="form-control" placeholder="image">

                    <img src="/image/{{ $kuliner->image1 }}" width="75px">

                </div>

            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">

                <div class="form-group">

                    <strong>Image:</strong>

                    <input type="file" name="image2" class="form-control" placeholder="image">

                    <img src="/image/{{ $kuliner->image2 }}" width="75px">

                </div>

            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">

                <div class="form-group">

                    <strong>Image:</strong>

                    <input type="file" name="image3" class="form-control" placeholder="image">

                    <img src="/image/{{ $kuliner->image3 }}" width="75px">

                </div>

            </div>
            <br><br>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
    <strong>Jam Operasional</strong><br>
    <br><strong>Weekdays</strong>
        
        <div class="form-group">

            
            <div class="col-xs-6 col-sm-6 ">
                
                <div class="form-group">
                    <strong>Weedays</strong>
                    <strong>Buka-Tutup</strong>

                    <input type="text" name="btdays" value="{{ $kuliner->btdays }}" class="form-control" placeholder="jj.mm-jj.mm">

                </div>
            </div>
            <div class="col-xs-6 col-sm-6 ">
                
                <div class="form-group">
                <strong>Weekend</strong>
                    <strong>Buka-Tutup</strong>

                    <input type="text" name="btend" value="{{ $kuliner->btend }}" class="form-control" placeholder="jj.mm-jj.mm">

                </div>
            </div>
        </div>
    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Category:</strong>
                    <select id="category" name="category">
                        <option value="{{ $kuliner->category }}">{{ $kuliner->category }}</option>
                        <option value="Cafe">Cafe</option>
                        <option value="Modern">Modern</option>
                        <option value="Tradisional">Tradisional</option>
                    </select><br><br>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
    <strong>Maps</strong>
        <div class="form-group">

            
            <div class="col-xs-6 col-sm-6 ">
                
                <div class="form-group">

                    <strong>Latitude</strong>

                    <input type="text" name="mapslat" value="{{ $kuliner->mapslat }}" class="form-control" placeholder="Latitude">

                </div>
            </div>
            <div class="col-xs-6 col-sm-6 ">
                
                <div class="form-group">

                    <strong>Longitude</strong>

                    <input type="text" name="mapslong" value="{{ $kuliner->mapslong }}" class="form-control" placeholder="Longitude">

                </div>
            </div>
        </div><br><br>
        
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Alamat:</strong>

            <input type="text" name="alamat" value="{{ $kuliner->alamat }}" class="form-control" placeholder="alamat">

        </div>

    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Web:</strong>

            <input type="text" name="web" value="{{ $kuliner->web }}" class="form-control" placeholder="alamat Web">

        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

    <strong>Telefon:</strong>

    <input type="text" name="telefon" value="{{ $kuliner->telefon }}" class="form-control" placeholder="No Telefon">

</div>

</div>

            

            <div class="col-xs-12 col-sm-12 col-md-12 text-right">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

     

    </form>
    </div>
    <br><br><br>
@endsection