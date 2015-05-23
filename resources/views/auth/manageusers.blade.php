@extends('app')

@section('content')
    @include('flash::message')
    <div class="col-md-6">
        <h1 class="page-title">Registered Users</h1>
        @if(Session::has('deleteError'))
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ Session::get('deleteError') }}
            </div>
        @endif
        <ul>
            @foreach($users as $user)
                <div class="isomark-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $user->name }}</h3>
                    </div>
                    <div class="panel-body">
                        <p><strong>Email address: </strong>{{ $user->email }}</p>

                        <p>
                            <strong>Privileges: </strong>
                            @if($user->can_create_user)
                                Full
                            @else
                                Limited
                            @endif
                        </p>
                        <a href="/admin/users/edit/{{ $user->id }}" class="btn prompt-button pull-right edit-button">
                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
                        </a>
                        <button type="button" class="btn btn-danger pull-right" data-usersname="{{ $user->name }}" data-action="/admin/users/{{ $user->id }}" data-toggle="modal" data-target="#confirm-delete-modal">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
                        </button>
                    </div>
                </div>
            @endforeach
        </ul>
    </div>
    <div class="col-md-6">
        @include('auth.partials.registerform')
    </div>
    @include('auth.partials.deletemodal')
@endsection

@section('bodyscripts')
    <script>
        $('#confirm-delete-modal').on('show.bs.modal', function(e) {
            $(this).find('.delete-form').attr('action', $(e.relatedTarget).data('action'));
            $(this).find('.users-name').html($(e.relatedTarget).data('usersname'));
        });
        $('.alert-info').delay(2000).hide('slow');
    </script>
@endsection