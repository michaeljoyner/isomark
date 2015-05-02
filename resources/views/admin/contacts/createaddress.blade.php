@extends('app')

@section('content')
    <div class="container">
        <h1 class="page-title">Add a new Address</h1>
        @include('admin.contacts.forms.address', ['address' => $address, 'url' => '/admin/contacts/address', 'submitText' => 'Create']);
    </div>
@endsection