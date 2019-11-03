@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">RATES</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    

					<div class="box-header">
					  <h3 class="box-title">Rating</h3>
					</div>
		            <div class="box-body table-responsive no-padding">
		              <table class="table table-hover">
					    <tr>
					      <th>ID</th>
					      <th>Content</th>
					      <th>Rate</th>
					      <th>Target</th>
					      <th class="text-center">Action</th>
					    </tr>
		            	@if($rate)
		            		@foreach($rate as $rat)
							    <tr>
							      <td>{{ $rat->id }}</td>
							      <td>{{ $rat->content }}</td>
							      <td>{{ $rat->rating }}</td>
							      <td>{{ $rat->target['name'] }}</td>
							      <td class="text-center"><a class="btn btn-danger" href="{{ route('delete_rate_frontend', $rat->id) }}"><i class="fa fa-close"></i> Delete</a></td>
							    </tr>
		            		@endforeach
		            	@endif


		              </table>
		            </div>
							<div class="box-header">
							  <h3 class="box-title">Rating By</h3>
							</div>
				            <div class="box-body table-responsive no-padding">
				              <table class="table table-hover">
							    <tr>
							      <th>ID</th>
							      <th>Content</th>
							      <th>Rate</th>
							      <th>Author</th>
							      <th class="text-center"></th>
							    </tr>
				            	@if($rateby)
				            		@foreach($rateby as $rat)
									    <tr>
									      <td>{{ $rat->id }}</td>
									      <td>{{ $rat->content }}</td>
									      <td>{{ $rat->rating }}</td>
									      <td>{{ $rat->author['name'] }}</td>
									      <td style="opacity: 0;" class="text-center"><a style="cursor: auto" class="btn btn-danger"><i class="fa fa-close"></i> Delete</a></td>
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
