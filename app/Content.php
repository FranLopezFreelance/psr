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
}
