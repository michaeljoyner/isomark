@extends('app')

@section('content')
    <din class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $user->name }}</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <p class="users-email">{{ $user->email }}</p>
                        <form class="form-horizontal isomark-form" role="form" method="POST" action="/admin/users/changepassword/{{ $user->id }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label">Current Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="current_password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">New Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="newpassword">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="priveleges">Confirm New Password</label>
                                <div class="col-md-6">
                                    <input type="password" name="newpassword_confirmation" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Change Password
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </din>
@endsection