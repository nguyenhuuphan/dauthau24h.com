@extends('layouts.master')

@section('title')
    LIST USERS
@endsection

@section('content')
{{-- @dd(Auth::user()) --}}
    <div class="justify-content-center">

		<div class="box">
			<div class="box-header">
			  <h3 class="box-title">List Users</h3>
			  <a href="./users/create" class="btn btn-primary">Add User</a>
			</div>
			<div class="box-body table-responsive no-padding">
			  <table class="table table-hover">
			    <tr>
			      <th>ID</th>
			      <th>Name</th>
			      <th>Email</th>
			      <th>Role</th>
			      <th class="text-center">Status</th>
			      <th class="text-center">Action</th>
			    </tr>

				@if($users)
				    @foreach ($users as $user)
					    <tr>
					      <td>{{ $user->id }}</td>
					      <td>{{ $user->name }}</td>
					      <td>{{ $user->email }}</td>
					      <td class="text-capitalize">{{ $user->role['role_name'] }}</td>
					      <td class="text-center"><span class="label label-{!! ($user->status === 1) ? 'success' : 'warning' !!}">{!! ($user->status === 1) ? 'Approved' : 'Pending' !!}</span></td>
					      <td class="text-center">{!! ($user->role_id === 3) ? "<a href='./users/bids/$user->id' class='btn btn-success'><i class='fa fa-list-ul'></i> Bids</a> | " : "" !!}<a class="btn btn-primary" href="{{ route('edit_user', $user->id) }}"><i class="fa fa-pencil-square-o"></i> Edit</a> | <a class="btn btn-danger" href="{{ route('delete_user', $user->id) }}"><i class="fa fa-close"></i> Delete</a></td>
					    </tr>
				    @endforeach
			    @endif
			    
			  </table>
			</div>
		</div>
    </div>
@endsection
