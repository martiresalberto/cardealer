<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
     protected $table = 'predios';

    protected $fillable = ['categoria','usuario','titulo','precio','modelo','km','descripcion','estado','ubicacion','condicion','imgTrans','user_id','category_id'];


     public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
