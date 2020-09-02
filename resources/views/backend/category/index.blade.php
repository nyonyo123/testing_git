@extends('backendtemplate')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mx-1 mb-0 text-gray-800">Categories List</h1>
			<a href="{{route('categories.create')}}" class="mx-1 btn btn-info">Add New</a>		
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead class="table-dark">
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Photo</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php  $i=1; @endphp
				@foreach($categories as $category)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$category->name}}</td>
					<td>
                        <img src="{{asset($category->photo)}}" width=100 height=100 >
                    </td>
					<td>
						<a href="" class="btn btn-info">Detail</a>
						<a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning">Edit</a>
						<a href="" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection