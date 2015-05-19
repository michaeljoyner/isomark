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
                    <li><a href="{{ asset('docs/BEECERT.pdf') }}" target="_blank">BEE Level 3 Certificate</a></li>
                    <li><a href="{{ asset('docs/hwseta.pdf') }}" target="_blank">HWSETA Full Accredtitation as an Education and Training Provider</a></li>
                    <li><a href="{{ asset('docs/lpr.pdf') }}" target="_blank">T.E.T.A Programme Approval</a></li>
                    <li><a href="{{ asset('docs/teta.pdf') }}" target="_blank">HWSETA Learning Programme Referral</a></li>
                </ul>
            </div>
            <div class="col-sm-4 footer-col">
                <h3>site map</h3>
                <ul class="site-map">
                    <li><a href="/">home</a></li>
                    <li><a href="/about">about</a></li>
                    <li><a href="/services">services</a></li>
                    <li>
                        <a href="/courses/">courses</a>
                        <ul class="course-category-map">
                        @foreach($categoryList as $slug => $category)
                            <li><a href="/courses/{{ $slug }}">{{ $category }}</a></li>
                        @endforeach
                            <li><a href="/workshops">workshops</a></li>
                        </ul>
                    </li>
                    <li><a href="/bookings/">course bookings</a></li>
                    <li><a href="/contact">contact us</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-signoff">
            <img src="{{ asset("images/footer_logo.png") }}" alt="logo"/><span class="italic">facilitating global standards</span>
        </div>
        <div class="footer-footer">
            <p><span class="copyright">&copy; Copyright 2015 | </span><span class="dymantic"><a href="http://dymanticdesign.com" target="_blank">Dymantic Design</a></span></p>
        </div>
</footer>