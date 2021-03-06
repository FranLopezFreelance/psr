<?php

namespace App\Http\Controllers;

use App\Author;
use App\Content;
use App\Section;
use App\Tag;
use App\Typeview;
use App\Videotype;

use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class ContentsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuSections = Section::where('level', 1)
                                ->where('topnav_back', 1)
                                ->where('active', 1)->get();

        $sections = Section::all();
        $principalSections = $sections->where('level', 1)
                                      ->where('topnav_back', 1)
                                      ->where('active', 1);//->get();


        $section = $sections->where('level', 1)->first();
        $subSections = $sections->where('level', 2);
        $subSection = $sections->where('level', 2)->first();
        $contents = Content::where('section_id', $subSection->id)->paginate(15);
        return view('backend.contents.index', compact('sections', 'section', 'subSection', 'contents', 'menuSections'));
    }

    public function getBySection(Section $section)
    {
        $menuSections = Section::where('level', 1)
                                ->where('topnav_back', 1)
                                ->where('active', 1)->get();


        if($subSection = $section->childrens()->first()){
          $contents = $subSection->contents;
        }

        $contents = Content::where('section_id', $subSection->id)->paginate(15);

        return view('backend.contents.index', compact('section', 'subSection', 'contents', 'menuSections'));
    }

    public function getBySubSection(Section $subSection)
    {
        $menuSections = Section::where('level', 1)
                                ->where('topnav_back', 1)
                                ->where('active', 1)->get();

        if($subSection->level == 2){
          $section = $subSection->parent;
        }elseif($subSection->level == 3){
          $section = $subSection->parent->parent;
        }

        $contents = Content::where('section_id', $subSection->id)->orderBy('date', 'desc')->paginate(15);
        return view('backend.contents.index', compact('section', 'subSection', 'contents', 'menuSections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createBySection(Section $section)
    {
        $menuSections = Section::where('level', 1)
                              ->where('topnav_back', 1)
                              ->where('active', 1)->get();

        $sections = Section::all();
        $videoTypes = Videotype::all();
        $subSections = $sections->where('section_id', $section->id);
        $typeviews = Typeview::all();
        $authors = Author::all();
        $tags = Tag::all();
        return view('backend.contents.create', compact('section', 'sections', 'subSections',
        'typeviews', 'authors', 'menuSections', 'tags', 'videoTypes'));
    }

    public function createBySubSection(Section $section, Section $subSection)
    {
        $menuSections = Section::where('level', 1)
                              ->where('topnav_back', 1)
                              ->where('active', 1)->get();

        $sections = Section::all();
        $videoTypes = Videotype::all();
        $subSections = $sections->where('section_id', $section->id);

        $subSubSections = "";

        if($subSection->level ==3){
          $subSubSections = $sections->where('section_id', $subSection->parent->id);
          $subSubSection = $subSection;
          $subSection = $subSection->parent;
        }

        $typeviews = Typeview::all();
        $authors = Author::all();
        $tags = Tag::all();
        return view('backend.contents.create', compact('section', 'subSection', 'sections', 'subSections',
        'typeviews', 'authors', 'menuSections', 'tags', 'videoTypes', 'subSubSection', 'subSubSections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //Store del contenido
      $content = new Content($request->except('tags','url', 'img', 'secondSection'));

      //Saco los acentos de url y lo guardo en content
      $string = trim($request->input('url'));
      $url = str_replace(
        array('á', 'é', 'í', 'ó', 'ú'),
        array('a', 'e', 'i', 'o', 'u'),
        $string
      );
      $content->url = $url;

      //Subiendo las imagenes y haciendo resize
      if($request->input('typeview_id') == 3){
        $path = 'img/articulos/';
        $contentName = 'Artículo';
      }elseif($request->input('typeview_id') == 4){
        $path = 'img/programas/';
        $contentName = 'Programa';
      }

      //Redimensiono y Guardo las Imágenes (Si la imágene se cargo)
      if($request->file('img')){
        $file = $request->file('img');
    		$name = $url.'.'.$file->getClientOriginalExtension();
        $imageFile = Image::make($request->file('img'));
        $imageFile->save($path.'standard/'.$name);
        $imageMedium = $imageFile->resize(750, 422);
        $imageMedium->save($path.'medium/'.$name);
        $imageSmall = $imageFile->resize(320, 180);
        $imageSmall->save($path.'small/'.$name);
        $content->img_url = $name;
      }

      $content->user_id = Auth::user()->id;

      $content->save();

      //Guardando Tags asociados
      $content->tags()->sync($request->input('tags'), false);

      //Cargando los datos de la vista
      $menuSections = Section::where('level', 1)->where('topnav_back', 1)->where('active', 1)->get();
      $subSection = $content->section;
      $section = $subSection->parent;
      $sections = $section->getSubSections();

      //Mensaje
      $message = 'El '.$contentName.' ha sido creado.';
      return redirect('/backend/contents/createBySection/'.$section->id.'/'.$subSection->id);

      return view('backend.contents.show', compact('content', 'sections', 'section', 'subSection', 'menuSections', 'message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
      $menuSections = Section::where('level', 1)
                              ->where('topnav_back', 1)
                              ->where('active', 1)->get();

      $subSection = $content->section;
      $section = $subSection->parent;
      $sections = $section->getSubSections();
      return view('backend.contents.show', compact('content', 'sections', 'section', 'subSection', 'menuSections'));
    }

    public function getContentBySubSection(Section $subSection){
      $menuSections = Section::where('level', 1)
                              ->where('topnav_back', 1)
                              ->where('active', 1)->get();

      $content = $subSection->contents()->first();
      $section = $subSection->parent;
      $sections = $section->getSubSections();
      return view('backend.contents.show', compact('content', 'sections', 'section', 'subSection', 'menuSections'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
      $menuSections = Section::where('level', 1)
                            ->where('topnav_back', 1)
                            ->where('active', 1)->get();

      $sections = Section::all();

      if($content->section->level == 3){
        $section = $content->section->parent->parent;
        $subSection = $content->section->parent;
        $subSubSection = $content->section;
        $subSubSections = $sections->where('section_id', $subSection->id);
      }else{
        $section = $content->section->parent;
        $subSection = $content->section;
        $subSubSection = "";
      }

      $subSections = $sections->where('section_id', $section->id);
      $videoTypes = Videotype::all();
      $typeviews = Typeview::all();
      $authors = Author::all();
      $tags = Tag::all();
      return view('backend.contents.edit', compact('section', 'subSection', 'subSubSection', 'content', 'sections', 'subSections',
      'typeviews', 'authors', 'menuSections', 'tags', 'subSubSections', 'videoTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        $content->update($request->except('tags','url', 'img', 'secondSection'));

        //Saco los acentos de url y lo guardo en content
        $string = trim($request->input('url'));
        $url = str_replace(
          array('á', 'é', 'í', 'ó', 'ú'),
          array('a', 'e', 'i', 'o', 'u'),
          $string
        );
        $content->url = $url;

        if($request->input('dest')){
          $content->dest = 1;
        }else{
          $content->dest = 0;
        }

        $content->editors()->save(Auth::user());

        $content->save();

        //Guardando Tags asociados
        $content->tags()->sync($request->input('tags'));

        $menuSections = Section::where('level', 1)
                              ->where('topnav_back', 1)
                              ->where('active', 1)->get();

        $sections = Section::all();

        if($content->section->level == 3){
          $section = $content->section->parent->parent;
          $subSection = $content->section->parent;
          $subSubSection = $content->section;
          $subSubSections = $sections->where('section_id', $subSection->id);
        }else{
          $section = $content->section->parent;
          $subSection = $content->section;
          $subSubSection = "";
        }

        $subSections = $sections->where('section_id', $section->id);

        $videoTypes = Videotype::all();
        $typeviews = Typeview::all();
        $authors = Author::all();
        $tags = Tag::all();
        $message = "El ".$content->typeview->name." se ha modificado correctamente.";
        return view('backend.contents.edit', compact('section', 'subSection', 'subSubSection', 'content', 'sections', 'subSections',
        'typeviews', 'authors', 'menuSections', 'tags', 'videoTypes', 'subSubSections', 'message'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
      $typeView = $content->typeview->name;
      $subSection = $content->section;
      $content->delete();
      $menuSections = Section::where('level', 1)
                              ->where('topnav_back', 1)
                              ->where('active', 1)->get();

      if($subSection->level == 2){
        $section = $subSection->parent;
      }elseif($subSection->level == 3){
        $section = $subSection->parent->parent;
      }

      $contents = Content::where('section_id', $subSection->id)->orderBy('date', 'desc')->paginate(15);

      $message = 'El '.$typeView.' ha sido eliminada.';

      return view('backend.contents.index', compact('section', 'subSection', 'contents', 'menuSections', 'message'));
    }

    public function addNewTag($name){
      $url = str_replace(
        array('á', 'é', 'í', 'ó', 'ú', ' '),
        array('a', 'e', 'i', 'o', 'u', '-'),
        $name
      );
      $url = strtolower($url);

      $tag = new Tag([
        'name' => $name,
        'url' => $url
      ]);

      $tag->save();
      $id = $tag->id;

      return response()->json([
        'id' => $id,
        'name' => $name
      ]);
    }

    public function editImage(Request $request, Content $content){

      if($content->typeview_id == 3){
        $path = 'img/articulos/';
      }elseif($content->typeview_id == 4){
        $path = 'img/programas/';
      }

      $file = $request->file('file');
      $name = $content->url.'.'.$file->getClientOriginalExtension();
      $imageFile = Image::make($file);
      $imageFile->save($path.'standard/'.$name);
      $imageMedium = $imageFile->resize(750, 422);
      $imageMedium->save($path.'medium/'.$name);
      $imageSmall = $imageFile->resize(320, 180);
      $imageSmall->save($path.'small/'.$name);
      $content->img_url = $name;
      $content->save();
    }
}
