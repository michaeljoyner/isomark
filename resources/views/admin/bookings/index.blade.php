@extends('app')

@section('content')
    <div class="container">
        <h1 class="page-title">Course Booking Enquiries</h1>
        <h2 class="page-subtitle">From the last week or so</h2>
        @if($weeksEnquiries->isEmpty())
            <p>There have been no booking enquiries in the last week or so.</p>
        @endif
        @foreach($weeksEnquiries as $enquiry)
            @include('admin.partials.enquiry', ['enquiry' => $enquiry])
        @endforeach
        <h2 class="page-subtitle">From the last month or so</h2>
        @if($monthsEnquiries->isEmpty())
            <p>There have been no booking enquiries in the last month or so.</p>
        @endif
        @foreach($monthsEnquiries as $enquiry)
            @include('admin.partials.enquiry', ['enquiry' => $enquiry])
        @endforeach
        <h2 class="page-subtitle">Older Booking Enquiries</h2>
        @if($oldEnquiries->isEmpty())
            <p>There are no enquiries to show</p>
        @endif
        @foreach($oldEnquiries as $enquiry)
            @include('admin.partials.enquiry', ['enquiry' => $enquiry])
        @endforeach
    </div>
@endsection