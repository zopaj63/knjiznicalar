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
        return view("clan.index", compact("clans")); //kreira asocijativni niz
    }

    // metoda za prikaz obrasca za unos novog zapisa
    public function create()
    {
        return view("clan.create");
    }

    // metoda za spremanje zapisa u bazu
    public function store(Request $request)
    {
        $request->validate([
            "ime"=>"required", //ime iz forme iz create.blade.php
            "prezime"=>"required"
        ]);

        Clan::create($request->all());
        return redirect()->route("clans.index")->with("success", "Član je upisan");
    }

    // metoda za prikaz forme za edit, promjenu podatka (jednaka je formi za unos podataka)
    // forma je popunjena podatkom
    public function edit(Clan $clan)
    {
        return view("clan.edit", compact("clan"));
    }

    // metoda za spremanje, update izmijenjenog podatka u bazu (RESTfull arhitektura)
    public function update(Request $request, Clan $clan)
    {
        $clan->update($request->all());
        return redirect()->route("clans.index");
    }

    // metoda za potvrdu brisanja zapisa
    public function confirmDelete(Clan $clan)
    {
        return view('clan.confirm-delete', compact('clan'));
    }

    // metoda za brisanje podatka
    public function destroy(Clan $clan)
    {
        $clan->delete();
        return redirect()->route("clans.index");
    }



}
