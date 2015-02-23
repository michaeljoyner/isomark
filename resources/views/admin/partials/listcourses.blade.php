@foreach($courses as $course)
    <div class="panel panel-default">
        <div class="panel-heading">
            <span class="pull-right">{{ $course->usid }}</span>
            <h3 class="panel-title">{{ $course->name }}</h3>
        </div>
        <div class="panel-body">
            {{ $course->aim }}
        </div>
        <div class="panel-footer">
            <button class="btn btn-info">View</button>
            <a href="/admin/courses/edit/{{ $course->id }}" class="btn btn-info">Edit</a>
            <button type="button" class="btn btn-primary pull-right" data-usersname="{{ $course->name }}" data-action="/admin/courses/{{ $course->id }}" data-toggle="modal" data-target="#confirm-delete-modal">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
            </button>
        </div>
    </div>
@endforeach