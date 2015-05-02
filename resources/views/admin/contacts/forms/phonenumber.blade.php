{!! Form::model($phoneNumber, ['url' => $url, 'class' => 'form-horizontal isomark-form']) !!}
<div class="form-group">
    <label class="control-label col-md-3" for="name">Name:</label>
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'e.g. Pitermaritzburg Fax']) !!}
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3" for="address.line_one">Number:</label>
    <div class="col-md-6">
        {!! Form::text('number', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-6 col-md-3">
        <button class="btn prompt-button form-control" type="submit">{{ $submitText }}</button>
    </div>
</div>
{!! Form::close() !!}