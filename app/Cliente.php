<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $guarded = [];

    public function propostas()
    {
        return $this->hasMany(Proposta::class);
    }
}

