@extends('layouts.master')

@section('title')
    EDIT BID {{ $bid->title }}
@endsection

@section('content')
    <div class="justify-content-center">

        <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">EDIT BID {{ $bid->title }}</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal" method="PUT" action="{{ route('update_bid', $bid->id) }}" >
        @csrf
        <div class="box-body">
          <div class="form-group">
            <label for="inputTitle" class="col-sm-2 control-label">Title</label>

            <div class="col-sm-6">
              <input type="text" class="form-control" name="title" id="inputTitle" placeholder="Title" value="{{ $bid->title }}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputContent" class="col-sm-2 control-label">Content</label>

            <div class="col-sm-6">
              <textarea class="form-control" name="content" id="inputContent" placeholder="Content">{{ $bid->content }}</textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="inputlowestPrice" class="col-sm-2 control-label">Lowest Price</label>

            <div class="col-sm-6">
              <input type="number" min="0" step=".01" class="form-control" name="lowestPrice" id="inputlowestPrice" placeholder="Lowest Price" value="{{ $bid->lowest_price }}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputpriceStep" class="col-sm-2 control-label">Price Step</label>

            <div class="col-sm-6">
              <input type="number" min="0" step=".01" class="form-control" name="priceStep" id="inputpriceStep" placeholder="Price Step" value="{{ $bid->price_step }}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputStatus" class="col-sm-2 control-label">Status</label>

            <div class="col-sm-6">
                    <select class="form-control" id="inputStatus" name="status">
                      <option value="1" {{ $bid->status === 1 ? 'selected' : '' }}>Approved</option>
                      <option value="0" {{ $bid->status === 0 ? 'selected' : '' }}>Pending</option>
                    </select>
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
@endsection
