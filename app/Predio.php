<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
    protected $table = 'predios';

    protected $fillable = [
        'titulo', 'usuario', 'precio',
        'modelo', 'km', 'descripcioncompleta',
        'ubicacion', 'image', 'categoria',
        'condicion', 'user_id', 'condicion_id'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function condicion()
    {
        return $this->hasMany('App\Condicion');
    }
}
