{!! Form::model($person, ['url' => $url, 'class' => 'form-horizontal isomark-form']) !!}
<div class="form-group">
    <label class="control-label col-md-3" for="name">Name:</label>
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3" for="address.line_one">Title:</label>
    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3" for="address.line_two">Phone number:</label>
    <div class="col-md-6">
        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3" for="address.city">Email:</label>
    <div class="col-md-6">
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-6 col-md-3">
        <button class="btn prompt-button form-control" type="submit">{{ $submitText }}</button>
    </div>
</div>
{!! Form::close() !!}