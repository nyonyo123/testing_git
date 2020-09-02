@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Subcategory Edit Form</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<form action="{{route('subcategories.update',$subcategory->id)}}" method="POST" enctype="multipart/form-data">
				@csrf
				@method('PUT')

				<div class="form-group row">
                 <label for="name" class="col-sm-2 col-form-label">Subcategory Name</label>
                 <div class="col-sm-5">
                    <input type="text" name="subcategory" class="form-control" id="" value="{{$subcategory->name}}">
                    </div>
                </div>
            </div>

				<div class="form-group row">
                 <label for="name" class="col-sm-2 col-form-label">Category Name</label>
                 <div class="col-sm-5">
                  <select class="form-control form-control-md" id="inputSubcategory" name="category">
                        <optgroup label="Choose Subcategory">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}"
                            	@if($category->id==$subcategory->category->id)selected
                            	 @endif>{{$category->name}} 
                            </option>
                            @endforeach
                        </optgroup>
                    </select>
                    </div>
                </div>
            </div>
				
				<br>
				<input type="submit" name="create" value="Update" class="btn btn-primary">
			</form>
		</div>
	</div>
</div>
@endsection