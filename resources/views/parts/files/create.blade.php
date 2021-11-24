<div class="container">
    @can(\App\Models\File::class, 'edit')
        @include('parts.files.forms.create')
    @else
        @include('parts.files.forms.create')
    @endcan
</div>
