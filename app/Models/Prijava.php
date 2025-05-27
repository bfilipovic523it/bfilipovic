<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prijava extends Model
{
    //
    protected $fillable = [
        'user_id',
        'obuka_id',
        'ukupna_cena',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function obuka() {
        return $this->belongsTo(Obuka::class, 'obuka_id');
    }
}
