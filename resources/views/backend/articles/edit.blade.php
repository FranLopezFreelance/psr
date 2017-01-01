@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h4><a href="/backend/articles">Artículos</a> / Editar Artículo</h4></div>
                <div class="panel-body">
                  <a class="btn btn-primary" href="/backend/articles/{{ $article->id }}">Volver al Artículo</a>
                  <hr />

                  @if(isset($message))
                    <div class="col-md-10 col-md-offset-1">
                        <div class="alert alert-success message">
                            <h5>{{ $message }}</h5>
                        </div>
                    </div>
                  @endif

                  <form class="form-horizontal" role="form" method="POST" action="/backend/articles/{{ $article->id }}">

                      {{ csrf_field() }}
                      {{ method_field('PUT') }}

                      <input name="_method" type="hidden" value="PUT">

                      <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                          <label for="title" class="col-md-4 control-label">Título</label>

                          <div class="col-md-6">
                              <input id="title" type="text" class="form-control" name="title"
                                @if(old('title'))
                                  value="{{ old('title') }}"
                                @else
                                  value="{{ $article->title }}"
                                @endif
                              required>

                              @if ($errors->has('title'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('title') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('html_title') ? ' has-error' : '' }}">
                          <label for="html_title" class="col-md-4 control-label">Título HTML</label>

                          <div class="col-md-6">
                              <input id="html_title" type="text" class="form-control" name="html_title"
                              @if(old('html_title'))
                                value="{{ old('html_title') }}"
                              @else
                                value="{{ $article->html_title }}"
                              @endif
                            required>

                              @if ($errors->has('html_title'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('html_title') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                          <label for="url" class="col-md-4 control-label">URL</label>

                          <div class="col-md-6">
                              <input id="url" type="text" class="form-control" name="url"
                                @if(old('url'))
                                  value="{{ old('url') }}"
                                @else
                                  value="{{ $article->url }}"
                                @endif
                              required>

                              @if ($errors->has('url'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('url') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                          <label for="description" class="col-md-4 control-label">Descripción</label>

                          <div class="col-md-6">
                              @if(old('description'))
                                <textarea id="description" class="form-control" name="description" required/>{{ old('description') }}</textarea>
                              @else
                                <textarea id="description" class="form-control" name="description" required/>{{ $article->description }}</textarea>
                              @endif

                              @if ($errors->has('description'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('description') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                          <label for="text" class="col-md-4 control-label">Texto</label>

                          <div class="col-md-6">
                            @if(old('text'))
                              <textarea id="text" class="form-control" name="text" required/>{{ old('text') }}</textarea>
                            @else
                              <textarea id="text" class="form-control" name="text" required/>{{ $article->text }}</textarea>
                            @endif
                              @if ($errors->has('text'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('text') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('section_id') ? ' has-error' : '' }}">
                          <label for="section_id" class="col-md-4 control-label">Sección</label>

                          <div class="col-md-6">

                              @include('backend.articles.includes.select-section-edit')

                              @if ($errors->has('section_id'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('section_id') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('autor_id') ? ' has-error' : '' }}">
                          <label for="autor_id" class="col-md-4 control-label">Autor</label>

                          <div class="col-md-6">

                              @include('backend.articles.includes.select-author-edit')

                              @if ($errors->has('author_id'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('author_id') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  Guardar Cambios
                              </button>
                          </div>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
