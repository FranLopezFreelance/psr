@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h4><a href="/backend/articles">Artículos</a> / {{ $article->title }} <a class="btn btn-default btn-xs pull-right" href="/articulos/{{ $article->getLink() }}" target="_blank">Web</a></h4>
                </div>
                <div class="panel-body">
                  @if(isset($message))
                      <div class="alert alert-success message">
                          <h5>{{ $message }}</h5>
                      </div>
                  @endif
                  <a class="btn btn-primary" href="/backend/articles/{{ $article->id }}/edit">Editar</a>

                  {!! Form::open(['method' => 'DELETE','route' => ['articles.destroy', $article->id],'style'=>'display:inline']) !!}
                  {!! Form::submit('Eliminar', ['class' => 'btn btn-danger pull-right']) !!}
                  {!! Form::close() !!}

                  <hr />
                  <p><b>Título HTML:</b> {{ $article->html_title }}</p>
                  <p><b>URL:</b> {{ $article->url }}</p>
                  <p><b>Descripción:</b> {{ $article->description }}</p>
                  <p><b>Texto:</b> {{ $article->text }}</p>
                  <p><b>Sección:</b> {{ $article->section->name }}</p>
                  <p><b>Autor:</b> {{ $article->author->name }}</p>
                  <p><b>Vistas:</b> {{ $article->views }}</p>
                  <p><b>Destacado:</b> {{ $article->dest }}</p>
                  <p><b>Estado:</b> {{ $article->active }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
