<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function typeView(){
        return $this->belongsTo('App\Typeview', 'typeview_id');
    }
}
