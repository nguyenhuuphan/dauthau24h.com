@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">BIDDER DASHBOARD</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    <div class="justify-content-center">

                        <div class="box">
                            <div class="box-body table-responsive no-padding">

                                  <table class="table table-hover">
                                      <th class="text-left">Name</th>
                                      <td>{{ Auth::user()->name }}</td>
                                    </tr>
                                      <th class="text-left">Email</th>
                                      <td>{{ Auth::user()->email }}</td>
                                    </tr>
                                      <th class="text-left">Action</th>
                                      <td>
                                        {{-- <a class="btn btn-primary" href="{{ route('edit_profile') }}"><i class="fa fa-pencil-square-o"></i> Update Profile</a> --}}
                                         | 
                                         <a class="btn btn-success" href="{{ route('create_bid') }}"><i class="fa fa-close"></i> Create Bid Package</a>
                                          | 
                                          <a class="btn btn-primary" href="{{ route('list_bidder_bids')  }}"><i class="fa fa-close"></i> Bid Packages</a>
                                           | 
                                           <a class="btn btn-success" href="{{ route('user_rates') }}"><i class="fa fa-close"></i> Rates</a>
                                      </td>
                                    </tr>
                                  </table>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
