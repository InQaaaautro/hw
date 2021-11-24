@extends("layouts.main")
@section("content")
    <div class="container">
        @can(\App\Models\File::class, 'edit')
            @include('parts.scientific_works.forms.edit')
        @else
            @include('parts.scientific_works.forms.edit')
        @endcan
    </div>
@endsection
