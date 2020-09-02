@extends('backendtemplate')
@section('content')
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Item Create Form</h1>
        </div>
        <form action="{{route('items.store')}}" method="post" enctype="multipart/form-data">
        	@csrf
        	<div class="row">
        		<div class="col-md-4">
        			<label>Code No</label>
        			<input type="text" name="codeno" class="form-control">
                    @error('codeno')
                    <label class="text-danger">Please Enter Code Number must be at least 4 numbers!</label>
                    @enderror
        		</div>
        	</div>

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

        	<div class="row">
        		<div class="col-md-4">
        			<label>price</label>
        			<input type="text" name="price" class="form-control">
                    @error('price')
                    <label class="text-danger">Please Enter Price!</label>
                    @enderror
        		</div>
        	</div>

        	<div class="row">
        		<div class="col-md-4">
        			<label>Discount</label>
        			<input type="text" name="discount" class="form-control" value="0">
                    @error('discount')
                    <label class="text-danger">Please Enter Discount!</label>
                    @enderror
        		</div>
        	</div>

        	<div class="row">
        		<div class="col-md-4">
        			<label>Description</label>
        			<textarea name="description" class="form-control"></textarea> 
                    @error('description')
                    <label class="text-danger">Please Enter Description!</label>
                    @enderror
        		</div>
        	</div><br>

                <div class="row">
                <div class="col-md-4">
                    <select class="form-control form-control-md" id="inputBrand" name="brand">
                       <optgroup label="Choose Brand">  

                        @foreach($brands as $brand)
                        <option value="{{$brand->id}}">{{$brand->name}} </option>
                        @endforeach
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <select class="form-control form-control-md" id="inputSubcategory" name="subcategory">
                        <optgroup label="Choose Subcategory">
                            @foreach($subcategories as $subcategory)
                            <option value="{{$subcategory->id}}">{{$subcategory->name}} 
                            </option>
                            @endforeach
                        </optgroup>
                    </select>
                </div>
            </div>

        	<div class="row">
        		<div class="col-md-4">
        			<input type="submit" name="btnsubmit" class="btn btn-info" value="Create">
        		</div>
        	</div>
        </form>

</div>

 @endsection

