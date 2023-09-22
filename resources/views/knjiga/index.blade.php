<h1>Popis knjiga</h1>

<hr>

<table border="1">
    <tr>
        <th>Naslov</th>
        <th>Autor</th>
        <th>Godina izdanja</th>
        <th>__Akcija__</th>
    </tr>
    <tr>
        <td colspan="4"><a href="{{route('knjigas.create')}}">Dodaj novu knjigu</a></td>
    </tr>
    @foreach ($knjigas as $knjiga)
        <tr>
            <td>{{$knjiga->naslov}}</td>
            <td>{{$knjiga->autor}}</td>
            <td>{{$knjiga->god_izd}}</td>
            <td>
                <a href="{{route('knjigas.edit', $knjiga->id)}}">Uredi</a>
                <form action="{{route('knjigas.confirm-delete', $knjiga->id)}}" method="GET">
                    @csrf
                    @method("DELETE")
                    <button type="submit">Obriši</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
