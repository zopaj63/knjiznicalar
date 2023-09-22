<h1>Potvrda brisanja knjige</h1>
<p>Naziv: {{$knjiga->naslov}}, autor: {{$knjiga->autor}}</p>
<form action="{{route('knjigas.destroy', $knjiga->id)}}" method="POST">
    @csrf
    @method("DELETE")
    <button type="submit">Izbriši</button>
    <a href="{{route('knjigas.index')}}">Odustani</a>
</form>