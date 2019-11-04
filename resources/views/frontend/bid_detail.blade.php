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

                                @if(Auth::check())
                                  @if(Auth::user()->role_id === 2)
                                    <tr>
                                      <th class="text-left">Action</th>
                                      <td><a href="">Rate {{ $bid->user['name'] }}</a></td>
                                    </tr>
                                  @endif
                                @endif
                          </table>

                        @endif

                    </div>



                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">LIST BID</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    <div class="box-body table-responsive no-padding">
                        @if($placeBids)

                            <table class="table table-hover">
                              @php
                                $i = 1;
                              @endphp
                              <tr>
                                <th class="text-center">STT</th>
                                <th class="text-center">ID</th>
                                <th class="text-center">Author</th>
                                <th class="text-center">Bid Price</th>
                                <th class="text-center">Date</th>

                                @if(Auth::check())
                                  @if(Auth::user()->role_id === 3)
                                    <th class="text-center">Action</th>
                                  @endif
                                @endif

                              </tr>
                              @foreach($placeBids as $placeBid)
                                  <tr>
                                    <td class="text-center">{{ $i }}</td>
                                    <td class="text-center">{{ $placeBid->id }}</td>
                                    <td class="text-center">{{ $placeBid->user['name'] }}</td>
                                    <td class="text-center">{{ $placeBid->bid_price }}</td>
                                    <td class="text-center">{{ $placeBid->created_at }}</td>

                                    @if(Auth::check())
                                      @if(Auth::user()->role_id === 3)
                                        <th class="text-center"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#ratingModal">Rating {{ $placeBid->user['name'] }}</button><a href="{{ route('user_rating', $placeBid->author_id) }}">Rate {{ $placeBid->user['name'] }}</a></th>
                                      @endif
                                    @endif
                                  </tr>
                                  @php
                                    $i++;
                                  @endphp
                              @endforeach
                            </table>


                        @endif

                    </div>



                </div>
            </div>
        </div>

      @if(Auth::check())
        @if(Auth::user()->role_id === 2)
          @include('frontend.users.place_bid_form')
        @endif
      @endif
    </div>
</div>




@if(Auth::check())
  @if(Auth::user()->role_id === 2)
      @include('frontend.KH.rate_form')
  @endif
@endif

      <div id="ratingModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Rating {{ $placeBid->user['name'] }}</h4>
            </div>
            <div class="modal-body">
                              <form class="form-horizontal" method="PUT" action="{{ route('user_rating', $placeBid->author_id) }}" >
                                @csrf

                                  <table class="table table-hover">
                                    <tr>
                                      <th class="text-left">Content</th>
                                      <td><textarea class="form-control" name="content" id="inputContent" placeholder="Content"></textarea></td>
                                    </tr>
                                    <tr>
                                      <th class="text-left">Rating</th>
                                      <td>
                                        <div class='rating-stars text-center'>
                                          <ul id='stars'>
                                            <li class='star' title='Poor' data-value='1'>
                                              <i class='fa fa-star fa-fw'></i>
                                            </li>
                                            <li class='star' title='Fair' data-value='2'>
                                              <i class='fa fa-star fa-fw'></i>
                                            </li>
                                            <li class='star' title='Good' data-value='3'>
                                              <i class='fa fa-star fa-fw'></i>
                                            </li>
                                            <li class='star' title='Excellent' data-value='4'>
                                              <i class='fa fa-star fa-fw'></i>
                                            </li>
                                            <li class='star' title='WOW!!!' data-value='5'>
                                              <i class='fa fa-star fa-fw'></i>
                                            </li>
                                          </ul>
                                          <input type="hidden" name="rating">
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td colspan="2" class="text-right"><button type="submit" class="btn btn-info pull-right">Create</button></td>
                                    </tr>
                                  </table>
                              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>


@endsection
