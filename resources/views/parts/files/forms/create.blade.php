@include('parts.files.forms.errors')
{{ Form::open(['url' => route('files.store')])}}
@include('parts.files.forms.fields')
<div class="form-group">
    {{ Form::submit(trans('main.addFile'), array('class' => 'btn btn-success')) }}
</div>
{{ Form::close() }}
