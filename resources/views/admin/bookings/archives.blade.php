@extends('app')

@section('content')
    <div class="container">
        <h1 class="page-title">Archived Enquiries</h1>
        @foreach($enquiries as $enquiry)
            @include('admin.partials.enquiry', ['enquiry' => $enquiry])
        @endforeach
    </div>
@endsection