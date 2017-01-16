<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function typeView(){
        return $this->belongsTo('App\Typeview', 'typeview_id');
    }

    public function section(){
        return $this->belongsTo('App\Section');
    }

    public function getBreadcrumb(){
      echo "<a href='/".$this->section->parent->url."'>".$this->section->parent->name."</a>
      / <a href='/".$this->section->parent->url."/".$this->section->url."'>".$this->section->name."</a>
      / <a href='/".$this->section->parent->url."/".$this->section->url."/".$this->url."'>".$this->title."</a>";
    }
}
