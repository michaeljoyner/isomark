@extends('app')

@section('content')
    <div class="container">
        <h1 class="page-title">Isomark Contact Details</h1>
        <section class="clearfix contacts-section">
            <h2 class="page-subtitle">Addresses</h2>
            <a class="btn prompt-button create-button" href="/admin/contacts/address/create">Add address</a>
            @foreach($addresses as $address)
                <div class="address-box contacts-box">
                    <p class="address-name">{{ $address->name }}</p>
                    <p>{{ $address->line_one }}</p>
                    <p>{{ $address->line_two }}</p>
                    <p>{{ $address->line_three }}</p>
                    <p>{{ $address->line_four }}</p>
                    <a class="btn prompt-button" href="/admin/contacts/address/{{ $address->id }}">Edit</a>
                    <button type="button" class="btn btn-danger" data-usersname="{{ $address->name }}" data-action="/admin/contacts/address/{{ $address->id }}" data-toggle="modal" data-target="#confirm-delete-modal">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
                    </button>
                </div>
            @endforeach
        </section>
        <section class="clearfix contacts-section">
            <h2 class="page-subtitle">Contact People</h2>
            <a class="btn prompt-button create-button" href="/admin/contacts/person/create">Add contact person</a>
        @foreach($people as $person)
                <div class="person-box contacts-box">
                    <p class="person-name">{{ $person->name }}</p>
                    <p class="person-title">{{ $person->title }}</p>
                    <p class="person-phone"><span class="glyphicon glyphicon-phone"></span> {{ $person->phone }}</p>
                    <p class="person-email"><span class="glyphicon glyphicon-envelope"></span> {{ $person->email }}</p>
                    <a class="btn prompt-button" href="/admin/contacts/person/{{ $person->id }}">Edit</a>
                    <button type="button" class="btn btn-danger" data-usersname="{{ $person->name }}" data-action="/admin/contacts/person/{{ $person->id }}" data-toggle="modal" data-target="#confirm-delete-modal">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
                    </button>
                </div>
            @endforeach
        </section>
        <section class="clearfix contacts-section">
            <h2 class="page-subtitle">Contact Numbers</h2>
            <a class="btn prompt-button create-button" href="/admin/contacts/phonenumber/create">Add contact number</a>
            @foreach($phoneNumbers as $number)
                <div class="number-box contacts-box">
                    <p class="number-name">{{ $number->name }}</p>
                    <p class="number-number">{{ $number->number }}</p>
                    <a class="btn prompt-button" href="/admin/contacts/phonenumber/{{ $number->id }}">Edit</a>
                    <button type="button" class="btn btn-danger" data-usersname="{{ $number->name }}" data-action="/admin/contacts/phonenumber/{{ $number->id }}" data-toggle="modal" data-target="#confirm-delete-modal">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
                    </button>
                </div>
            @endforeach
        </section>
        @include('auth.partials.deletemodal')
        @include('flash::message')
    </div>
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