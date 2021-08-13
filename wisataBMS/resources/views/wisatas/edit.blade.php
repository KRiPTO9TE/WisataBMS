@extends('wisatas.layout')

     

@section('content')
<br><br>
<div class = "container">

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit wisata</h2>

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

    

    <form action="{{ route('wisatas.update',$wisata->id) }}" method="POST" enctype="multipart/form-data"> 

        @csrf

        @method('PUT')

     

         <div class="row">

            <div class="col-xs-3 col-sm-3 col-md-3">

                <div class="form-group">

                    <strong>Name:</strong>

                    <input type="text" maxlength="34" name="name" value="{{ $wisata->name }}" class="form-control" placeholder="Name">

                </div>
                <p style="color:red">Pastikan kurang dari 34 karakter.</p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Detail:</strong>

                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $wisata->detail }}</textarea>

                </div>

            </div>

            <div class="col-xs-3 col-sm-3 col-md-3">

                <div class="form-group">

                    <strong>Image:</strong>

                    <input type="file" name="image" class="form-control" placeholder="image">

                    <img src="/image/{{ $wisata->image }}" width="75px">

                </div>

            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">

                <div class="form-group">

                    <strong>Image:</strong>

                    <input type="file" name="image1" class="form-control" placeholder="image">

                    <img src="/image/{{ $wisata->image1 }}" width="75px">

                </div>

            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">

                <div class="form-group">

                    <strong>Image:</strong>

                    <input type="file" name="image2" class="form-control" placeholder="image">

                    <img src="/image/{{ $wisata->image2 }}" width="75px">

                </div>

            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">

                <div class="form-group">

                    <strong>Image:</strong>

                    <input type="file" name="image3" class="form-control" placeholder="image">

                    <img src="/image/{{ $wisata->image3 }}" width="75px">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

    <p style="color:red">Pastikan gambar berukuran lebih kecil dari 2048x2048 dan size tidak boleh lebih dari 2MB.</p>

    </div>
            <br><br>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
    <strong>Jam Operasional</strong>
        <div class="form-group">

            
            <div class="col-xs-6 col-sm-6 ">
                
                <div class="form-group">
                    <strong>Weekdays</strong>
                    <strong>Buka-Tutup</strong>

                    <input type="text" name="btdays" value="{{ $wisata->btdays }}" class="form-control" placeholder="jj.mm-jj.mm">

                </div>
            </div>
            <div class="col-xs-6 col-sm-6 ">
                
                <div class="form-group">
                <strong>Weekend</strong>
                    <strong>Buka-Tutup</strong>

                    <input type="text" name="btend" value="{{ $wisata->btend }}" class="form-control" placeholder="jj.mm-jj.mm">

                </div>
            </div>
        </div>
    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">
                    <br>
                    <strong>Category:</strong>
                    <select id="category" name="category">
                        <option value="{{ $wisata->category }}">{{ $wisata->category }}</option>
                        <option value="Air">Air</option>
                        <option value="Taman">Taman</option>
                        <option value="Keluarga">Keluarga</option>
                        <option value="Hiburan">Hiburan</option>
                    </select><br><br>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
    <strong>Maps</strong>
        <div class="form-group">

            
                
                <div class="form-group">

                    <strong>Latitude , Longitude</strong>

                    <input type="text" name="mapslat" value="{{ $wisata->mapslat }}" class="form-control" placeholder="Latitude">

                
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Alamat:</strong>

            <input type="text" name="alamat" value="{{ $wisata->alamat }}" class="form-control" placeholder="alamat">

        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <strong>Harga Tiket Masuk Weekdays</strong>
        <div class="form-group">

            
            <div class="col-xs-6 col-sm-6 ">
                
                <div class="form-group">

                    <strong>Anak anak</strong>

                    <input type="text" name="tika" value="{{ $wisata->tika }}" class="form-control" placeholder="HTM Anak anak">

                </div>
            </div>
            <div class="col-xs-6 col-sm-6 ">
                
                <div class="form-group">

                    <strong>Dewasa</strong>

                    <input type="text" name="tikd" value="{{ $wisata->tikd }}" class="form-control" placeholder="HTM Dewasa">

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

                    <input type="text" name="tikaw" value="{{ $wisata->tikaw }}" class="form-control" placeholder="HTM Anak anak">

                </div>
            </div>
            <div class="col-xs-6 col-sm-6 ">
                
                <div class="form-group">

                    <strong>Dewasa</strong>

                    <input type="text" name="tikdw" value="{{ $wisata->tikdw }}" class="form-control" placeholder="HTM Dewasa">

                </div>
            </div>
        </div><br><br>
        
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Web:</strong>

            <input type="text" name="web" value="{{ $wisata->web }}" class="form-control" placeholder="alamat Web">

        </div>
        <p style="color:red">Jika tidak ada, masukan saja alamat web Klinthung.</p>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

    <strong>Telefon:</strong>

    <input type="text" name="telefon" value="{{ $wisata->telefon }}" class="form-control" placeholder="No Telefon">

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