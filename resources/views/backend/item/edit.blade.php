@extends('backendtemplate')
@section('content')
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Item Edit Form</h1>
        </div>
        <form action="{{route('items.update',$item->id)}}" method="post" enctype="multipart/form-data">
        	@csrf
            @method('PUT')
        	<div class="row">
        		<div class="col-md-4">
        			<label>Code No</label>
        			<input type="text" name="codeno" class="form-control" value="{{$item->codeno}}" readonly="readonly">
        		</div>
        	</div>

        	<div class="row">
        		<div class="col-md-4">
        			<label>Name</label>
        			<input type="text" name="name" class="form-control" value="{{$item->name}}">
        		</div>
        	</div>

        	<div class="row">
        		<div class="col-md-4">
        			<label>Photo</label>
        			<input type="file" name="photo" class="form-control-file">
                    <img src="{{asset($item->photo)}}" width=100 height=100 >
                    <input type="hidden" name="oldphoto" value="{{asset($item->photo)}}">
        		</div>
        	</div>

        	<div class="row">
        		<div class="col-md-4">
        			<label>price</label>
        			<input type="text" name="price" class="form-control" value="{{$item->price}}">
        		</div>
        	</div>

        	<div class="row">
        		<div class="col-md-4">
        			<label>Discount</label>
        			<input type="text" name="discount" class="form-control" value="{{$item->discount}}">
        		</div>
        	</div>

        	<div class="row">
        		<div class="col-md-4">
        			<label>Description</label>
        			<textarea name="description" class="form-control">{{$item->description}}</textarea> 
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
        			<input type="submit" name="btnsubmit" class="btn btn-info" value="Edit">
        		</div>
        	</div>
        </form>

</div>

 @endsection

