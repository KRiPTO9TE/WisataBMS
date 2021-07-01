@extends('wisatas.layout')

     

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Laravel 8 CRUD with Image Upload Example from scratch - ItSolutionStuff.com</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('wisatas.create') }}"> Create New Wisata</a>

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
            
            <th>Category</th>

            <th>Maps</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($wisatas as $wisata)

        <tr>

            <td>{{ ++$i }}</td>

            <td><img src="/image/{{ $wisata->image }}" width="100px"></td>

            <td>{{ $wisata->name }}</td>

            <td>{{ $wisata->detail }}</td>

            <td>{{ $wisata->category }}</td>

            <td>{{ $wisata->maps }}</td>

            <td>

                <form action="{{ route('wisatas.destroy',$wisata->id) }}" method="POST">

     

                    <a class="btn btn-info" href="{{ route('wisatas.show',$wisata->id) }}">Show</a>

      

                    <a class="btn btn-primary" href="{{ route('wisatas.edit',$wisata->id) }}">Edit</a>

     

                    @csrf

                    @method('DELETE')

        

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

    

    {!! $wisatas->links() !!}

        

@endsection