@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Brand Edit Form</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<form action="{{route('brands.update',$brand->id)}}" method="POST" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				
           <div class="row">
        		<div class="col-md-4">
        			<label>Name</label>
        			<input type="text" name="name" class="form-control" value="{{$brand->name}}">
        		</div>
        	</div>

				{{-- <div class="form-group row">
					<label for="photo" class="col-sm-2 col-form-label">Photo</label>
					<div class="col-sm-10">
						<input type="file" class="form-control-file" id="photo" name="photo" value="{{$brand->photo}}">
						<img src="{{asset($brand->photo)}}">
						<input type="hidden" name="oldphoto" value="{{$brand->photo}}">
					</div>
				</div> --}}

			<div class="row">
        		<div class="col-md-4">
        			<label>Photo</label>
        			<input type="file" name="photo" class="form-control-file">
                    <img src="{{asset($brand->photo)}}" width=100 height=100 >
                    <input type="hidden" name="oldphoto" value="{{asset($brand->photo)}}">
        		</div>
        	</div>

				<br>
				<input type="submit" name="create" value="Update" class="btn btn-primary">
			</form>
		</div>
	</div>
</div>
@endsection