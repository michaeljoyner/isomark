@extends('app')

@section('content')
    <div class="container">
        <h1 class="page-title">Add a new Contact Person</h1>
        @include('admin.contacts.forms.person', ['person' => $person, 'url' => '/admin/contacts/person', 'submitText' => 'Create']);
    </div>
@endsection