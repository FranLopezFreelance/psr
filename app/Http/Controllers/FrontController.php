<?php

namespace App\Http\Controllers;

use App\Article;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontController extends Controller
{

  public function __construct() {
       View::share( 'path', 'http://localhost/psr/public' );
    }

  public function getIndex(){
    $sections = Section::where('level', 1)->get();
    //dd($sections);
    return view('front.index', compact('sections'));
  //  $this->renderView('front.index', $sections);
  }

  public function getArticles(){
    $sections = Section::where('level', 1)
                        ->get();
    return view('front.articles.index', compact('sections'));
  }

  public function getArticle(){

      return view('front.articles.show');

  }

  public function getVideos(){
    $sections = Section::where('level', 1)
                        ->get();
    return view('front.videos.index', compact('sections'));
  }

  public function getVideo(){
    $sections = Section::where('level', 1)->get();
    return view('front.videos.index', compact('sections'));
  }

}
