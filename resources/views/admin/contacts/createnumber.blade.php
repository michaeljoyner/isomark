@extends('app')

@section('content')
    <div class="container">
        <h1 class="page-title">Add a new Contact Number</h1>
        @include('admin.contacts.forms.phonenumber', ['phoneNumber' => $phoneNumber, 'url' => '/admin/contacts/phonenumber', 'submitText' => 'Create']);
    </div>
@endsection