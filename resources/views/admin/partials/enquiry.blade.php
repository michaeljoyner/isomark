<div id="enquiry{{ $enquiry->id }}" @if($enquiry->been_read && ! $enquiry->archived)
                                        class="enquiry-box been-read"
                                    @endif
                                    @if($enquiry->archived)
                                        class="enquiry-box archived"
                                    @else
                                        class="enquiry-box"
                                    @endif
        >
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
        @if(! $enquiry->archived)
        <div class="clearfix">
            <button data-enquiry="{{ $enquiry->id }}" class="toggle-read btn btn-xs prompt-button pull-right">
               @if(! $enquiry->been_read) Mark as read @else Unmark as read @endif
            </button>
            <button data-enquiry="{{ $enquiry->id }}" class="archive btn btn-xs btn-danger pull-right">Archive</button>
        </div>
        @endif
    </header>
    <div class="enquiry-body">
        <p><strong>Courses: </strong>{{ $enquiry->course_names }}</p>
        <p><strong>Course USIDs: </strong>{{ $enquiry->course_usids }}</p>
        <p>{{ $enquiry->enquiry }}</p>
    </div>
</div>