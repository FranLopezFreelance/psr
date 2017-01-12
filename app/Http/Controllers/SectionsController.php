<?php

namespace App\Http\Controllers;

use App\Section;
use App\Typesection;
use Illuminate\Http\Request;

class SectionsController extends Controller
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
      $sections = Section::where('level', 1)->get();
      $section = $sections->where('id', 1)->first();
      $subSections = $section->childrens;
      return view('backend.sections.index', compact('section', 'sections', 'subSections'));
    }

    public function getBySection(Section $section)
    {
      $sections = Section::where('level', 1)->get();
      $subSections = $section->childrens;
      return view('backend.sections.index', compact('section', 'sections', 'subSections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $sections = Section::all();
      $typesections = Typesection::all();
      return view('backend.sections.create', compact('sections', 'typesections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $section = new Section($request->all());
      $section->save();
      $message = 'La Sección ha sido creada.';
      return view('backend.sections.show', compact('section', 'message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
      return view('backend.sections.show', compact('section'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
      $sections = Section::all();
      return view('backend.sections.edit', compact('section', 'sections'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
      $section->update($request->all());
      $sections = Section::all();
      $message = 'Las modificaciones fueron guardadas.';
      return view('backend.sections.edit', compact('section', 'sections', 'message'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
      $section->delete();
      $sections = Section::where('level', 1)->get();
      $section = $sections->where('id', 1)->first();
      $subSections = $section->childrens;
      $message = 'La Sección ha sido eliminada.';
      return view('backend.sections.index', compact('section', 'sections', 'subSections', 'message'));
    }
}
