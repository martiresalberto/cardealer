<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condicion extends Model
{
    protected $table = 'condicions';

    protected $fillable = ['titulo'];


    public function predio()
    {
        return $this->belongsTo('App\Predio');
    }
}
