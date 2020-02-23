<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $guarded = [];

    protected $table = 'files';

    protected $fillable = [
        'url', 'predio_id'
    ];


    public function predio()
    {
        return $this->belongsTo('App\Predio', 'predio_id');
    }
}
