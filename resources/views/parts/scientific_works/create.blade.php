@extends("layouts.main")
@section("content")
<div class="container">
    @can(\App\Models\File::class, 'edit')
        @include('parts.scientific_works.forms.create')
    @else
        @include('parts.scientific_works.forms.create')
    @endcan
</div>
@endsection
