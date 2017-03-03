@extends('app')

<?php $message=Session::get('message') ?>

@section('content')
@if ($message == 'store')
	<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	Product created successfull!!
	</div>
@endif
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Products</div>
        <div class="panel-body">
					<table class="table table-hover">
						<thead>
							<th>Id</th>
							<th>Name</th>
							<th>Price</th>
							<th>Stock</th>
							<th>Options</th>
						</thead>
						@foreach($products as $product)
						<tbody>
							<td>{{$product->id}}</td>
							<td>{{$product->name}}</td>
							<td>{{$product->price}}</td>
							<td>{{$product->stock}}</td>
							<td>{!!link_to_route('product.edit', $title = 'Edit', $parameters = $product->id ,$attributes = ['class'=>'btn btn-primary col-md-12'])!!}</td>
							</tbody>
						@endforeach
					</table>
          <a href="{{ url('/product/create') }}" class="btn btn-success col-md-12">Create a new product</a>
        </div>
			</div>
		</div>
	</div>
</div>
@endsection
