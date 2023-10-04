<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
    use HasFactory;

    // definiranje baze i tablice na koju se odnosi model
    protected $connection="mysql";
    protected $table="clans";

    protected $fillable=[
        "ime", 
        "prezime",
        "clanski_broj",
    ];
}
