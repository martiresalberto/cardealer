<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabezal extends Model
{

    protected $table = 'cabezals';

    protected $fillable = ['name_marca','modelo','type_motor','type_camarote','type_caja','type_llantas','type_freno','color','type_ejes','ubication','state_cabezal','price','imgCabezal','user_id','category_id'];


     public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
