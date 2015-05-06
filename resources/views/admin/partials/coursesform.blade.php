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
        {!! Form::textarea('description', null, ['class' => 'form-control wysig', 'rows' => '10']) !!}
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
    <label class="col-md-3 control-label">Fee per person</label>
    <div class="col-md-9">
        {!! Form::text('fee', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-3">
        <button type="submit" class="btn prompt-button form-control">
            {{ $submitText }}
        </button>
    </div>
</div>