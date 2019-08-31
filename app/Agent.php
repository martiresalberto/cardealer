<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $table = 'agents';

    protected $fillable = ['name_agente','description','imgAgent','urlFace','urlTwuiter','urlGoogle'];


     public function cabezals()
    {
        return $this->hasMany('App\Cabezal');
    }

}
