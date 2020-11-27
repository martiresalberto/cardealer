<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['nombre', 'user_id'];


    public function predio()
    {
        return $this->belongsTo('App\Predio');
    }
}
