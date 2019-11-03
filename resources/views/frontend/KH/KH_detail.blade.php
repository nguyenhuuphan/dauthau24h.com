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
                            <tr>
                              <th class="text-left">Title</th>
                              <td>{{ $bid->title }}</td>
                            </tr>
                            <tr>
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
                            <tr>
                              <th class="text-left">Date</th>
                              <td>{{ $bid->created_at }}</td>
                            </tr>
                          </table>

                        @endif

                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
                        @dd(auth()->user())

                        @include('frontend.KH.rate_form')
@endsection
