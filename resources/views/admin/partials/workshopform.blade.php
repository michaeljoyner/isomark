<div class="form-group">
    <label for="name" class="col-md-3 control-label">Workshop:</label>
    <div class="col-md-9">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3" for="duration">Duration:</label>
    <div class="col-md-9">
        {!! Form::text('duration', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="fee">Fee:</label>
    <div class="col-md-9">
        {!! Form::text('fee', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-primary">
            {{ $submitText }}
        </button>
    </div>
</div>