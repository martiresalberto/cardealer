<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['title', 'user_id'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function predios()
    {
        return $this->hasOne('App\Predio','category_id');
    }
}
