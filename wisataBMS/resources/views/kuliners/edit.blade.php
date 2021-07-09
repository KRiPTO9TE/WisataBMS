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

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Image:</strong>

                    <input type="file" name="image" class="form-control" placeholder="image">

                    <img src="/image/{{ $kuliner->image }}" width="300px">

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
                    </select>

                   <!-- <input type="text" name="category" value="{{ $kuliner->category }}" class="form-control" placeholder="Category">
-->
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Maps:</strong>

                    <input type="text" name="maps" value="{{ $kuliner->maps }}" class="form-control" placeholder="Maps">

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