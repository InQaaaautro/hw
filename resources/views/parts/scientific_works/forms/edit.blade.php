@include('parts.scientific_works.forms.errors')

@php

@endphp


{{ Form::model($scientific_work, ['url' => route('scientific_works.update', ['scientific_work' => $scientific_work, "locale"=>$locale]), 'method' => 'PUT']) }}
@include('parts.scientific_works.forms.fields')
<div class="form-group">
    {{ Form::submit(trans('messages.edit'), array('class' => 'btn btn-success')) }}
</div>
{{ Form::close() }}
