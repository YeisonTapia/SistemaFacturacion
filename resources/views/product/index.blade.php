@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Products</div>
        <div class="panel-body">
          <a href="{{ url('/product/create') }}" class="btn btn-primary">Create a new product</a>
        </div>
			</div>
		</div>
	</div>
</div>
@endsection
