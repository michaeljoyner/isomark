@extends('app')

@section('head')
    <style>
        body {
            background-image: url("../../images/cranes.jpg");
            background-size: cover;
        }
    </style>
@endsection

@section('content')
@include('flash::message')
<div class="container">
    <img src="{{ asset('images/isomark2.png') }}" alt="logo"/>
</div>
@endsection

@section('bodyscripts')
    <script>
        $('.alert-info').delay(2000).hide('slow');
    </script>
@endsection
