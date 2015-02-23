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

                        <form class="form-horizontal" role="form" method="POST" action="/admin/users/edit/{{ $user->id }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="user_id" value="{{ $user->id }}"/>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="priveleges">Privileges</label>
                                <div class="col-md-6">
                                    <select name="privileges" id="privileges" class="form-control">
                                        <option value="limited" @if(! $user->can_create_user)  selected  @endif>limited - can not create new users</option>
                                        <option value="full" @if($user->can_create_user)  selected  @endif>full - can create new users</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update Info
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