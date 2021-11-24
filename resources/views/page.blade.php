@extends("layouts.main")
@section("content")

    @include("parts.greetings")
    <!-- Page Content-->

    <section class="pt-4">
        <div class="container px-lg-5">
            <!-- Page Features-->
            <div class="row gx-lg-5">
                @include("parts.possibilities")
                @include("parts.users.sheets")
            </div>
        </div>
    </section>


    @include("parts.modal")

@endsection
