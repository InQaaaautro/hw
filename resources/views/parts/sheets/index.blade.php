@extends("layouts.main")

@section("content")
    <div class="container pt-4">
        <ul class="row nav nav-pills mb-3 grade-tabs" id="pills-tab" role="tablist">
            @foreach($sheets as $sheet)
                <li class="col-12 col-md-6 nav-item">
                    <a class="nav-link grade-link"
                       data-toggle="pill"
                       href="#ep{{$sheet['GUID']}}"
                       role="tab"
                       aria-selected="true">
                        {{$sheet['group']}} {{$sheet['discipline']}}
                    </a>
                </li>
            @endforeach
        </ul>
        <hr class="mb-4">
        <div class="tab-content" id="pills-tabContent">
            @foreach($sheets as $sheet)

            <div class="tab-pane fade" id="ep{{$sheet['GUID']}}" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row-fluid">
                    <div class="col-4 col-md-4">
                        <div class="grade-item"><b>Вид контроля:</b> {{$sheet['ControlType']}}</div>
                        <div class="grade-item"><b>Подразделение:</b> {{$sheet['division']}}</div>
                        <div class="grade-item"><b>Профиль/специализация:</b> {{$sheet['profile']}}</div>
                        <div class="grade-item"><b>Курс:</b> {{$sheet['course']}}, {{$sheet['semester']}}</div>
                        <div class="grade-item"><b>Группа:</b> {{$sheet['group']}}</div>
                    </div>
                    <div class="col-4 col-md-4">
                        <div class="grade-item"><b>Дисциплина:</b> {{$sheet['discipline']}}</div>
                        <div class="grade-item"><b>Форма обучения:</b> {{$sheet['formstudy']}}</div>
                        <div class="grade-item"><b>Направление/специальность:</b> {{$sheet['speacility']}}</div>
                        <div class="grade-item"><b>Дата экзамена/зачета:</b> {{$sheet['date']}}</div>
                        <div class="grade-item"><b>Тип ведомости:</b> {{$sheet['type']}}</div>
                        <div class="grade-item"><b>Ведомость:</b> {{$sheet['NameSheet']}}</div>
                    </div>
                    <div class="col-4 col-md-4 ">
                        <button type="button" class="btn btn-primary w-100 g "
                                data-toggle="modal"
                                data-target="#myModal{{$sheet['GUID']}}">
                            Закрыть ведомость
                        </button>
                        <button style='width:100%; font-size:20px;' type='button' class='btn btn-dark p'
                                value='{{$sheet['GUID']}}'>
                            Согласовать
                        </button>

                    </div>
                </div>
                <hr class="mb-4">
                <div class="row-fluid">
                    <div class="col-12">
                       @include('parts.sheets.parts.students-table')
                        <div class="modal" style="position: fixed !important;" id="myModal{{$sheet['GUID']}}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Закрытие ведомости</h4>
                                        <button type="button" class="close" data-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        Вы закрываете ведомость. Вы уверены?
                                    </div>
                                    <div class="modal-footer">
                                        <button value="{{$sheet['GUID']}}" type="button" class="btn btn-success"
                                                data-dismiss="modal">Да
                                        </button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Нет</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
