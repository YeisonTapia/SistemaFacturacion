@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Invoiced</div>
        <div class="panel-body">




					<div class="panel-body">
				 	 <table class="table table-hover">
				 		 <thead>
				 			 <th>ID</th>
				 			 <th>USER_ID</th>
				 			 <th>DATE</th>
				 			 <th>OPTIONS</th>
				 		 </thead>
				 		 @foreach($invoices as $invoice)
				 		 <tbody>
				 			 <td>{{$invoice->id}}</td>
				 			 <td>{{$invoice->user->name}}</td>
				 			 <td>$ {{$invoice->created_at}}</td>
							 <td>{!!link_to_route('invoice.edit', $title = 'Edit',$attributes = ['class'=>'btn btn-primary col-md-12'])!!}</td>

				 		 </tbody>
				 		 @endforeach
				 	 </table>
				 	</div>






					{!!Form::open(['route'=>'invoice.store', 'method'=>'POST'])!!}
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
					<div class="form-group">{!!form::submit('Create a new Invoiced',['class'=>'btn btn-success col-md-12'])!!}</div>
					{!!Form::close()!!}
        </div>
			</div>
		</div>
	</div>
</div>
@endsection
