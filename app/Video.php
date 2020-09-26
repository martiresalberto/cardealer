<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    
    protected $table = 'videos';

    protected $fillable = [
        'urlVideo', 'predio_id'
    ];


    public function predio()
    {
        return $this->belongsTo('App\Predio', 'predio_id');
    }

}
