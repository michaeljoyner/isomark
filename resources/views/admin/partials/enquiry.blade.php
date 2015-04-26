<div class="enquiry-box">
    <header class="clearfix">
        <span class="glyphicon glyphicon-user"></span><span class="contact-person">{{ $enquiry->name }}</span>
        <span class="pull-right"><span class="glyphicon glyphicon-time"></span>{{ $enquiry->created_at->diffForHumans() }}</span>
    <div class="enquiry-details">
        @if($enquiry->company != '')
        <span class="enquiry-detail"><span class="glyphicon glyphicon-home"></span>{{ $enquiry->company }}</span>
        @endif
            <span class="enquiry-detail"><span class="glyphicon glyphicon-envelope"></span>{{ $enquiry->email }}</span>
            <span class="enquiry-detail"><span class="glyphicon glyphicon-phone"></span>{{ $enquiry->phone }}</span>
    </div>
    </header>
    <hr/>
    <div class="enquiry-body">
        <p><strong>Courses: </strong>{{ $enquiry->course_names }}</p>
        <p><strong>Course USIDs: </strong>{{ $enquiry->course_usids }}</p>
        <hr/>
        <p>{{ $enquiry->enquiry }}</p>
    </div>
</div>