@extends('layouts.master')

@section('title')
    DETAIL BID {{ $bid->title }}
@endsection

@section('content')
    <div class="justify-content-center">

        <div class="box">
            <div class="box-header">
              <h3 class="box-title">DETAIL BID {{ $bid->title }}</h3>
            </div>
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
                      <td><a class="btn btn-primary" href="{{ route('edit_bid', $bid->id) }}"><i class="fa fa-pencil-square-o"></i> Edit</a> | <a class="btn btn-danger" href="{{ route('delete_bid', $bid->id) }}"><i class="fa fa-close"></i> Delete</a></td>
                    </tr>
                  </table>

                @endif

            </div>
        </div>
    </div>
@endsection
