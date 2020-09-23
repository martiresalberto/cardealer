<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
    protected $table = 'predios';

    protected $fillable = [
        'titulo', 'usuario', 'precio',
        'modelo', 'km', 'descripcioncompleta',
        'ubicacion', 'condicion', 'user_id',
        'category_id'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_id');
    }

    public function condicion()
    {
        return $this->belongsTo('App\Condicion');
    }

    public function files()
    {
        return $this->hasMany('App\File', 'predio_id');
    }
}
