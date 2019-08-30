
<h1>{{ $titulo }}</h1>
<table border="1" style="border-collapse: collapse;">
    <thead>
        <tr>
        @foreach (array_keys($tests[0]) as $titulos)
            <th>{{ $titulos }}</th>
        @endforeach
        </tr>
    </thead>
    <tbody>
    @foreach ($tests as $test)
        <tr>
        @foreach ($test as $item)
            <td>
            @if(!is_array ($item))
                {{ $item }}
            @else
                @foreach ($item as $lineas)
                    {{ $lineas }}<br>
                @endforeach
            @endif
            </td>
        @endforeach
        </tr>
    @endforeach
    </tbody>
</table>

