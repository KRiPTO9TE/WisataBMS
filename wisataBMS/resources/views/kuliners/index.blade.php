@extends('kuliners.layout')

     

@section('content')
  
<br><br>
        <div class="container">

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Daftar Kuliner</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-success" href="{{ route('kuliners.create') }}"> Tambah Kuliner</a>

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

    @foreach ($kuliners as $kuliner)

    <tr>

        <td>{{ ++$i }}</td>

        <td><img src="/image/{{ $kuliner->image }}" width="100px"></td>

        <td>{{ $kuliner->name }}</td>
		<td><a class="btn btn-info" href="{{ route('kuliners.show',$kuliner->id) }}">Lihat detail</a> </td>
			
        <td>
		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Hapus</button>
		<a class="btn btn-primary" href="{{ route('kuliners.edit',$kuliner->id) }}">Edit</a>


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
        			
					<form action="{{ route('kuliners.destroy',$kuliner->id) }}" method="POST">
                		
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


{!! $kuliners->links() !!}



    
@endsection


   
	


        

