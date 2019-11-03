@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Profile {{ $user->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    <div class="justify-content-center">

                        <div class="box">
                            <div class="box-body table-responsive no-padding">
                              <form class="form-horizontal" method="PUT" action="{{ route('update_profile', $user->id) }}" >
                                @csrf

                                  <table class="table table-hover">
                                    <tr>
                                      <th class="text-left">Name</th>
                                      <td><input type="text" class="form-control" name="name" id="inputName" placeholder="Name" value="{{ $user->name }}"></td>
                                    </tr>
                                    <tr>
                                      <th class="text-left">Email</th>
                                      <td><input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" value="{{ $user->email }}"></td>
                                    </tr>
                                    <tr>
                                      <th class="text-left">New Password</th>
                                      <td><input type="password" class="form-control" id="inputNewPassword" name="newpassword" placeholder="New Password"></td>
                                    </tr>
                                    <tr>
                                      <td colspan="2"><button type="submit" class="btn btn-info pull-right">Update</button></td>
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
