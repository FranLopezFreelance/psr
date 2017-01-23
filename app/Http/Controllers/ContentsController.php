<?php

namespace App\Http\Controllers;

use App\Author;
use App\Content;
use App\Section;
use App\Tag;
use App\Typeview;
use App\Videotype;
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
                                ->where('topnav_back', 1)->get();
        $sections = Section::all();
        $principalSections = $sections->where('level', 1)
                                      ->where('topnav_back', 1)->all();
        $section = $sections->where('level', 1)->first();
        $subSections = $sections->where('level', 2);
        $subSection = $sections->where('level', 2)->first();
        $contents = $subSection->contents;
        return view('backend.contents.index', compact('sections', 'section', 'subSection', 'contents', 'menuSections'));
    }

    public function getBySection(Section $section)
    {
        $menuSections = Section::where('level', 1)
                                ->where('topnav_back', 1)->get();
        if($subSection = $section->childrens()->first()){
          $contents = $subSection->contents;
        }
        return view('backend.contents.index', compact('section', 'subSection', 'contents', 'menuSections'));
    }

    public function getBySubSection(Section $subSection)
    {
        $menuSections = Section::where('level', 1)
                                ->where('topnav_back', 1)->get();
        $section = $subSection->parent;
        $contents = $subSection->contents;
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
                              ->where('topnav_back', 1)->get();
        $sections = Section::all();
        $videoTypes = Videotype::all();
        $subSections = $sections->where('section_id', $section->id);
        $typeviews = Typeview::all();
        $authors = Author::all();
        $tags = Tag::all();
        return view('backend.contents.create', compact('section', 'sections', 'subSections',
        'typeviews', 'authors', 'menuSections', 'tags', 'videoTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $content = new Content($request->except('tags'));
      $content->save();
      $content->tags()->sync($request->input('tags'), false);

      $menuSections = Section::where('level', 1)
                              ->where('topnav_back', 1)->get();
      $sections = Section::all();
      $videoTypes = Videotype::all();
      $section = $sections->where('id', $request->input('section_id'))->first();
      $subSections = $sections->where('section_id', $section->id);
      $typeviews = Typeview::all();
      $authors = Author::all();
      $tags = Tag::all();
      $message = 'El contenido ha sido creado.';
      return view('backend.contents.create', compact('section', 'sections', 'subSections',
      'typeviews', 'authors', 'menuSections', 'tags', 'videoTypes', 'message'));
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
                              ->where('topnav_back', 1)->get();

      $subSection = $content->section;
      $section = $subSection->parent;
      $sections = $section->getSubSections();
      return view('backend.contents.show', compact('content', 'sections', 'section', 'subSection', 'menuSections'));
    }

    public function getContentBySubSection(Section $subSection){
      $menuSections = Section::where('level', 1)
                              ->where('topnav_back', 1)->get();

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
