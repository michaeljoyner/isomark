@extends('app')

@section('content')
    <div class="container">
        <h1 class="page-title">Edit Contact Person's Details</h1>
        @include('admin.contacts.forms.person', ['person' => $person, 'url' => '/admin/contacts/person/'.$person->id, 'submitText' => 'Save changes']);
    </div>
@endsection