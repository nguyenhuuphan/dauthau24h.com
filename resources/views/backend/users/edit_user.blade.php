@extends('layouts.master')

@section('title')
    EDIT USER
@endsection

@section('content')
    <div class="justify-content-center">

        <div class="box box-info">
			<div class="box-header with-border">
			  <h3 class="box-title">Edit {{ $user->name }}</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form class="form-horizontal" method="PUT" action="{{ route('update_user', $user->id) }}" >
				@csrf
			  <div class="box-body">
			    <div class="form-group">
			      <label for="inputName" class="col-sm-2 control-label">Name</label>

			      <div class="col-sm-6">
			        <input type="text" class="form-control" name="name" id="inputName" placeholder="Name" value="{{ $user->name }}">
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="inputEmail" class="col-sm-2 control-label">Email</label>

			      <div class="col-sm-6">
			        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" value="{{ $user->email }}">
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="inputNewPassword" class="col-sm-2 control-label">New Password</label>

			      <div class="col-sm-6">
			        <input type="password" class="form-control" id="inputNewPassword" name="newpassword" placeholder="New Password">
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="inputRole" class="col-sm-2 control-label">Role</label>

			      <div class="col-sm-6">
	                  <select class="form-control" id="inputRole" name="role_id">
	                    <option value="1" {{ $user->role_id === 1 ? 'selected' : '' }}>Admin</option>
	                    <option value="2" {{ $user->role_id === 2 ? 'selected' : '' }}>Customer</option>
	                    <option value="3" {{ $user->role_id === 3 ? 'selected' : '' }}>Bidder</option>
	                  </select>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="inputStatus" class="col-sm-2 control-label">Status</label>

			      <div class="col-sm-6">
	                  <select class="form-control" id="inputStatus" name="status">
	                    <option value="1" {{ $user->status === 1 ? 'selected' : '' }}>Approved</option>
	                    <option value="0" {{ $user->status === 0 ? 'selected' : '' }}>Pending</option>
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
