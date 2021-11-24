<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-lg-5">
            <a class="navbar-brand" href="/">{{__("main.profileTitle")}}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                    <li class="nav-item"><a class="nav-link" href="#!">{{__("main.about")}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">{{__("main.contacts")}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="/registration">Регистрация</a></li>
                    <li class="nav-item">

                        <a class="nav-link" href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <!-- Button trigger modal -->
                            {{--   <button type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                   Launch demo modal
                               </button>--}}
                            @php
                                if (\Illuminate\Support\Facades\Auth::check()) {
                                     echo \Illuminate\Support\Facades\Auth::user()->email;
                                 } else {
                                     echo "не залогинен";
                                }
                            @endphp
                            {{-- {{
                                 \Illuminate\Support\Facades\Auth::user()->email
                             }}--}}

                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
