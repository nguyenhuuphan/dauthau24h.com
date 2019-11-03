@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Bid For Bidder {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    <div class="justify-content-center">

                        <div class="box">
                            <div class="box-body table-responsive no-padding">
                              <form class="form-horizontal" method="PUT" action="{{ route('store_bid') }}" >
                                @csrf

                                  <table class="table table-hover">
                                    <tr>
                                      <th class="text-left">Title</th>
                                      <td><input type="text" class="form-control" name="title" id="inputTitle" placeholder="Title"></td>
                                    </tr>
                                    <tr>
                                      <th class="text-left">Content</th>
                                      <td><textarea class="form-control" name="content" id="inputContent" placeholder="Content"></textarea></td>
                                    </tr>
                                    <tr>
                                      <th class="text-left">Min Price</th>
                                      <td><input type="number" min="0" step=".01" class="form-control" name="lowestPrice" id="inputlowestPrice" placeholder="Min Price"></td>
                                    </tr>
                                    <tr>
                                      <th class="text-left">Price Step</th>
                                      <td><input type="number" min="0" step=".01" class="form-control" name="priceStep" id="inputpriceStep" placeholder="Price Step"></td>
                                    </tr>
                                    <tr>
                                      <td colspan="2"><button type="submit" class="btn btn-info pull-right">Create</button></td>
                                    </tr>
                                  </table>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
