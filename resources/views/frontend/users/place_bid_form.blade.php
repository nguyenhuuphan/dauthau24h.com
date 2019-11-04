
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Bid For {{$bid->title}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                              <form class="form-horizontal" method="PUT" action="{{ route('store_bid_frontend', $bid->id) }}" >
                                @csrf

                                  <table class="table table-hover">
                                    <tr>
                                      <th class="text-left">Price</th>
                                      <td><input type="number" min="{{ $placeBids[0]['bid_price'] }}" step="{{ $bid->price_step }}" class="form-control" name="bidPrice" id="inputbidPrice" value="{{ $placeBids[0]['bid_price'] }}"></td>
                                      <td><button type="submit" class="btn btn-info pull-right">Bid</button></td>
                                    </tr>
                                  </table>
                              </form>

                </div>
            </div>
        </div>
