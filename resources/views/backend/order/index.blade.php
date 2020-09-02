@extends('backendtemplate')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mx-1 mb-0 text-gray-800">Order List</h1>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Voucher No</th>
						<th>User</th>
						<th>Total</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					 @php $i=1; @endphp
					@foreach($orders as $order)
					<tr>
              			<td>{{$i++}}</td>
						<td>{{$order->voucherno}}</td>
						<td>{{$order->user->name}}</td>
						<td>{{$order->total}}</td>
						<td> <a href="{{route('orders.show',$order->id)}}" class="btn btn-info ">Detail</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	
</div>
@endsection