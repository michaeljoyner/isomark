@extends('app')

@section('content')
    <h1 class="page-title">Isomark Workshops</h1>
    <div class="container">
        <table class="workshop-list-table">
            <thead>
                <tr class="table-header">
                    <td>Workshop</td>
                    <td>Duration</td>
                    <td>Cost</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($workshops as $workshop)
                    <tr>
                        <td>{{ $workshop->name }}</td>
                        <td>{{ $workshop->duration }}</td>
                        <td>{{ $workshop->fee }}</td>
                        <td class="action-center">
                            <a href="/admin/workshops/edit/{{ $workshop->id }}" class="btn btn-info btn-xs">Edit</a>
                            <button type="button" class="btn btn-danger btn-xs" data-usersname="{{ $workshop->name }}" data-action="/admin/workshops/{{ $workshop->id }}" data-toggle="modal" data-target="#confirm-delete-modal">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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