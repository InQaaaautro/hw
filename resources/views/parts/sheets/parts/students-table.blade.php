<table class="grade-table w-100">
    <thead>
    <tr>
        <th class="header c0" scope="col">ФИО студента</th>
        <th class="header c1" scope="col">Зачетная книга</th>
        <th class="header c2" scope="col">Отметка</th>
        <th class="header c3 lastcol" scope="col">Поставил отметку</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($sheet['students'] as $student)
        <tr>
            <td class="cell c0">
                {{$student['FIO']}}
            </td>
            <td class="cell c1">{{$student['gradebook']}}</td>
            <td class="cell c2">
                @include('parts.sheets.parts.select-grades')
            </td>
            <td class="cell c3 lastcol">
                <i>
                    {{$student['teach_fio']}}
                </i>
            </td>
        </tr>
    @endforeach
    </tbody>

</table>
