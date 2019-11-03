@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">DETAIL BID PACKAGE: {{ $bid->title }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    <div class="box-body table-responsive no-padding">
                        @if($bid)

                          <table class="table table-hover">
                            <tr>
                              <th class="text-left">ID</th>
                              <td>{{ $bid->id }}</td>
                            </tr>
                              <th class="text-left">Title</th>
                              <td>{{ $bid->title }}</td>
                            </tr>
                              <th class="text-left">Author</th>
                              <td>{{ $bid->user['name'] }}</td>
                            </tr>
                            <tr>
                              <th class="text-left">Content</th>
                              <td>{{ $bid->content }}</td>
                            </tr>
                            <tr>
                              <th class="text-left">Lowest Price</th>
                              <td>{{ $bid->lowest_price }}</td>
                            </tr>
                            <tr>
                              <th class="text-left">Price Step</th>
                              <td>{{ $bid->price_step }}</td>
                            </tr>
                              <th class="text-left">Date</th>
                              <td>{{ $bid->created_at }}</td>
                            </tr>
                              <th class="text-left">Status</th>
                              <td>
                                    @if($bid->status === 1)
                                        <span class="label label-success warning">Approved</span>
                                    @else
                                        <span class="label label-warning">Pending</span>
                                    @endif
                              </td>
                            </tr>
                              <th class="text-left">Action</th>
                              <td><a class="btn btn-primary" href="{{ route('edit_bid_frontend', ['bid_id' => $bid->id, 'bidder_id' => $user->id]) }}"><i class="fa fa-pencil-square-o"></i> Edit</a> | <a class="btn btn-danger" href="{{ route('delete_bid_frontend', ['bid_id' => $bid->id, 'bidder_id' => $user->id]) }}"><i class="fa fa-close"></i> Delete</a></td>
                            </tr>
                          </table>

                        @endif

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
