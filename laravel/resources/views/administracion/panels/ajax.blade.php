@foreach($exams as $exam)
@if (!$exam->relacionado)
<tr>
    <td>
        <a href="{{ route('related_marcar',['id'=>codifica($exam->id),'accion'=>1]) }}"><i class="fa fa-square"></i></a>
    </td>
    <td>{{ $exam->name }}</td>
    <td>{{ $exam->full_name }}</td>
    <td>{{ $exam->quest_code }}</td>
</tr>
@endif
@endforeach
