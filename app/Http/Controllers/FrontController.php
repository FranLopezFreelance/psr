<?php

namespace App\Http\Controllers;

use App\Content;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontController extends Controller
{

  public function __construct() {
       View::share( 'path', $_ENV['APP_URL']);
    }

  public function getIndex(){
    $sections = Section::where('level', 1)->get();
    //dd($sections);
    return view('front.index', compact('sections'));
  //  $this->renderView('front.index', $sections);
  }

  public function getMoreHomeVideos(Request $request){
    $posts = Content::where('typeview_id','=',3)->paginate(4);//ver de ordenar el request

    if($request->ajax()) {
        return [
            'videos' => view('front.home.assets.ajax-video-render')->with(compact('posts'))->render(),
            'next_page' => $posts->nextPageUrl()
        ];
    }else return view('front.home.assets.ajax-video-render')->with(compact('posts'));
  }

  public function getSection($section){
    if($section = Section::where('url', $section)->first()){
      $contents = Content::where('typeview_id','=',3)->paginate(20);//ver de ordenar el request
      $page = $contents->nextPageUrl();
      return view($section->typeView->index_view,compact('contents','nextPage'));
    }else{
      return view('errors.404');
    }
  }

  public function getSubSection($section, $subSection){
    if($subSections = Section::where('url', $subSection)->get()){
      foreach($subSections as $subSection){
        if($subSection->parent->url == $section){
          return view($subSection->typeView->index_view);
        }else{
          return redirect()->back();
        }
      }
    }else{
      return view('errors.404');
    }

  }

  public function getContent($section, $subSection, $content){
    if($content = Content::where('url', $content)->first()){
      return view($content->typeView->show_view);
    }else{
      return view('errors.404');
    }
  }

}
