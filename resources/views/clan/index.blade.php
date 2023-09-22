<h1>Lista članova</h1>

<ol>
    @foreach ($clans as $clan)
    <li>{{$clan->ime}} {{$clan->prezime}}</li>
    @endforeach
</ol>
<br>

<table border="1">
    @foreach ($clans as $clan)
        <tr>
            <td>{{$clan->ime}}</td>
            <td>{{$clan->prezime}}</td>
            <td>
                <a href="{{route('clans.edit', $clan->id)}}">Uredi</a>
                <form action="{{route('clans.destroy', $clan->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit">Obriši</button>
                </form>
            </td>
        </tr>
    @endforeach
    <tr><a href="{{route('clans.create')}}">Dodaj novog člana</a></tr>
</table>


