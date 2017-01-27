<?php

namespace App\Http\Controllers;

use App\Content;
use App\Section;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontController extends Controller
{
  private $sections;
  public function __construct() {
      $allSections = Section::all();
      $this->sections = $allSections->where('level', 1);
      $recomendados = Content::where('dest','=',1)->take(5)->get();
      $tags =  Tag::take(5)->get();

       View::share( 'path', '');
       View::share( 'sections', $this->sections );
       View::share( 'recomendados', $recomendados );
       View::share( 'tags', $tags );
    }

  public function getIndex(){
    $target = Section::where('id', 1)->first();
    $videos = Content::where('typeview_id','=',3)->paginate(4);

    return view('front.index', compact('target','videos'));
  }

  public function getSection($section, Request $request){
    if($section = Section::where('url', $section)->first()){

      $contents = $section->contents()->paginate(12);
      $target = $section;

      if($request->ajax())return  $this->renderAjax($request,$section,$contents);

      return view($section->typeView->index_view, compact('target','contents','section'));
    }else{
      return view('errors.404');
    }
  }

  public function getSubSection($section, $subSection, Request $request){

    if($subSections = Section::where('url', $subSection)->get()){
      foreach($subSections as $subSection){
        if($subSection->parent->url == $section){
          //$section = Section::where('url', $section)->first();
          $contents = $subSection->contents()->paginate(12);
          $target = $subSection;

          if($request->ajax())return  $this->renderAjax($request,$subSection,$contents);

          return view($subSection->typeView->index_view, compact('target', 'subSection', 'contents'));
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

      $target = $content;

      return view($content->typeView->show_view, compact('target','section','subSection', 'content'));
    }else{
      return view('errors.404');
    }
  }

  private function renderAjax($request,$section,$contents){
    if($section->typeview_id == 4) {
      $colsm = 4;
      $colmd = 4;
        return [
            'content' => view('front.home.assets.ajax-video-render')->with(compact('contents','colsm','colmd'))->render(),
            'next_page' => $contents->nextPageUrl()
        ];
    }
    else if($section->typeview_id == 3) {
        return [
            'content' => view('front.articles.assets.ajax-article-render')->with(compact('contents'))->render(),
            'next_page' => $contents->nextPageUrl()
        ];
    }
  }

  public function getMoreHomeVideos(Request $request){
  $contents = Content::where('typeview_id','=',4)->paginate(12);//ver de ordenar el request

    if($request->ajax()) {
      $colsm = 3;
      $colmd = 3;
        return [
            'videos' => view('front.home.assets.ajax-video-render')->with(compact('contents','colsm','colmd'))->render(),
            'next_page' => $contents->nextPageUrl()
        ];
    }else return view('front.home.assets.ajax-video-render')->with(compact('contents'));
  }

  public function getProgramasByTemporada($bloque,$temporada,Request $request){
    if($temporadas = Section::where('url', $temporada)->get()){
      foreach($temporadas as $temporada){
        if($temporada->parent->url == $bloque){

          $contents = $temporada->contents()->paginate(12);
          $target = $temporada;

          if($request->ajax())return  $this->renderAjax($request,$temporada,$contents);

          return view($temporada->typeView->index_view, compact('target', 'contents'));
        }else{
          return view('errors.404');
        }
      }
    }else{
      return view('errors.404');
    }
  }

  public function getProgramaByNameContent($bloque,$temporada,$content){

  }



}
