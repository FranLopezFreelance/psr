<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'level', 'section_id', 'name', 'url', 'html-title', 'description', 'social_desc', 'typeview_id', 'order', 'active'
    ];

    public function childrens(){
      return $this->hasMany('App\Section');
    }

    public function parent(){
        return $this->belongsTo('App\Section', 'section_id');
    }

    public function typeView(){
        return $this->belongsTo('App\Typeview', 'typeview_id');
    }

    public function getSubSections(){
        if($this->childrens->count()){
          return $this->childrens;
        }
    }

}
