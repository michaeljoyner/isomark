@extends('front.base')

@section('content')
    <header>
        @include('front.partials.searchbar')
        @include('front.partials.navbar')
        <div class="page-title-banner">
            <span>Isomark Services</span>
        </div>
        <div class="container service-container">
            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut commodi eum, expedita explicabo fugiat fugit incidunt iure, laborum laudantium maxime minima nostrum numquam optio praesentium quibusdam ratione vel, voluptatibus!</span><span>Accusamus assumenda aut commodi culpa eligendi, error fuga fugit hic ipsam, iure laboriosam nam neque nulla officiis placeat, possimus qui quisquam quod saepe sit vel velit voluptate voluptatem voluptates voluptatibus?</span><span>Aut autem beatae consectetur deleniti eius enim error explicabo, fugit illum minus possimus quae quaerat quisquam rem sed tenetur voluptate! Earum esse minima recusandae. Aspernatur illum laborum officiis tenetur veniam.</span><span>Distinctio hic impedit optio. Distinctio inventore laborum officiis porro praesentium provident quasi qui quod sint velit? At consectetur id in molestias reiciendis sequi soluta. Accusantium et impedit nesciunt sequi voluptates!</span>
            </p>
        </div>
    </header>
    <div class="service-icon-container">
        <div id="consulting" class="service-icon-box">
            @include('svg.isomark_website-20')
            <h4>Consulting Services</h4>
        </div>
        <div id="placement" class="service-icon-box">
            @include('svg.isomark_website-21')
            <h4>Placement Services</h4>
        </div>
        <div id="training" class="service-icon-box">
            @include('svg.isomark_website-22')
            <h4>Training and Coordination</h4>
        </div>
    </div>
    <div class="service-content-area container">
        <section id="consulting-service">
            <h2 class="service-title">Consulting Services</h2>
            <h3 class="service-section-title">Modular Consulting Option</h3>
            <p>The above option allows an ISOMARK Consultant to implement a Risk Management Program for a pre-determined period, e.g. 6 months or as per client requirements. Should a client wish to ensure legal compliance with the OHS Act only or implement a total Risk Management program, then the client should choose this option.</p>
            <h3 class="service-section-title">Baseline Assessments/Gap Assessments</h3>
            <p>Assessments can be conducted to assess the compliance level of existing Safety, Health and Environment System, be it an ISO System or any other. All Safety, Health and Environment aspects will be assessed according to the Occupational Health and Safety Act 85 of 1993 or company legal register. A detailed report will be supplied to Senior Management detailing improvement and corrective recommendations.</p>
            <button class="btn prompt-button service-clear-button">Clear</button>
        </section>
        <section id="placement-service">
            <h2 class="service-title">Placement Options</h2>
            <h3 class="service-section-title">SHE Risk Management Consulting & Placements</h3>
            <p>Isomark is a specialized SHEQ Management company; we ensure full compliance with the Occupational Health and Safety Act 85 of 1993.
                Isomark will also assist the client in achieving compliance with the NOSA Integrated System and ISO 14001/18001 Systems.  Isomark has developed a bullet proof Integrated Management system that satisfies both the local OHS Act requirements as well as the ISO requirements. Isomark has devised unique methods of assisting our clients to achieve these objectives:</p>
            <h3 class="service-section-title">Safety Officer Placement</h3>
            <p>ISOMARK is able to place one of our qualified Consultants on your site to manage your entire SHEQ Programme. This can be done on a short term contract or long term contract, depending on need. Some of the duties will include:</p>
            <ul>
                <li>Implementation/Monitoring of the Integrated SHE system</li>
                <li>Behavioral based safety</li>
                <li>Internal /External audits (ISO 14001/OHSAS 18001)</li>
                <li>Measurement and statistics</li>
                <li>Management of all relevant standards and procedures</li>
                <li>Total SHE risk assessments if none on site</li>
                <li>Standard operating procedures.</li>
                <li>SHE awareness programs.</li>
                <li>Attendance at SHE committee meetings.</li>
                <li>Assembling/management of your legal appointment file</li>
                <li>Bi-annual internal audits.</li>
                <li>Controlling all contractors on site as per standard. Making sure that they comply as to  divert some of the responsibilities from Site management (inductions, Sec 37(2) agreements etc)</li>
                <li>Drawing up, training and practicing of emergency evacuation procedures.</li>
                <li>Full baseline audit of premises and systems on activation of contract as to determine where the site is on legal compliance with a full report on the way forward within one month of the start of the contract.</li>
                <li>Safety induction on all employees and contractors.</li>
                <li>Drafting of induction programs.</li>
                <li>Drawing up of SHE policies if necessary</li>
                <li>Managing all legal inspection registers</li>
                <li>Waste management/control and co-ordination</li>
                <li>Incident investigation and management.</li>
            </ul>
            <p>ISOMARK will manage and monitor the functions with our Consultant to ensure all duties are being completed. Our Management team will also be in attendance at Certification Audits if necessary.</p>
            <h3 class="service-section-title">Facilitator/Assessor Placement</h3>
            <p>We will place one of our Facilitators on site to be based at your premises.
                His primary function will be to provide SHE training services to your site, on an ongoing basis.</p>
            <p>Our placement will receive continuous back up from our Management team. Our Management team will also be in attendance during any Internal/External audit process to ensure training compliance. The placement will also avail himself to all the knowledge and resources available within the ISOMARK group.</p>
            <h4>Training Function</h4>
            <p>A Training Matrix/Schedule will be drafted to ensure all areas and risk activities are adequately addressed.  Services include:</p>
            <ul>
                <li>Conduct all SHE related training as prescribed, including Lifting Equipment</li>
                <li>Build a database of training done and to be done.</li>
                <li>Assist with co–ordination of training and conduct</li>
                <li>Ensure all ISOMARK training material is available to be printed on site, for identified courses</li>
                <li>Ensure all training is risk/site specific as possible. Adapt manuals accordingly</li>
                <li>Ensure all records are maintained for SETA purposes</li>
                <li>Ensure all relevant documentation is sent through to ISOMARK Offices for Certification</li>
                <li>Assist site with SHE SOP, induction and non-certified training as required</li>
                <li>Liaison with ISOMARK regarding new training material, if required</li>
                <li>Collection of certificates from ISOMARK Offices and maintain copies/records on site</li>
            </ul>
            <button class="btn prompt-button service-clear-button">Clear</button>
        </section>
        <section id="training-services">
            <h2 class="service-title">Training and Coordination</h2>
            <p>ISOMARK is able to supply training on a number of Safety courses to suit your needs. We will evaluate your site risks and conduct site -specific training at your premises. ISOMARK offers co-ordination of all client safety training needs as well as tailored courses/workshops. Site specific training on procedures that are linked to our courses is recommended so as to ensure greater understanding of roles and responsibility post training.
                We also offer a placement function of one of our qualified Facilitators on site to facilitate all SHEQ related training on an ongoing basis as a set monthly fee, irrespective of amount of training conducted each month.</p>
            <button class="btn prompt-button service-clear-button">Clear</button>
        </section>
    </div>

    @include('front.partials.footer')
