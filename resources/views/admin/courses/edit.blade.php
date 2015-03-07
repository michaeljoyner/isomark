@extends('app')

@section('content')
    <h1>Edit a Course</h1>
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
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
                {!! Form::model($course, ['url' => ['/admin/courses/edit', $course->id], 'class' => 'form-horizontal']) !!}
                    <input type="hidden" name="id" value="{{ $course->id }}"/>
                    @include('admin.partials.coursesform', ['submitText' => 'Save changes'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div>
@endsection

@section('bodyscripts')
<script>
        var bookingManager = {
            switcher: document.querySelector('#toggle_booking_info'),

            toggle: function() {
                if(bookingManager.switcher.checked) {
                    $('#booking-dates').show('slow');
                } else {
                    $('#booking-dates').hide('slow');
                }
            }
        }
        bookingManager.toggle();
        $('#toggle_booking_info').on('change', function() {
           bookingManager.toggle();
        });
    </script>
@endsection