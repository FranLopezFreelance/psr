<?php

namespace App\Http\Controllers;

use App\Article;
use App\Section;
use App\Author;
use Illuminate\Http\Request;

class ArticlesController extends Controller
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
        $section = Section::where('level', 2)->first();
        if(isset($section->articles)){
          $articles = $section->articles;
        }else{
          $articles = Article::all();
        }

        $sections = Section::all();
        return view('backend.articles.index', compact('articles', 'sections'));
    }

    public function getBySection(Section $section)
    {
      $sections = Section::all();
      $articles = $section->articles;
      return view('backend.articles.index', compact('articles', 'sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::all();
        $authors = Author::all();
        return view('backend.articles.create', compact('sections', 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article($request->all());
        $article->save();
        $message = 'El Artículo ha sido creado.';
        return view('backend.articles.show', compact('article', 'message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('backend.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $sections = Section::all();
        $authors = Author::all();
        return view('backend.articles.edit', compact('article', 'sections', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
          //dd($request->all());
        $sections = Section::all();
        $authors = Author::all();
        $article->update($request->all());
        if(!$request->input('dest')){
          $article->dest = 'off';
          $article->save();
        }

        $message = 'Las modificaciones fueron guardadas.';
        return view('backend.articles.edit', compact('article', 'sections', 'authors', 'message'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        $articles = Article::all();
        $sections = Section::all();
        $message = 'El Artículo ha sido eliminado.';
        return view('backend.articles.index', compact('articles', 'sections', 'message'));
    }
}
