<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posudba;

class PosudbaController extends Controller
{
       // metoda za čitanje podataka iz baze
       public function index()
       {
           $posudbas=Posudba::all();
           return view("posudba.index", compact("posudbas"));
       }
   
       // metoda za prikaz obrasca za unos novog zapisa
       public function create()
       {
           return view("posudba.create");
       }

        // metoda za spremanje zapisa u bazu
        public function store(Request $request)
        {

            
        }
   
   

    }
