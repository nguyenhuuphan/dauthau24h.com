@extends('layouts.master')

@section('title')
    LIST RATES
@endsection

@section('content')
    <div class="justify-content-center">

		<div class="box">
			<div class="box-header">
			  <h3 class="box-title">List Rates</h3>
			</div>
			<div class="box-body table-responsive no-padding">
				@if($rates)
				  <table class="table table-hover">
				    <tr>
				      <th>ID</th>
				      <th>Target</th>
				      <th>Content</th>
				      <th>Rate</th>
				      <th>Author</th>
				      <th class="text-center">Action</th>
				    </tr>
						@foreach ($rates as $rate)
							<tr>
								<td>{{ $rate->id }}</td>
								<td>{{ $rate->target['name'] }}</td>
								<td>{{ $rate->content }}</td>
								<td>{{ $rate->rating }}</td>
								<td>{{ $rate->author['name'] }}</td>
								<td class="text-center"><a class="btn btn-danger" href="{{ route('delete_rate', $rate->id) }}"><i class="fa fa-close"></i> Delete</a></td>
							</tr>
						@endforeach
				  </table>
				@endif

			    
			</div>
		</div>
    </div>
@endsection
