<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condicion extends Model
{
    protected $table = 'condicions';

    protected $fillable = ['titulo', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
