@extends('fasils.layout')

     

@section('content')
<br>

<div class="container">

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Daftar Fasilitas</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-success" href="{{ route('fasils.create') }}"> Tambah Fasilitas</a>

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

    @foreach ($fasils as $fasil)

    <tr>

        <td>{{ ++$i }}</td>

        <td><img src="/image/{{ $fasil->image }}" width="100px"></td>

        <td>{{ $fasil->name }}</td>
		<td><a class="btn btn-info" href="{{ route('fasils.show',$fasil->id) }}">Lihat detail</a> </td>
			
        <td>
		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Hapus</button>
		<a class="btn btn-primary" href="{{ route('fasils.edit',$fasil->id) }}">Edit</a>


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
        			
					<form action="{{ route('fasils.destroy',$fasil->id) }}" method="POST">
                		
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


{!! $fasils->links() !!}



    

@endsection

        
