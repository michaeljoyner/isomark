@extends('front.base')

@section('seo')
    @include('front.partials.seotags', [
    'description' => 'We are Isomark, an industry leading Health, Safety and Environment Risk Management firm. Read our vision, mission and find out about our corporate structure',
    'keywords' => 'Isomark, Safety, Health and Evironment, Risk Management',
    'title' => 'About Isomark - a Health, Safety and Environment Risk Management Company'])
    @include('front.partials.ogmeta', [
    'og_title' => 'About Isomark',
    'og_description' => 'We are Isomark, an industry leading Health, Safety and Environment Risk Management firm. Read our vision, mission and find out about our corporate structure',
    'og_url' => Request::url()])
    <link rel="canonical" href="http://isomark.co.za/about"/>
@endsection

@section('content')
    @include('front.partials.pageheader', ['pageTitle' => 'About Us'])
        <p class="about-lead">ISOMARK prides itself on providing the best possible services to our clients, and we also realise that each client has special requirements. Therefore at ISOMARK we do our utmost to identify with your individual needs and address them to your absolute satisfaction</p>
    <section class="section-container about-page-section">
        <h1><span class="section-title">Our Vision</span></h1>
        <p>“To become the most efficient Risk Management Company, which employs people committed to making a difference, enhancing the future of our clients, by achieving excellence in our field. We lead the way with our enthusiasm, optimism, patience, drive and commitment”.</p>
        <p>“In order to attain this vision, we need a means to achieve it; this is encapsulated in our Mission”.</p>
    </section>
    <section class="section-container about-page-section">
        <h1><span class="section-title">Our Mission</span></h1>
        <p>"By identifying and managing the risk we aim to:</p>
        <ul class="accreditations">
            <li>Promote a corporate culture of awareness of the effects the risk may have on the organization.</li>
            <li>Supply the most professional service.</li>
            <li>Continually strive for perfection in all our services.</li>
            <li>Assist the client in providing a safe, healthy working environment for all its employees.</li>
            <li>We are determined not only to compete, but to advance building our market share by offering individuals and companies the best possible service.</li>
        </ul>
        <p>“No matter how worthy one’s Mission and Vision may be it can only be achieved with the right management and dedicated personnel.”</p>
    </section>
    <section class="section-container about-page-section">
        <h1><span class="section-title">Corporate structure</span></h1>
        @include('front.partials.corpstructure')
    </section>
    <section class="section-container about-page-section">
        <h1><span class="section-title">Accreditation</span></h1>
        <p class="hint">Click on the accreditation to view the original certification</p>
        <ul class="accreditations">
            <li><a href="{{ asset('docs/updated/BEE_2015_16.pdf') }}" target="_blank">BEE Level 3 Certificate</a></li>
            <li><a href="{{ asset('docs/updated/HWSETA.pdf') }}" target="_blank">HWSETA Full Accredtitation as an Education and Training Provider</a></li>
            <li><a href="{{ asset('docs/updated/hwsetascope.pdf') }}" target="_blank">Extension of Scope Approval Qual. 74269</a></li>
            <li><a href="{{ asset('docs/updated/TETA.pdf') }}" target="_blank">T.E.T.A Programme Approval</a></li>
            <li><a href="{{ asset('docs/updated/firstaidDOL.pdf') }}" target="_blank">Department of Labor Accreditation as First Aid Training Provider</a></li>
        </ul>
    </section>
    <section class="section-container about-page-section">
        <h1><span class="section-title">Main line of business</span></h1>
        <ul class="accreditations">
            <li>Consulting Services</li>
            <a href="{{ asset('docs/updated/processflow.pdf') }}" target="_blank"><li>Placement Services <span class="hint">(Click to see our process flow)</span></li></a>
            <li>Training and Coordination</li>
        </ul>
    </section>
    @include('front.partials.footer')
@endsection