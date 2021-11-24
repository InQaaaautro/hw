<select
    attr-guid-sheet="{{$sheet['GUID']}}"
    attr-guid-student="{{$student['GUID']}}"
    null="es{{$loop->index}}"
    id="selects{{$loop->index}}"
    class="select selectjs select-arrows-blue"
    name="grade"
    value="{{$student['Grade']}}"
>
    @foreach ($sheet['systemgrade'] as $grade)
        <option
            @if($grade['GUID']===$student['Grade'])
            selected="{{$student['GUID']}}"
            @endif
            value="{{$grade['GUID']}}"
        >
            {{$grade['grade']}}
        </option>
    @endforeach

    <option
        @if('00000000-0000-0000-0000-000000000000'===$student['Grade'])
        selected="{{$student['GUID']}}"
        @endif
        value="00000000-0000-0000-0000-000000000000">

    </option>
</select>
