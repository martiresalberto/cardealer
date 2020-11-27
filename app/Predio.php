<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
    protected $table = 'predios';

    protected $fillable = ['titulo','precio','km',
    'descripcioncompleta','modelo_id','ubicacion_id','condicion_id',
    'user_id','category_id'];


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
        return $this->belongsTo('App\Condicion');
    }


    public function ubicacion()
    {
        return $this->belongsTo('App\Ubicacion');
    }

    public function modelo()
    {
        return $this->belongsTo('App\Modelo');
    }

    public function files()
    {
        return $this->hasMany('App\File', 'predio_id');
    }

    public function videos()
    {
        return $this->hasOne('App\Video', 'predio_id');
    }

}
