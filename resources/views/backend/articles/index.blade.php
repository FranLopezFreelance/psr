@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>
                <a href="/backend/articles">Artículos</a> / Todos los artículos
                <a class="btn btn-success article-create" href="/backend/articles/create">Crear</a>
            </h4>
          </div>
        </div>
      </div>
      <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading"><h3>Secciones</h3>
            </div>
              <div class="panel-body">
                    @forelse($sections as $section)
                      {{ $section->getTreeBack(1) }}
                    @empty
                    @endforelse
              </div>
          </div>
      </div>
      <div class="col-md-8">
          <div class="panel panel-default">
              <div class="panel-heading"><h3>Artículos</h3>
              </div>
              <div class="panel-body">
                @if(isset($message))
                    <div class="alert alert-success message">
                        <h5>{{ $message }}</h5>
                    </div>
                @endif
                <ul class="list-group">
                  @forelse($articles as $article)
                    <li class="list-group-item">
                      <a href="/backend/articles/{{ $article->id }}">{{ $article->title }}</a>
                      {!! Form::open(['method' => 'DELETE','route' => ['articles.destroy', $article->id],'style'=>'display:inline']) !!}
                      {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs pull-right']) !!}
                      {!! Form::close() !!}
                      <a href="/backend/articles/{{ $article->id }}/edit" class="btn btn-primary btn-xs pull-right article-edit">Editar</a>
                    </li>
                  @empty
                    No hay artículos en la base
                  @endforelse
                </ul>
              </div>
          </div>
      </div>
    </div>
</div>
@endsection
