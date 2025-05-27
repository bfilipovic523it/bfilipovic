<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Obuka extends Model
{
    //
    protected $fillable = [
        'kategorija_id',
        'naziv',
        'opis', 
        'cena', 
        'slika', 
        'istaknuta',
    ];

    public function kategorija() {
        return $this->belongsTo(Kategorija::class);
    }
}
