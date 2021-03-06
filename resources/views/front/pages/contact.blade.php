@extends('front.base')

@section('seo')
    @include('front.partials.seotags', [
    'description' => 'Isomark has offices in Pietermaritzburg and in Johannesburg, feel free to contact us or send us a message',
    'keywords' => 'Isomark, Contact, SHEQ, Risk Management',
    'title' => 'Contact Isomark for any of your Health, Safety and Environmental Risk Management Needs'])
    @include('front.partials.ogmeta', [
    'og_title' => 'Contact Isomark for any of your Health, Safety and Environmental Risk Management Needs',
    'og_description' => 'Isomark has offices in Pietermaritzburg and in Johannesburg, feel free to contact us or send us a message',
    'og_url' => Request::url()])
@endsection

@section('head')
    <meta property="CSRF-token" content="{{ Session::token() }}"/>
@endsection

@section('content')
    @include('front.partials.pageheader', ['pageTitle' => 'Contact Us'])
    <section class="front-contact-section section-container">
        <h1><span class="section-title">Our addresses</span></h1>
        <div class="container">
            <div class="row">
                @foreach($addresses as $index =>$address)
                    <div class="col-sm-6">
                        <div class="contact-item">
                            <h4 class="orange-subheading">{{ $address->name }}</h4>
                            <p>{{ $address->line_one }}</p>
                            <p>{{ $address->line_two }}</p>
                            <p>{{ $address->line_three }}</p>
                            <p>{{ $address->line_four }}</p>
                        </div>
                    </div>
                    @if($index > 0 && $index%2 !== 0 && $index !== $addresses->count() - 1)
                        </div><div class="row">
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <section class="front-contact-section section-container">
        <h1><span class="section-title">Contact People and Numbers</span></h1>
        <div class="container">
            <div class="row">
                @foreach($people as $index => $person)
                    <div class="col-sm-6">
                        <div class="contact-item">
                            <h4 class="orange-subheading">{{ $person->name }}</h4>
                            <p>{{ $person->title }}</p>
                            <p><span class="glyphicon glyphicon-phone"></span> {{ $person->phone }}</p>
                            <p><span class="glyphicon glyphicon-envelope"></span>   {{ $person->email }}</p>
                        </div>
                    </div>
                    @if($index > 0 && $index%2 !== 0 && $index !== $people->count() - 1)
                        </div><div class="row">
                    @endif
                @endforeach
            </div>
            <div class="row">
                @foreach($contactNumbers as $index => $number)
                    <div class="col-sm-6">
                        <div class="contact-item">
                            <h4 class="orange-subheading">{{ $number->name }}</h4>
                            <p>
                            @if(str_contains(mb_strtolower($number->name), 'fax'))
                            <span class="glyphicon glyphicon-print"></span>
                            @else
                            <span class="glyphicon glyphicon-earphone"></span>
                            @endif
                             {{ $number->number }}</p>
                        </div>
                    </div>
                    @if($index > 0 && $index%2 !== 0 && $index !== $contactNumbers->count() - 1)
            </div><div class="row">
                @endif
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-container">
        <h1><span class="section-title">Send a message</span></h1>
        @include('front.partials.homecontactform', ['formTitle' => ''])
    </section>

    @include('front.partials.footer')
@endsection

@section('bodyscripts')
    <script>
        contactForm.init();
    </script>
@endsection