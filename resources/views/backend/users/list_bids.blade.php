@extends('layouts.master')

@section('title')
    LIST BIDS
@endsection

@section('content')
    <div class="justify-content-center">

		<div class="box">
			<div class="box-header">
			  <h3 class="box-title">BIDS OF {{ $user->name }}</h3>
			</div>
			<div class="box-body table-responsive no-padding">
			  <table class="table table-hover">
			    <tr>
			      <th>ID</th>
			      <th>Title</th>
			      <th>Author</th>
			      <th>Date</th>
			      <th class="text-center">Status</th>
			      <th class="text-center">Action</th>
			    </tr>

				@if($bids)
				    @foreach ($bids as $bid)
					    <tr>
					      <td>{{ $bid->id }}</td>
					      <td>{{ $bid->title }}</td>
					      <td>{{ $bid->user['name'] }}</td>
					      <td>{{ $bid->created_at }}</td>
					      <td class="text-center"><span class="label label-{!! ($bid->status === 1) ? 'success' : 'warning' !!}">{!! ($bid->status === 1) ? 'Approved' : 'Pending' !!}</span></td>
					      <td class="text-center"><a href='{{ route('detail_bid', $bid->id) }}' class='btn btn-success'><i class='fa fa-list-ul'></i> Detail</a> | <a class="btn btn-primary" href="{{ route('edit_bid', $bid->id) }}"><i class="fa fa-pencil-square-o"></i> Edit</a> | <a class="btn btn-danger" href="{{ route('delete_bid', $bid->id) }}"><i class="fa fa-close"></i> Delete</a></td>
					    </tr>
				    @endforeach
			    @endif

			  </table>
			</div>
		</div>
    </div>
@endsection
