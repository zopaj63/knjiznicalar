<h1>Potvrda brisanja knjige</h1>
<p>Naziv: {{$knjiga->naslov}}, autor: {{$knjiga->autor}}</p>
<form action="{{route('knjigas.destroy', $knjiga->id)}}" method="POST">
    @csrf
    @method("DELETE")
    <button type="submit">Obriši</button>
</form>


<form action="{{route('knjigas.index')}}" method="GET">
    <button type="submit">Odustani</button>
</form>
