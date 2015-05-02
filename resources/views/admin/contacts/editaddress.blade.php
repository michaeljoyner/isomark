@extends('app')

@section('content')
    <div class="container">
        <h1 class="page-title">Edit Address</h1>
        @include('admin.contacts.forms.address', ['address' => $address, 'url' => '/admin/contacts/address/'.$address->id, 'submitText' => 'Save Changes']);
    </div>
@endsection