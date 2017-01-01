@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h4><a href="/backend/articles">Artículos</a> / Nuevo Artículo</h4></div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="/backend/articles">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                          <label for="title" class="col-md-4 control-label">Título</label>

                          <div class="col-md-6">
                              <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

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
                              <input id="html_title" type="text" class="form-control" name="html_title" value="{{ old('html_title') }}" required autofocus>

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
                              <input id="url" type="text" class="form-control" name="url" value="{{ old('url') }}" required>

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
                              <textarea id="description" class="form-control" name="description" required/>{{ old('description') }}</textarea>

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
                              <textarea id="text" class="form-control" name="text" required/>{{ old('text') }}</textarea>

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
                              <select class="form-control" name="section_id" required>
                                <option value="0">Elegir...</option>
                                @forelse($sections as $section)
                                  @if($section->level == 1)
                                    <optgroup label="{{ $section->name }}">
                                      @forelse($section->childrens as $children)
                                        <option value="{{ $children->id }}">{{ $children->name }}</option>
                                      @empty
                                      @endforelse
                                    </optgroup>
                                  @endif
                                @empty
                                  <option value="0">No hay secciones</option>
                                @endforelse
                              </select>

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
                              <select id="author_id" class="form-control" name="author_id" required>
                                <option value="0">Elegir...</option>
                                @forelse($authors as $author)
                                  <option value="{{ $author->id }}">{{ $author->name }}</option>
                                @empty
                                  <option value="0">No hay autores</option>
                                @endforelse
                              </select>

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
                                  Crear
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
