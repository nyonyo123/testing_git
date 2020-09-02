@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Category Create Form</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
				@csrf
				
           <div class="row">
               <div class="col-md-4">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                    @error('name')
                    <label class="text-danger">Please Enter Name!</label>
                    @enderror
               </div>
          </div>

          <div class="row">
               <div class="col-md-4">
                    <label>Photo</label>
                    <input type="file" name="photo" class="form-control-file">
                    @error('photo')
                    <label class="text-danger">Please Enter Photo!</label>
                    @enderror
               </div>
          </div>
				<br>
				<input type="submit" name="create" value="Create" class="btn btn-primary">
			</form>
		</div>
	</div>
</div>
@endsection