<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function childrens(){
      return $this->hasMany('App\Section');
    }

    public function mother(){
        return $this->belongsTo('App\Section', 'section_id');
    }

    public function articles(){
      return $this->hasMany('App\Article');
    }

    public function videos(){
      return $this->hasMany('App\Video');
    }

    public function getTree(){
      $tree = $this->name;
      if($this->childrens){
        $tree .= "<ul>";
        foreach($this->childrens as $children){
          $tree .= "<li>".$children->name."</li>";
          if($children->articles){
            $tree .= "<ul>";
            foreach($children->articles as $article){
              $tree .= "<li><a href='/articulos/".$article->getLink()."'>".$article->title."</a></li>";
            }
            $tree .= "</ul>";
          }
        }
        $tree .= "</ul>";
      }
      echo $tree;
    }

}
