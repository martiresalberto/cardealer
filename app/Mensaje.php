<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Mensaje extends Model
{


    use Notifiable;

    protected $guarded = ['id'];


    public function sender()
    {
       return $this->belongsTo(User::class, 'sender_id');
    }


}
