@extends('front.base')

@section('head')
    <meta property="CSRF-token" content="{{ Session::token() }}"/>
@endsection

@section('content')
    <header>
        @include('front.partials.searchbar')
        @include('front.partials.navbar')
        <div class="homepage-banner">
            <img src="{{ asset('images/isomark_website.png') }}" alt="logo"/>

            <h1 class="tagline">facilitating global standards</h1>
        </div>
    </header>
    <section class="intro">
        <p>Isomark prides itself on providing the best possible services to our clients, and we also realise that each
            client has special requirements. Therefore at Isomark we do our utmost to identify with your individual
            needs and address them to your absolute satisfaction</p>
    </section>
    @include('front.partials.carousel')
    <section class="section-container" id="services">
        @include('front.partials.services')
    </section>
    <section class="section-container" id="courses">
        @include('front.partials.courses')
    </section>
    <section class="section-container" id="clients">
        <h1><span class="section-title">our clients</span></h1>

        <div class="container">
            <div class="row">
                <div class="col-md-3 client-box"></div>
                <div class="col-md-3 client-box"></div>
                <div class="col-md-3 client-box"></div>
                <div class="col-md-3 client-box"></div>
            </div>
        </div>
    </section>
    <section class="section-container" id="contact">
        @include('front.partials.homecontactform')
    </section>
    @include('front.partials.footer')
@endsection

@section('bodyscripts')
    <script>
        $(function () {
            $("#slides").slick({
                accessibility: true,
                autoplay: true,
                autoplaySpeed: 7000,
                arrows: false
            });
            contactForm.init();
        });

        var contactForm = {
            errors: [],
            elems: {
                name: null,
                email: null,
                enquiry: null,
                submitButton: null,
                errorBox: null,
                containerBox: null,
                sendIcon: null,
                sendText: null
            },

            init: function() {
                contactForm.elems.name = document.querySelector('#cp_name');
                contactForm.elems.email = document.querySelector('#cp_email');
                contactForm.elems.enquiry = document.querySelector('#cp_enquiry');
                contactForm.elems.submitButton = document.querySelector('#cp_send');
                contactForm.elems.errorBox = document.querySelector('#error-box')
                contactForm.elems.containerBox = document.querySelector('#contact-form-box');
                contactForm.elems.thanks = document.querySelector('#thanks');
                contactForm.elems.sendIcon = document.querySelector('#send-icon');
                contactForm.elems.sendText = document.querySelector('#send-text');
                contactForm.elems.submitButton.addEventListener('click', contactForm.send, false);
            },

            inputIsValid: function() {
                var elems = contactForm.elems;
                if(elems.name.value == '' || elems.name.value.length > 255) {
                    contactForm.errors.push('Please provide a valid name');
                    return false;
                }
                if(elems.email.value == '' || elems.email.value.length > 255) {
                    contactForm.errors.push('Please provide a valid email address');
                    return false;
                }
                if(elems.enquiry.value == '') {
                    contactForm.errors.push('It looks like you forgot to write your message');
                    return false;
                }
                return true;
            },

            send: function() {
                var elems = contactForm.elems;
                var fd = new FormData();
                var req = new XMLHttpRequest();
                if(! contactForm.inputIsValid()) {
                    contactForm.showErrors();
                    return;
                }
                contactForm.clearErrors();
                elems.sendIcon.className = "glyphicon glyphicon-refresh";
                elems.sendText.innerHTML = "Sending..."
                fd.append('name', elems.name.value);
                fd.append('email', elems.email.value);
                fd.append('enquiry', elems.enquiry.value);
                fd.append('_token', document.querySelector('meta[property=CSRF-token]').getAttribute('content'));
                req.open('POST', '/ajax/contact', true);
                req.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                req.onreadystatechange = function(ev) {
                    if(req.readyState === 4) {
                        if(req.status === 200) {
                            console.log(ev.target.response);
                            contactForm.showSuccess();
                        } else {
                            contactForm.errors.push('Oops, there seems to have been a problem. Please try again');
                            contactForm.showErrors();
                        }
                        elems.sendIcon.className = "glyphicon glyphicon-send";
                        elems.sendText.innerHTML = "Send"
                    }
                }
                req.send(fd);
            },

            showSuccess: function() {
                contactForm.elems.thanks.innerHTML = 'Thanks '+ contactForm.elems.name.value + '! Good to hear from you.';
                contactForm.resetForm();
                contactForm.elems.containerBox.classList.add('used');
            },

            showErrors: function() {
                var i = 0, l = contactForm.errors.length;
                for(i;i<l;i++) {
                    contactForm.elems.errorBox.innerHTML += '<p>'+contactForm.errors[i]+'</p>';
                }
//                contactForm.clearErrors();
            },

            clearErrors: function() {
                contactForm.errors = [];
                contactForm.elems.errorBox.innerHTML = '';
            },

            resetForm: function() {
                var elems = contactForm.elems;
                elems.name.value = '';
                elems.email.value = '';
                elems.enquiry.value = '';
                contactForm.errors = [];
            }
        };
    </script>
@endsection