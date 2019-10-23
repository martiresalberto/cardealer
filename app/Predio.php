<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
    protected $table = 'predios';

    protected $fillable = ['titulo', 'precio', 'modelo', 'km', 'descripcion', 'ubicacion', 'imgTrans', 'user_id', 'category_id', 'condicion_id'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->hasMany('App\Category');
    }

    public function condicions()
    {
        return $this->hasMany('App\Condicion');
    }
}
