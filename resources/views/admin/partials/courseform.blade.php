<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="isomark-panel panel panel-default">
            <div class="panel-heading">Course</div>
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
                {!! Form::model($course, ['url' => '/admin/courses', 'class' => 'form-horizontal isomark-form']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>