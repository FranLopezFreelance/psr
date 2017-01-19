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
        return false;
    }

    public function contents(){
      return $this->hasMany('App\Content');
    }

    public function getLink(){
      return "<a href='/".$this->url."'>".$this->name."</a>";
    }

    public function getBreadcrumb(){
      if($this->level == 2){
        return [array('url'=>$this->parent->url,'name'=>$this->parent->name),
        array('url'=>$this->parent->url."/".$this->url,'name'=>$this->name)];
      /*  return "<a href='/".$this->parent->url."'>".$this->parent->name."</a>
        / <a href='/".$this->parent->url."/".$this->url."'>".$this->name."</a>";*/
      }else{
        return [array('url'=>$this->url,'name'=>$this->name)];
      }
    }

    //para hacer poliformico el objeto seccion, y que tome el atributto title para el seo y social
    //<meta property="og:title" content="{{$target->title}}" /> $seccion no posee atributo title
    public function getTitleAttribute($value){
      return $this->name;
    }

    //idem poliformico
    public function getFullUrl(){
      $url = '/';
      //dd($this->parent());
      if($this->section_id)$url.=$this->parent->url.'/';
      $url.=$this->url;
      return $url;
    }

}
