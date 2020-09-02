@extends('frontend.master')
@section('content')

	
	<!-- Subcategory Title -->
	<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Your Shopping Cart </h1>
  		</div>
	</div>
	
	<!-- Content -->
	<div class="container mt-5">
		
		<!-- Shopping Cart Div -->
		<div class="row mt-5 shoppingcart_div">
			<div class="col-12">
				<a href="{{ route('frontend.index') }}" class="btn mainfullbtncolor btn-secondary float-right px-3" > 
					<i class="icofont-shopping-cart"></i>
					Continue Shopping 
				</a>
			</div>
		</div>

		<div class="row mt-5 shoppingcart_div">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th colspan="3"> Product </th>
							<th colspan="3"> Qty </th>
							<th> Price </th>
							<th> Total </th>
						</tr>
					</thead>
					<tbody id="shoppingcart_table">
						
						
					</tbody>
				</table>
			</div>
		</div>

		<!-- No Shopping Cart Div -->
		<div class="row mt-5 noneshoppingcart_div text-center">
			
			
			<div class="col-12 mt-5 ">
				<a href="{{route('shoppingcart')}}" class="btn btn-secondary mainfullbtncolor px-3" > 
					<i class="icofont-shopping-cart"></i>
					Continue Shopping 
				</a>
				<textarea class="form-control notes" id="notes" placeholder="Any Request......."></textarea>
				@role('Customer')
				<a href="#" class="btn btn-info float-right buy_now">Checkout</a>
				@else
				<a href="{{route('login')}}" class="btn btn-info float-right buy_now">Login To Checkout</a>
				@endrole
			</div>

		</div>
		

	</div>
	


	@endsection
	

	

	@section('script')
	<script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>
	@endsection

	