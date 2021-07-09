@extends('fasils.layout')

     

@section('content')
<div class = "container">

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit fasilitas</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('fasils.index') }}"> Back</a>

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

    

    <form action="{{ route('fasils.update',$fasil->id) }}" method="POST" enctype="multipart/form-data"> 

        @csrf

        @method('PUT')

     

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Name:</strong>

                    <input type="text" name="name" value="{{ $fasil->name }}" class="form-control" placeholder="Name">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Detail:</strong>

                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $fasil->detail }}</textarea>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Image:</strong>

                    <input type="file" name="image" class="form-control" placeholder="image">

                    <img src="/image/{{ $fasil->image }}" width="300px">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Category:</strong>
                    <select id="category" name="category">
                        <option value="{{ $fasil->category }}">{{ $fasil->category }}</option>
                        <option value="ATM & Bank">ATM & Bank</option>
                        <option value="Pendidikan">Pendidikan</option>
                        <option value="Penginapan">Penginapan</option>
                        <option value="Rumah Sakit & Klinik">Rumah Sakit & Klinik</option>
                        <option value="SPBU">SPBU</option>
                        <option value="Transportasi">Transportasi</option>
                    </select>
                  <!--  <input type="text" name="category" value="{{ $fasil->category }}" class="form-control" placeholder="Category">
-->
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Maps:</strong>

                    <input type="text" name="maps" value="{{ $fasil->maps }}" class="form-control" placeholder="Maps">

                </div>

            </div>
            

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

     

    </form>
    </div>
    <br><br><br>
@endsection