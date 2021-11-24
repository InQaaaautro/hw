@include('parts.scientific_works.forms.errors')
@php

@endphp
{{ Form::open(['url' => route('scientific_works.store', ['locale'=>$locale])])}}
@include('parts.scientific_works.forms.fields')
<div class="form-group">
    {{ Form::submit(trans('main.submit'), array('class' => 'btn btn-success')) }}
</div>
{{ Form::close() }}
