@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Item List</h1>
       <a href="{{route('items.create')}}" class="btn btn-success">Add New</a>
    </div>

</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
				<thead class="bg-dark text-white" >
					<tr>
						<td>No</td>
						<td>Codeno</td>
						<td>Name</td>
						<td>Price</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
					@php $i=1;@endphp
					@foreach($items as $item){{-- $items=compact's name --}}
					<tr>
						<td>{{$i++}}</td>
						<td>{{$item->codeno}}</td>{{-- codeno=item table's column name --}}
						<td>{{$item->name}}</td>
						<td>{{$item->price}}</td>
						<td>
							<a href="#" class="btn btn-info">Detail</a>
							<a href="#" class="btn btn-danger">Delete</a>
							<a href="{{route('items.edit',$item->id)}}" class="btn btn-success">Edit</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
@endsection