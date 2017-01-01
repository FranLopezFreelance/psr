<?php

namespace App\Http\Controllers;

use App\Article;
use App\Section;
use Illuminate\Http\Request;

class FrontController extends Controller
{

  public function getIndex(){
    $sections = Section::where('level', 1)->get();
    //dd($sections);
    return view('front.index', compact('sections'));
  //  $this->renderView('front.index', $sections);
  }

  public function getArticles(){
    $sections = Section::where('level', 1)->get();
    return view('front.articles.index', compact('sections'));
  }

  public function getArticle($section, $subSection, $url){
    if(Section::where('name', $section)->first()
    && Section::where('name', $subSection)->first()
    && $article = Article::where('url', $url)->first()){

      $sections = Section::where('level', 1)->get();
      return view('front.articles.show', compact('article', 'sections'));
    }else{
      return back();
    }
  }

  public function getVideos(){
    $sections = Section::where('level', 1)->get();
    return view('front.videos.index', compact('sections'));
  }

  public function getVideo(){
    $sections = Section::where('level', 1)->get();
    return view('front.videos.index', compact('sections'));
  }

}