@endsection

@section('bodyscripts')
    <script>
        var serviceManager = {
            elems: {
                consulting: null,
                placement: null,
                training: null,
                current: null,
                triggers: {
                    consulting: null,
                    placement: null,
                    training: null
                }
            },

            init: function() {
                serviceManager.elems.consulting = document.querySelector('#consulting-service');
                serviceManager.elems.placement = document.querySelector('#placement-service');
                serviceManager.elems.training = document.querySelector('#training-services');
                serviceManager.elems.triggers.consulting = document.querySelector('#consulting');
                serviceManager.elems.triggers.placement = document.querySelector('#placement');
                serviceManager.elems.triggers.training = document.querySelector('#training');

                serviceManager.attachListeners();
            },

            attachListeners: function() {
                var elems = document.querySelectorAll(".service-icon-box");
                var btns = document.querySelectorAll(".service-clear-button");
                var j = 0, k = btns.length;
                var i = 0, l = elems.length;
                for(i;i<l;i++) {
                    elems[i].addEventListener('click', serviceManager.showService, false);
                }
                for(j;j<k;j++) {
                    btns[j].addEventListener('click', serviceManager.resetAll, false);
                }
            },

            showService: function(ev) {
//                console.log(ev.currentTarget);
                if(serviceManager.elems[ev.currentTarget.id] == serviceManager.elems.current) {
                    return;
                }

                if(serviceManager.elems.triggers.current) {
                    serviceManager.elems.triggers.current.classList.remove('current');
                }
                serviceManager.elems.triggers.current = ev.currentTarget;
                serviceManager.elems.triggers.current.classList.remove('dim');
                serviceManager.elems.triggers.current.classList.add('current');
                for(var el in serviceManager.elems.triggers) {
                    if(serviceManager.elems.triggers.hasOwnProperty(el)) {
                        if(serviceManager.elems.triggers[el] !== serviceManager.elems.triggers.current) {
                            serviceManager.elems.triggers[el].classList.add("dim");
                            console.log(el);
                        }
                    }
                }
                var selection = ev.currentTarget.id;
                if(serviceManager.elems.current) {
                    $(serviceManager.elems.current).hide();
                }
                var next = serviceManager.elems[selection];
                $(next).show('slow');
                serviceManager.elems.current = next;
            },

            resetAll: function() {
                var key;
                var triggers = serviceManager.elems.triggers;
                for(key in triggers) {
                    if(triggers.hasOwnProperty(key)) {
                        triggers[key].classList.remove('current');
                        triggers[key].classList.remove('dim');
                    }
                }
                triggers.current = null;
                $(serviceManager.elems.current).hide();
            }
        }
        serviceManager.init();
    </script>
@endsection