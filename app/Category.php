<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['title','description'];


      public function user()
    {
        return $this->belongsTo('App\User');
    }

     public function cabezals()
    {
        return $this->hasMany('App\Cabezal');
    }

}
