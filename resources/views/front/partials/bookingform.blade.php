{!! Form::open(['url' => 'booking', 'class' => 'form-horizontal isomark-form course-booking-form']) !!}
<div class="form-group">
    <label class="col-md-3 control-label" for="name">Your name:</label>
    <div class="col-md-6">
        <input autofocus="true" class="form-control" type="text" name="name" value="{{ Input::old('name') }}"/>
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="company">Company name:</label>
    <div class="col-md-6">
        <input class="form-control" type="text" name="company" value="{{ Input::old('company') }}"/>
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="email">Your email address:</label>
    <div class="col-md-6">
        <input class="form-control" type="email" name="email" value="{{ Input::old('email') }}"/>
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="phone">Phone number:</label>
    <div class="col-md-6">
        <input class="form-control" type="text" name="phone" value="{{ Input::old('phone') }}"/>
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="course_names">Course name(s):</label>
    <div class="col-md-6">
        <input class="form-control" type="text" name="course_names" @if(isset($course_names)) value="{{ ucfirst($course_names) }}" @else value="{{ Input::old('course_names') }}" @endif/>
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="course_usids">Course USID(s):</label>
    <div class="col-md-6">
        <input class="form-control" type="text" name="course_usids" @if(isset($course_usids)) value="{{ $course_usids }}" @else value="{{ Input::old('course_usids') }}" @endif/>
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="enquiry">Enquiry:</label>
    <div class="col-md-6">
        <textarea class="form-control" placeholder="If you have any enquiries or anything to add, please add it here and we would be happy to help" name="enquiry">{{ Input::old('enquiry') }}</textarea>
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-3 col-md-6">
        <button type="submit" class="btn prompt-button form-control">Make Booking Enquiry</button>
    </div>
</div>
{!! Form::close() !!}
