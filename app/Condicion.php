<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condicion extends Model
{
    protected $table = 'condicions';

    protected $fillable = ['title', 'description'];

    public function predio()
    {
        return $this->belongsTo('App\Predio');
    }
}
