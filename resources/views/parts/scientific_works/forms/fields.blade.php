<link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
@php

    if (Route::currentRouteName()==='scientific_works.create') {
        $scientific_work = false;
    }


@endphp

<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            {{ Form::label('summary', trans('main.summary')) }}
            {{ Form::text('summary', null, array('class'=>'form-control')) }}
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            {{ Form::label('published_at', trans('main.published_at')) }}
            {{-- {{ Form::text('published_at', null, array('class'=>'form-control')) }}--}}
            {{ Form::text('published_at', null, array('id' => 'datepicker', 'class'=>'form-control') )}}
        </div>
    </div>

    @role('admin')
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            {{ Form::label('user_id', trans('main.user_id')) }}
            {{ Form::select('user_id', $user, $scientific_work ? $scientific_work->user_id : '', array( 'class'=>'form-control'),)}}
        </div>
    </div>
    @endrole
</div>
