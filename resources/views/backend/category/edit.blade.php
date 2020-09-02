@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Category Edit Form</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<form action="{{route('categories.update',$category->id)}}" method="POST" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				

				<div class="row">
        		<div class="col-md-4">
        			<label>Name</label>
        			<input type="text" name="name" class="form-control" value="{{$category->name}}">
        		</div>
        	</div>

			<div class="row">
        		<div class="col-md-4">
        			<label>Photo</label>
        			<input type="file" name="photo" class="form-control-file">
                    <img src="{{asset($category->photo)}}" width=100 height=100 >
                    <input type="hidden" name="oldphoto" value="{{asset($category->photo)}}">
        		</div>
        	</div>
				<br>
				<input type="submit" name="create" value="Update" class="btn btn-primary">
			</form>
		</div>
	</div>
</div>
@endsection