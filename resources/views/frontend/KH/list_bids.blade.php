@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">LIST BID PACKAGES</div>

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
		                  <th class="text-center">Action</th>
		                </tr>

		                @if($bids)
		                    @foreach ($bids as $bid)
		                        <tr>
		                          <td>{{ $bid->id }}</td>
		                          <td>{{ $bid->title }}</td>
		                          <td>{{ $bid->user['name'] }}</td>
		                          <td class="text-center"><a href="{{ route('KH_detail_bid_frontend', $bid->id) }}" class='btn btn-success'><i class='fa fa-list-ul'></i> Detail</a></td>
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
