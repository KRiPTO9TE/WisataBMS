@extends('wisatas.layout')

   

@section('content')
<div class="container">


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Detail Wisata</h2>

            </div>

            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('wisatas.edit',$wisata->id) }}"> Edit</a>
                <a class="btn btn-primary" href="{{ route('wisatas.index') }}"> Back</a>
            </div>

        </div>

    </div>

     

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                <h3>{{ $wisata->name }}</h3>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Details:</strong>
                <p>{{ $wisata->detail }}</p>

                

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Image:</strong>

                <p><img src="/image/{{ $wisata->image }}" width="500px"></p>

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Category:</strong>

                {{ $wisata->category }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Map:</strong>
                <p>{{ $wisata->maps }}</p>
                

            </div>

        </div>

    </div></div>

@endsection