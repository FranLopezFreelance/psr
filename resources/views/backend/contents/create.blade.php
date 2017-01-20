@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h4><a href="/backend/contents/section/{{ $section->id }}">Contenidos</a> / Nuevo Contenido</h4></div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="/backend/sections">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('typeview_id') ? ' has-error' : '' }}">
                          <label for="typeview_id" class="col-md-4 control-label">Tipo de Contenido</label>
                          <div class="col-md-6">
                              <select class="form-control" name="typeview_id" required>
                                @if(isset($section))
                                  <option value="{{ $section->id }}">{{ $section->name }}</option>
                                @else
                                  <option value="0">Elegir...</option>
                                    @foreach($typeviews as $typeview)
                                      @if(old('typeview') && old('typeview') == $typeview->id)
                                        <option value="{{ $typeview->id }}" selected>{{ $typeview->name }}</option>
                                      @else
                                        <option value="{{ $typeview->id }}">{{ $typeview->name }}</option>
                                      @endif
                                    @endforeach
                                @endif
                              </select>

                              @if ($errors->has('typeview_id'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('typeview_id') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>


                      <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                          <label for="title" class="col-md-4 control-label">Título</label>
                          <div class="col-md-6">
                              <input id="title" type="text" class="form-control title" name="title" value="{{ old('title') }}" required autofocus>
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
                              <input id="html_title" type="text" class="form-control title" name="html_title" value="{{ old('html_title') }}" required autofocus>
                              @if ($errors->has('html_title'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('html_title') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <!-- <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
                          <label for="level" class="col-md-4 control-label">Nivel</label>
                          <div class="col-md-6">
                              <select class="form-control level" name="level" required>
                                <option value="0">Elegir...</option>
                                <option value="1">Principal</option>
                                <option value="2">Sub Sección</option>
                              </select>

                              @if ($errors->has('level'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('level') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div> -->

                      <div class="form-group{{ $errors->has('section_id') ? ' has-error' : '' }} principal">
                          <label for="section_id" class="col-md-4 control-label">Sección Principal</label>
                          <div class="col-md-6">
                              <select class="form-control" name="section_id" required>
                                <option value="0">Elegir...</option>
                                  @forelse($sections as $section)
                                    @if($section->level == 1)
                                      <option value="{{ $section->id }}">{{ $section->name }}</option>
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

                      <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                          <label for="url" class="col-md-4 control-label">URL</label>

                          <div class="col-md-6">
                              <input id="url" type="text" class="form-control url" name="url" value="{{ old('url') }}" required>

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

                      <div class="form-group{{ $errors->has('social_desc') ? ' has-error' : '' }}">
                          <label for="social_desc" class="col-md-4 control-label">Desc. Social</label>

                          <div class="col-md-6">
                              <textarea id="social_desc" class="form-control" name="social_desc" required/>{{ old('social_desc') }}</textarea>

                              @if ($errors->has('social_desc'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('social_desc') }}</strong>
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

                      <div class="form-group{{ $errors->has('tag_ids') ? ' has-error' : '' }}">
                          <label for="tag_ids" class="col-md-4 control-label">Tags</label>

                          <div class="col-md-6">
                              <textarea id="tag_ids" class="form-control" name="tag_ids" required/>{{ old('tag_ids') }}</textarea>

                              @if ($errors->has('tag_ids'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('tag_ids') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('author_id') ? ' has-error' : '' }}">
                          <label for="author_id" class="col-md-4 control-label">Autor</label>
                          <div class="col-md-6">
                              <select class="form-control" name="author_id" required>
                                <option value="0">Elegir...</option>
                                @foreach($authors as $author)
                                  @if(old('author') && old('author') == $author->id)
                                    <option value="{{ $author->id }}" selected>{{ $author->name }}</option>
                                  @else
                                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                                  @endif
                                @endforeach
                              </select>

                              @if ($errors->has('author_id'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('author_id') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('video_id') ? ' has-error' : '' }}">
                          <label for="video_id" class="col-md-4 control-label">Video ID</label>

                          <div class="col-md-6">
                              <input id="video_id" type="text" class="form-control video_id" name="video_id" value="{{ old('video_id') }}" required>

                              @if ($errors->has('video_id'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('video_id') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                          <label for="date" class="col-md-4 control-label">Fecha</label>
                          <div class="col-md-6">
                              <input id="date" type="date" class="form-control title" name="date" value="{{ old('date') }}" required autofocus>
                              @if ($errors->has('date'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('date') }}</strong>
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
