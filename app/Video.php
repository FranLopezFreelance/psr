<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
  public function section(){
      return $this->belongsTo('App\Section');
  }

  public function tags(){
      return $this->belongsToMany('App\Tag', 'tagsArticles', 'article_id', 'tag_id');
  }

  public function getTags(){
    $tags = "";
    if($this->tags){
      foreach($this->tags as $tag){
        $tags .= "<span class='label label-default'>".$tag->text."</span> ";
      }
    }else{
      $tags = "No hay tags asociados";
    }

    echo $tags;

  }

  public function date(){
    return date_format($this->created_at, 'd-m-Y');
  }

  public function getLink(){
    return $this->section->url."/".$this->url;
  }
}
