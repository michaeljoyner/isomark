@extends('app')

@section('content')
    <div class="container">
        <h1>Isomark Training Courses</h1>
        <div class="row">
            <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Search Courses</h3>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['url' => 'admin/courses/search', 'class' => 'form-horizontal']) !!}
                        <div class="input-group">
                              <input type="text" name="query" class="form-control" placeholder="Search for...">
                              <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Go!</button>
                              </span>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                @include('admin.partials.listcourses')
            </div>
        </div>
    </div>
    @include('auth.partials.deletemodal')
    @include('flash::message')
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