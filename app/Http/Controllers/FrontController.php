<?php

namespace App\Http\Controllers;

use App\Content;
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

  public function getSection($section){
    if($section = Section::where('url', $section)->first()){
      dd($section->typeView->index_view);
    }else{
      return view('errors.404');
    }
  }

  public function getSubSection($section, $subSection){
    if($subSection = Section::where('url', $subSection)->first()){
      dd($subSection->typeView->index_view);
    }else{
      return view('errors.404');
    }
  }

  public function getContent($section, $subSection, $content){
    if($content = Content::where('url', $content)->first()){
      dd($content->typeView->show_view);
    }else{
      return view('errors.404');
    }
  }

}
