<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clan;

class ClanController extends Controller
{
    // metoda za čitanje podataka iz baze
    public function index()
    {
        $clans=Clan::all();
        return view("clans.index", compact("clans")); //kreira asocijativni niz
    }

    // metoda za prikaz obrasca za unos novog zapisa
    public function create()
    {
        return view("clans.create");
    }

    // metoda za spremanje zapisa u bazu
    public function store(Request $request)
    {
        $request->validate([
            "ime"=>"required", //ime iz forme iz create.blade.php
            "prezime"=>"required",
            "clanski_broj"=>"required|unique:clans",
        ]);

        Clan::create($request->all());
        return redirect()->route("clans.index")->with("success", "Član je uspješno upisan");
    }

    // prikaz pojedinačnog člana
    public function show(Clan $clan)
    {
        return view("clans.show", compact("clan"));
    }

    // metoda za prikaz forme za edit, promjenu podatka (jednaka je formi za unos podataka)
    // forma je popunjena podatkom
    public function edit(Clan $clan)
    {
        return view("clans.edit", compact("clan"));
    }

    // metoda za spremanje, update izmijenjenog podatka u bazu (RESTfull arhitektura)
    public function update(Request $request, Clan $clan)
    {
        $request->validate([
            "ime"=>"required",
            "prezime"=>"required",
            "clanski_broj"=>"required|unique:clans",
        ]);

        //ažuriranje
        $clan->update($request->all());
        return redirect()->route("clans.index")->with("success", "Podaci su uspješno izmijenjeni");
    }

    // metoda za potvrdu brisanja zapisa
    public function confirmDelete(Clan $clan)
    {
        return view('clans.confirm-delete', compact('clan'));
    }

    // metoda za brisanje podatka
    public function destroy(Clan $clan)
    {
        $clan->delete();
        return redirect()->route("clans.index")->with("success", "Član je uspješno izbrisan");
    }

}
