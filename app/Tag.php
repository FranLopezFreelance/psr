<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  protected $fillable = [
      'name', 'url'
  ];

  public function contents(){
      return $this->belongsToMany('App\Content', 'tagscontents', 'tag_id', 'content_id');
  }
}
