<div class="form-group">
    <label class="col-md-3 control-label">Category</label>
    <div class="col-md-9">
        {!! Form::select('course_category_id', $categoryList, $course->category['id'], ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">Name</label>
    <div class="col-md-9">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">Unit Standard ID</label>
    <div class="col-md-9">
        {!! Form::text('usid', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-offset-3 col-md-9 control-label" for="toggle_booking_info">
        <input type="checkbox" name="toggle_booking_info" id="toggle_booking_info" @if($course->mustBeBooked() || old('toggle_booking_info')) {{ 'checked' }} @endif/>
         Course has booking dates
    </label>
</div>

<div id="booking-dates">
    <div class="form-group">
        <label class="col-md-3 control-label">Course Starts</label>
        <div class="col-md-9">
            {!! Form::input('date', 'start_date', $course->bookingDates['start_date'], ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Course Ends</label>
        <div class="col-md-9">
            {!! Form::input('date', 'end_date', $course->bookingDates['end_date'], ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Bookings Open</label>
        <div class="col-md-9">
            {!! Form::input('date', 'open_date', $course->bookingDates['bookings_open'], ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Bookings close</label>
        <div class="col-md-9">
            {!! Form::input('date', 'close_date', $course->bookingDates['bookings_close'], ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">Aim and Objective</label>
    <div class="col-md-9">
        {!! Form::textarea('aim', null, ['class' => 'form-control', 'rows' => '6']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">Certification</label>
    <div class="col-md-9">
        {!! Form::textarea('certification', null, ['class' => 'form-control', 'rows' => '3']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">Course Description</label>
    <div class="col-md-9">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '10']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">Number of people per course</label>
    <div class="col-md-9">
        {!! Form::text('people_per_course', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">Duration of course</label>
    <div class="col-md-9">
        {!! Form::text('duration', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">Venue</label>
    <div class="col-md-9">
        {!! Form::text('venue', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">Fee per person</label>
    <div class="col-md-9">
        {!! Form::text('fee', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-9 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            {{ $submitText }}
        </button>
    </div>
</div>