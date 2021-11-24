@extends("layouts.main")
@section("content")
    <!-- Page Content-->
    <section class="pt-4">
        <h1>{{ __('main.files') }}</h1>
        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">path</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($files as $file)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$file->path}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </section>
@endsection

