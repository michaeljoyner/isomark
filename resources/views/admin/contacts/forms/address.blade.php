{!! Form::model($address, ['url' => $url, 'class' => 'form-horizontal isomark-form']) !!}
<div class="form-group">
    <label class="control-label col-md-3" for="name">Address name:</label>
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'e.g. Physical Address PMB Office']) !!}
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3" for="address.line_one">Address:</label>
    <div class="col-md-6">
        {!! Form::text('line_one', null, ['class' => 'form-control', 'placeholder' => 'line 1']) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-3 col-md-6">
        {!! Form::text('line_two', null, ['class' => 'form-control', 'placeholder' => 'line 2']) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-3 col-md-6">
        {!! Form::text('line_three', null, ['class' => 'form-control', 'placeholder' => 'line 3']) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-3 col-md-6">
        {!! Form::text('line_four', null, ['class' => 'form-control', 'placeholder' => 'line 4']) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-6 col-md-3">
        <button class="btn prompt-button form-control" type="submit">{{ $submitText }}</button>
    </div>
</div>
{!! Form::close() !!}