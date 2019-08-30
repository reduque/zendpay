
<table border="1" style="border-collapse: collapse;">
    <thead>
        <tr>
        @foreach (array_keys($labs[0]) as $titulos)
            <th>{{ $titulos }}</th>
        @endforeach
        </tr>
    </thead>
    <tbody>
    @foreach ($labs as $lab)
        <tr>
        @foreach ($lab as $item)
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

