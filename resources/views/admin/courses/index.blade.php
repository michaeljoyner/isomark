@extends('app')

@section('content')
    <div class="container">
    @include('admin.partials.listcourses')
    </div>
    @include('flash::message')
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