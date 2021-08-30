@extends('kmenus.layout')

     

@section('content')
<br><br>
<div class = "container">

    <div class="row">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit menu</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="/kuliners/{{ $kmenu->kuliner_id}}"> Back</a>

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

    

    <form action="{{ route('kmenus.update',$kmenu->id) }}" method="POST" enctype="multipart/form-data"> 

        @csrf

        @method('PUT')

     

        <input type="hidden" id="kuliner_id" name="kuliner_id" value="{{ $kmenu->kuliner_id}}">
        <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Nama Menu:</strong>

            <input type="text" maxlength="34" name="judul" value="{{ $kmenu->judul}}" class="form-control" placeholder="Name">

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <strong>Harga</strong>
        <div class="input-group">
            <span class="input-group-addon">Rp.</span>
            <input type="number" name="detail" class="form-control" value="{{ $kmenu->detail}}" aria-label="Amount (to the nearest dollar)">
        </div><br>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Foto :</strong>
            <input type="file" name="image"  class="form-control" placeholder="image">

            <img src="/image/{{ $kmenu->image }}" width="75px">

        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-right">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

     

    </form>
    </div>
    <br><br><br>
@endsection