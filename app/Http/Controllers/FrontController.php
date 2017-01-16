<?php

namespace App\Http\Controllers;

use App\Content;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontController extends Controller
{

  public function __construct() {
       View::share( 'path', '' );
    }

  public function getIndex(){
    $sections = Section::where('level', 1)->get();
    //dd($sections);
    return view('front.index', compact('sections'));
  //  $this->renderView('front.index', $sections);
  }

  public function getSection($section){
    if($section = Section::where('url', $section)->first()){
      $allSections = Section::all();
      $sections = $allSections->where('level', 1);
      $subSections = $allSections->where('level', 2);
      $thisSubSections = $allSections->where('level', 2)->where('section_id', $section->id);
      $contents = Content::where('typeview_id','=',3)->paginate(4);//ver de ordenar el request
      $next_page = $contents->nextPageUrl();
      return view($section->typeView->index_view, compact('contents','next_page','section', 'sections', 'thisSubsections', 'subSections'));
    }else{
      return view('errors.404');
    }
  }

  public function getArticles(){
    $sections = Section::where('level', 1)
                        ->get();
    return view('front.articles.index', compact('sections'));
  }

  public function getArticle(){

      return view('front.articles.show');

  }

  public function getSubSection($section, $subSection){
    if($subSections = Section::where('url', $subSection)->get()){
      foreach($subSections as $subSection){
        if($subSection->parent->url == $section){
          $allSections = Section::all();
          $section = $allSections->where('url', $section)->first();
          $sections = $allSections->where('level', 1);
          $subSections = $allSections->where('level', 2);
          $thisSubSections = $allSections->where('level', 2)->where('section_id', $section->id);
          $contents = $subSection->contents;
          return view($subSection->typeView->index_view, compact('section', 'sections', 'subSection', 'subSections','thisSubSections', 'contents'));
        }else{
          return view('errors.404');
        }
      }
    }else{
      return view('errors.404');
    }

  }

  public function getContent($section, $subSection, $content){
    if($content = Content::where('url', $content)->first()){
      $allSections = Section::all();
      $section = $allSections->where('url', $section)->first();
      $subSection = $allSections->where('url', $subSection)->where('section_id', $section->id)->first();
      $sections = $allSections->where('level', 1);
      $subSections = $allSections->where('level', 2);
      $thisSubSections = $allSections->where('level', 2)->where('section_id', $section->id);
      $contents = $subSection->contents;
      return view($content->typeView->show_view, compact('section', 'sections', 'subSection','subSections', 'thisSubSections', 'contents', 'content'));
    }else{
      return view('errors.404');
    }
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

}
