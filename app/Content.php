<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Content extends Model
{
    protected $fillable = ['section_id', 'videotype_id', 'url', 'title', 'html_title', 'description', 'social_desc',
    'social_img', 'typeview_id', 'text', 'author_id', 'tags', 'video_id', 'img_url', 'date'];

    public function typeView(){
        return $this->belongsTo('App\Typeview', 'typeview_id');
    }

    public function section(){
        return $this->belongsTo('App\Section');
    }

    public function author(){
        return $this->belongsTo('App\Author');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag', 'tagscontents', 'content_id', 'tag_id');
    }

    public function getViewsAttribute($value){
      $r = rand ( 500 ,  10000 );
      return number_format($r,0,',','.');
    }

    public function renderDate(){
      setlocale(LC_TIME, 'Spanish');
      $param = '%d %B %Y';
      return Carbon::parse($this->date)->formatLocalized($param);
    }

    public function getFullUrl(){
      $url = '/';
      if($this->section->section_id)$url.=$this->section->parent->url.'/';
      $url.=$this->section->url.'/';
      $url.=$this->url;
      return $url;
    }

    public function getBreadcrumb(){
      if($this->section->section_id){
        return [array('url'=>$this->section->parent->url,'name'=>$this->section->parent->name),
        array('url'=>$this->section->parent->url."/".$this->section->url,'name'=>$this->section->name)];
      }else{
        return [array('url'=>$this->section->url,'name'=>$this->section->name)];
      }
    }

    public function getStandardImg($tipeView){
      if($tipeView == 3){
        return '/img/articulos/standard/'.$this->img_url;
      }elseif($tipeView == 4){
        return '/img/programas/standard/'.$this->img_url;
      }
    }

    public function getMediumImg($tipeView){
      if($tipeView == 3){
        return '/img/articulos/medium/'.$this->img_url;
      }elseif($tipeView == 4){
        return '/img/programas/medium/'.$this->img_url;
      }
    }

    public function getSmallImg($tipeView){
      if($tipeView == 3){
        return '/img/articulos/small/'.$this->img_url;
      }elseif($tipeView == 4){
        return '/img/programas/small/'.$this->img_url;
      }
    }

    public function getImageByType($type){
      switch ($type) {
        case 1:$subfolder='standard'; break;
        case 2:$subfolder='medium'; break;
        case 3:$subfolder='small'; break;        
      }
      switch ($this->typeview_id) {
        case 3:$folder='articulos'; break;
        case 4:$folder='programas'; break;
      }
      return '/img/'.$folder.'/'.$subfolder.'/'.$this->img_url;
    }
}
