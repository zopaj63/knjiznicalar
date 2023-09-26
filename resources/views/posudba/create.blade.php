<h1>Unos posudbe</h1>

<form action="" method="POST">
    @csrf

    <label>Odabir člana</label>
    <select>

        <option value=""></option>
    
    </select>


    <label>Odabir knjige</label>
    <select>

        <option value=""></option>
    
    </select>

    <br><br>
    <label>Datum posudbe</label>
    <input type="text" name="datum_posudbe"><br><br>
    <label>Datum povrata</label>
    <input type="text" name="datum_povrata"><br><br>

    <button type="submit">Dodaj novu posudbu</button>

</form>