<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ __('main.dashboard') }}</h1>
    </div>

    {{-- <canvas class="my-4 chartjs-render-monitor" id="myChart" width="1538" height="649" style="display: block; width: 1538px; height: 649px;"></canvas>
--}}
    <h2>{{ __('main.nir') }}</h2>
    <a class="btn btn-primary" href="{{route("scientific_works.create", ['locale'=>$locale])}}">{{ __('main.nir') }}</a>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{ __('main.summary') }}</th>
                @role('admin')
                <th scope="col">{{ __('main.firstname') }}</th>
                @endrole
                <th scope="col">{{ __('main.published_at') }}</th>
                <th scope="col">{{ __('main.file') }}</th>
                <th scope="col">{{ __('main.actions') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($scientific_work as $tr)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$tr["summary"]}}</td>
                    @role('admin')
                    <td>{{$tr->user->firstname}}</td>
                    @endrole
                    <td>{{$tr["published_at"]}}</td>
                    <td>
                        @foreach($tr->files as $file)
                            {{$file->path}} <br>
                        @endforeach
                    </td>

                    <td>{{link_to(route("scientific_works.edit",
                                    [
                                        "scientific_work"=>$tr->id,
                                        "locale"=>$locale
                                    ],
                                    $tr->id
                                ),
                                __('main.edit')
                                )}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    {{$scientific_work->onEachSide(5)->links()}}

</main>
