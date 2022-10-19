<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class neighborhood extends Model
{
    // permitindo o uso das vars

    protected $table = 'neighborhood';
    protected $fillable = ['name', 'id_city'];

    // fazendo a ligação das chaves

    public function relCity()
    {
        return $this->hasOne('App\Models\ModelCity', 'id', 'id_city');
    }
}
