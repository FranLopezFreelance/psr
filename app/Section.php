<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'level', 'section_id', 'name', 'url', 'topnav', 'topnav_back', 'html-title', 'description', 'social_desc', 'typeview_id', 'order', 'active'
    ];

    public function childrens(){
      return $this->hasMany('App\Section', 'section_id');
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

    public function contents(){
      return $this->hasMany('App\Content');
    }

}
