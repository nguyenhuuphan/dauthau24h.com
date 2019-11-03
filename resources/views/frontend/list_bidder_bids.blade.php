@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">LIST BID PACKAGES OF {{ $user->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    

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
		                          <td class="text-center">
		                            @if($bid->status === 1)
		                                <span class="label label-success warning">Approved</span>
		                            @else
		                                <span class="label label-warning">Pending</span>
		                            @endif
		                          </td>
		                          <td class="text-center"><a href="{{ route('detail_bid_frontend', ['bid_id' => $bid->id, 'bidder_id' => $user->id]) }}" class='btn btn-success'><i class='fa fa-list-ul'></i> Detail</a> | <a class="btn btn-primary" href="{{ route('edit_bid_frontend', ['bid_id' => $bid->id, 'bidder_id' => $user->id]) }}"><i class="fa fa-pencil-square-o"></i> Edit</a> | <a class="btn btn-danger" href="{{ route('delete_bid_frontend', ['bid_id' => $bid->id, 'bidder_id' => $user->id]) }}"><i class="fa fa-close"></i> Delete</a></td>
		                        </tr>
		                    @endforeach
		                @endif

		              </table>
		            </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
