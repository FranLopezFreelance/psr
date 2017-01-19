<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Content extends Model
{
    protected $dates = ['created_at', 'updated_at', 'date'];

    public function typeView(){
        return $this->belongsTo('App\Typeview', 'typeview_id');
    }

    public function section(){
        return $this->belongsTo('App\Section');
    }

    public function getViewsAttribute($value){
      $r = rand ( 500 ,  10000 );
      return number_format($r,0,',','.');
    }

    public function renderDate(){
      setlocale(LC_TIME, 'Spanish');
      $param = '%A %d %B';
      return Carbon::parse($this->date)->formatLocalized($param);
    }

    public function getFullUrl(){
      $url = '/';
      if($this->section->parent())$url.=$this->section->parent->url.'/';
      $url.=$this->section->url.'/';
      $url.=$this->url;
      return $url;
    }

    public function getBreadcrumb(){
      echo "<a href='/".$this->section->parent->url."'>".$this->section->parent->name."</a>
      / <a href='/".$this->section->parent->url."/".$this->section->url."'>".$this->section->name."</a>
      / <a href='/".$this->section->parent->url."/".$this->section->url."/".$this->url."'>".$this->title."</a>";
    }
}
