<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'level', 'section_id', 'url', 'name', 'description', 'typesection_id'
    ];

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

    public function section(){
      return $this->hasMany('App\Video');
    }

    public function typesection(){
      return $this->belongsTo('App\Typesection');
    }

    public function getTree($type){
      if($type==1){
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
      }elseif($type==2){
          $tree = $this->name;
          $tree .= "<ul>";
          foreach($this->videos as $video){
              $tree .= "<li><a href='/videos/".$video->getLink()."'>".$video->title."</a></li>";
          }
          $tree .= "</ul>";
          echo $tree;
      }
    }

    public function getTreeBack($type){
      if($type==1){
        if($this->level == 1){
          $tree = $this->name;
          if($this->childrens){
            $tree .= "<ul>";
            foreach($this->childrens as $children){
              $tree .= "<li><a href='/backend/articles/section/".$children->id."'>".$children->name."</li></a>";
            }
            $tree .= "</ul>";
          }
          echo $tree;
        }
      }elseif($type==2){
          $tree = $this->name;
          $tree .= "<ul>";
          foreach($this->videos as $video){
              $tree .= "<li><a href='/videos/".$video->getLink()."'>".$video->title."</a></li>";
          }
          $tree .= "</ul>";
          echo $tree;
      }
    }

}
