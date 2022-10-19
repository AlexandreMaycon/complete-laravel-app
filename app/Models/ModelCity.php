<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelCity extends Model
{
    // permitindo o uso das vars

    protected $table = 'city';
    protected $fillable = ['name', 'state', 'foundation_date'];

    // fazendo a ligação das chaves

    public function relCity()
    {
        return $this->hasMany('App\Models\neighborhood', 'id_city');
    }
}
