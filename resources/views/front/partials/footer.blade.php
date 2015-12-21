<footer class="main-footer">
        <div class="row">
            <div class="col-sm-4 footer-col">
                <h3>contact info</h3>

                <div class="row footer-contacts">
                    @foreach($contactNumbers as $contact)
                        <p class="contact-name">{{ $contact->name }}</p>
                        <p class="contact-number">
                            @if(str_contains(mb_strtolower($contact->name), 'fax'))
                            <span class="glyphicon glyphicon-print"></span>
                            @else
                            <span class="glyphicon glyphicon-earphone"></span>
                            @endif
                            {{ $contact->number }}
                        </p>
                    @endforeach
                </div>
            </div>
            <div class="col-sm-4 footer-col">
                <h3>accreditations</h3>
                <ul class="footer-accreditations">
                    <li><a href="{{ asset('docs/updated/BEE_2015_16.pdf') }}" target="_blank">BEE Level 3 Certificate</a></li>
                    <li><a href="{{ asset('docs/updated/HWSETA.pdf') }}" target="_blank">HWSETA Full Accredtitation as an Education and Training Provider</a></li>
                    <li><a href="{{ asset('docs/updated/hwsetascope.pdf') }}" target="_blank">Extension of Scope Approval Qual. 74269</a></li>
                    <li><a href="{{ asset('docs/updated/TETA.pdf') }}" target="_blank">T.E.T.A Programme Approval</a></li>
                    <li><a href="{{ asset('docs/updated/firstaidDOL.pdf') }}" target="_blank">Department of Labor Accreditation as First Aid Training Provider</a></li>
                </ul>
            </div>
            <div class="col-sm-4 footer-col">
                <h3><a href="/sitemap">site map</a></h3>
                @include('front.partials.sitemap')
            </div>
        </div>
        <div class="footer-signoff">
            <img src="{{ asset("images/footer_logo.png") }}" alt="logo"/><span class="italic">facilitating global standards</span>
        </div>
        <div class="footer-footer">
            <p><span class="copyright">&copy; Copyright 2015 | </span><span class="dymantic"><a href="http://dymanticdesign.com" target="_blank">Dymantic Design</a></span></p>
        </div>
</footer>