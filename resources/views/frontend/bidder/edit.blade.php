@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">EDIT BID PACKAGE: {{ $bid->title }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    

      <form class="form-horizontal" method="PUT" action="{{ route('update_bid_frontend', $bid->id) }}" >
        @csrf
        <div class="box-body">
          <div class="form-group row">
            <label for="inputTitle" class="col-sm-2 control-label">Title</label>

            <div class="col-sm-6">
              <input type="text" class="form-control" name="title" id="inputTitle" placeholder="Title" value="{{ $bid->title }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputContent" class="col-sm-2 control-label">Content</label>

            <div class="col-sm-6">
              <textarea class="form-control" name="content" id="inputContent" placeholder="Content">{{ $bid->content }}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputlowestPrice" class="col-sm-2 control-label">Lowest Price</label>

            <div class="col-sm-6">
              <input type="number" min="0" step=".01" class="form-control" name="lowestPrice" id="inputlowestPrice" placeholder="Lowest Price" value="{{ $bid->lowest_price }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputpriceStep" class="col-sm-2 control-label">Price Step</label>

            <div class="col-sm-6">
              <input type="number" min="0" step=".01" class="form-control" name="priceStep" id="inputpriceStep" placeholder="Price Step" value="{{ $bid->price_step }}">
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <div class="col-sm-8 text-right">
          <button type="submit" class="btn btn-info pull-right">Update</button></div>
        </div>
        <!-- /.box-footer -->
      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
