@extends('layouts.master')

@section('title')
    ADD USER
@endsection

@section('content')
    <div class="justify-content-center">

        <div class="box box-info">
			<div class="box-header with-border">
			  <h3 class="box-title">Add New User</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form class="form-horizontal" method="PUT" action="{{ route('store_user') }}" >
				@csrf
			  <div class="box-body">
			    <div class="form-group">
			      <label for="inputName" class="col-sm-2 control-label">Name</label>

			      <div class="col-sm-6">
			        <input type="text" class="form-control" name="name" id="inputName" placeholder="Name">
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="inputEmail" class="col-sm-2 control-label">Email</label>

			      <div class="col-sm-6">
			        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="inputPassword" class="col-sm-2 control-label">Password</label>

			      <div class="col-sm-6">
			        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="inputRole" class="col-sm-2 control-label">Role</label>

			      <div class="col-sm-6">
	                  <select class="form-control" id="inputRole" name="role_id">
	                    <option value="1">Admin</option>
	                    <option value="2" selected>Customer</option>
	                    <option value="3">Bidder</option>
	                  </select>
			      </div>
			    </div>
			  </div>
			  <!-- /.box-body -->
			  <div class="box-footer">
			  	<div class="col-sm-8 text-right">
			    <button type="submit" class="btn btn-info pull-right">Create</button></div>
			  </div>
			  <!-- /.box-footer -->
			</form>
        </div>

    </div>
@endsection
