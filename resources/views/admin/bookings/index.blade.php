@extends('app')

@section('head')
    <meta property="CSRF-token" content="{{ Session::token() }}"/>
@endsection

@section('content')
    <div class="bookings-container container">
        <a class="prompt-button btn archive-button" href="/admin/bookings/archived">View archives</a>

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
        <div class="alert alert-info error-alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

            <p id="error-notification"></p>
        </div>
    </div>
@endsection

@section('bodyscripts')
    <script>
        enquiryManager.init();
    </script>
@endsection