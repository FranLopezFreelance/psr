@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h4>
                    <a href="/backend/contents/subSection/{{ $content->section->id }}">{{ $content->section->name }}</a>
                    / <a href="/backend/contents/{{ $content->id }}">{{ $content->title }}</a> / Editar {{ $content->typeview->name }}
                    <a class="btn btn-warning btn-xs pull-right"
                      href="/{{ $content->section->parent->url }}/{{ $content->section->url }}/{{ $content->url }}">Ver en la Web</a>
                  </h4>
                </div>
                <div class="panel-body">

                  @if(isset($message))
                      <div class="alert alert-success message">
                          <h5>{{ $message }}</h5>
                      </div>
                  @endif

                  <div class="row">
                    <div class="col-md-4 col-md-offset-1">
                      <img src="{{ $content->getSmallImg($content->typeview_id) }}" />
                    </div>
                    <div class="col-md-6">
                      <div class="dropzoneDIV">
                          <h4>Arrastrar imágen</h4>
                          <form action="/backend/contents/editImage/{{ $content->id }}" class="dropzone" method="POST">
                            {{ csrf_field() }}
                          </form>
                      </div>
                    </div>
                  </div>

                  <hr />

                  <form class="form-horizontal" role="form" method="POST" action="/backend/contents/{{ $content->id }}">
                      {{ csrf_field() }}
                      {!! method_field('patch') !!}

                      <div class="form-group{{ $errors->has('dest') ? ' has-error' : '' }}">
                          <div class="col-md-6 col-md-offset-4">

                              @if($content->dest)
                                <input type="checkbox" name="dest"  checked/> Destacado
                              @else
                                <input type="checkbox" name="dest"/> Destacado
                              @endif

                              @if ($errors->has('typeview_id'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('dest') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('typeview_id') ? ' has-error' : '' }}">
                          <label for="typeview_id" class="col-md-4 control-label">Sección</label>
                          <div class="col-md-6">
                              <select class="form-control" name="typeview_id" disabled>
                                <option value="0">Elegir...</option>
                                  @foreach($menuSections as $principalSection)
                                    @if($principalSection->id == $section->id)
                                      <option value="{{ $principalSection->id }}" selected>{{ $principalSection->name }}</option>
                                    @else
                                      <option value="{{ $principalSection->id }}">{{ $principalSection->name }}</option>
                                    @endif
                                  @endforeach
                              </select>

                              @if ($errors->has('typeview_id'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('typeview_id') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      @if($section->id != 4)
                      <div class="form-group{{ $errors->has('section_id') ? ' has-error' : '' }}">
                          <label for="section_id" class="col-md-4 control-label">Sub Sección</label>
                          <div class="col-md-6">
                            <select class="form-control" name="section_id" required>
                                <option value="0">Elegir...</option>
                                  @foreach($subSections as $subSection)
                                    @if(($content->section->level == 3 && $subSection->id == $content->section->parent->id)
                                    || ($content->section->level == 2 && $subSection->id == $content->section->id))
                                      <option value="{{ $subSection->id }}" selected>{{ $subSection->name }}</option>
                                    @else
                                      <option value="{{ $subSection->id }}">{{ $subSection->name }}</option>
                                    @endif
                                  @endforeach
                            </select>

                              @if ($errors->has('section_id'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('section_id') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      @endif

                      @if($section->id == 4)
                        <div class="form-group{{ $errors->has('section_id') ? ' has-error' : '' }}">
                            <label for="section_id" class="col-md-4 control-label">Temporada</label>
                            <div class="col-md-6">
                              <select class="form-control" name="section_id" required>
                                  <option value="0">Elegir...</option>
                                    @foreach($subSections as $section)
                                      @if($section->id == $content->section->id)
                                        <option value="{{ $section->id }}" selected>{{ $section->name }}</option>
                                      @else
                                        <option value="{{ $section->id }}">{{ $section->name }}</option>
                                      @endif
                                    @endforeach
                              </select>

                                @if ($errors->has('section_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('section_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('videotype_id') ? ' has-error' : '' }}">
                            <label for="videotype_id" class="col-md-4 control-label">Tipo de Video</label>
                            <div class="col-md-6">
                                <select class="form-control" name="videotype_id" required>
                                    <option value="0">Elegir...</option>
                                      @foreach($videoTypes as $videoType)
                                        @if($videoType->id == $content->videotype_id)
                                          <option value="{{ $videoType->id }}" selected>{{ $videoType->name }}</option>
                                        @else
                                          <option value="{{ $videoType->id }}">{{ $videoType->name }}</option>
                                        @endif
                                      @endforeach
                                </select>

                                @if ($errors->has('videotype_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('videotype_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('video_id') ? ' has-error' : '' }}">
                            <label for="video_id" class="col-md-4 control-label">Video ID</label>
                            <div class="col-md-6">
                                <input id="video_id" type="text" class="form-control video_id" name="video_id"
                                  @if(old('video_id'))
                                    value="{{ old('video_id') }}"
                                  @else
                                    value="{{ $content->video_id }}"
                                  @endif
                                required>
                                @if ($errors->has('video_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('video_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('reference') ? ' has-error' : '' }}">
                            <label for="reference" class="col-md-4 control-label">Programa N°: </label>
                            <div class="col-md-6">
                                <input id="reference" type="text" class="form-control" name="reference" value="{{ $content->reference }}"  required>
                                @if ($errors->has('reference'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('reference') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      @endif

                      <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                          <label for="title" class="col-md-4 control-label">Título</label>
                          <div class="col-md-6">
                              <input id="title" type="text" class="form-control title" name="title"
                                @if(old('title'))
                                  value="{{ old('title') }}"
                                @else
                                  value="{{ $content->title }}"
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
                              <input id="html_title" type="text" class="form-control title" name="html_title"
                                @if(old('html_title'))
                                  value="{{ old('html_title') }}"
                                @else
                                  value="{{ $content->html_title }}"
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
                              <input id="url" type="text" class="form-control url" name="url"
                                @if(old('title'))
                                  value="{{ old('url') }}"
                                @else
                                  value="{{ $content->url }}"
                                @endif
                              required>

                              @if ($errors->has('url'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('url') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('social_desc') ? ' has-error' : '' }}">
                          <label for="social_desc" class="col-md-4 control-label">Desc. Social</label>

                          <div class="col-md-6">
                              @if(old('description'))
                                <textarea rows="3" id="description" class="form-control" name="social_desc" required/>{{ old('social_desc') }}</textarea>
                              @else
                                <textarea rows="3"  id="description" class="form-control" name="social_desc" required/>{{ $content->social_desc }}</textarea>
                              @endif
                              @if ($errors->has('social_desc'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('social_desc') }}</strong>
                                  </span>
                              @endif
                              <div class="social-helper">
                                <strong><span class="social-count"></span> caracteres</strong>
                                <span> - Se recomienda no más de <strong>150</strong> caracteres (facebook)</span>
                              </div>
                          </div>
                      </div>

                      <hr />
                        <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                            <label for="text" class="col-md-2 control-label">Texto</label>

                            <div class="col-md-8">
                                @if(old('text'))
                                  <textarea id="text" class="form-control text" name="text" />{!! old('text') !!}</textarea>
                                @else
                                  <textarea id="text" class="form-control text" name="text" />{!! $content->text !!}</textarea>
                                @endif

                                @if ($errors->has('text'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      <hr />

                      <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
                          <label for="tags" class="col-md-4 control-label">Tags</label>
                          <div class="col-md-6">
                              <select class="form-control tags" name="tags[]" multiple="multiple" required>
                                <option value="0">Elegir...</option>
                                @foreach($tags as $tag)
                                  @if(old('tag_id') && old('tag_id') == $tag->id)
                                    <option value="{{ $tag->id }}" selected>{{ $tag->name }}</option>
                                  @else
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                  @endif
                                @endforeach
                              </select>

                              @if ($errors->has('tags'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('tags') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
                          <div for="tags" class="col-md-4 control-label"></div>
                          <div class="col-md-6">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-summary btn-sm" data-toggle="modal" data-target="#myModal">
                              Agregar Tag
                            </button>
                            <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Nuevo Tag</h4>
                                      </div>
                                      <div class="modal-body">
                                        <input type="text" class="form-control newTag" />
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-primary saveNewTag" data-dismiss="modal">Guardar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                          </div>
                      </div>

                      @if($section->id == 3)
                        <div class="form-group{{ $errors->has('author_id') ? ' has-error' : '' }}">
                            <label for="author_id" class="col-md-4 control-label">Autor</label>
                            <div class="col-md-6">
                                <select class="form-control" name="author_id" required>
                                  <option value="0">Elegir...</option>
                                    @foreach($authors as $author)
                                      @if($author->id == $content->author_id)
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
                      @endif

                      <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                          <label for="date" class="col-md-4 control-label">Fecha</label>
                          <div class="col-md-6">
                              <input id="date" type="date" class="form-control title" name="date"
                                @if(old('date'))
                                  value="{{ old('date') }}"
                                @else
                                  value="{{ $content->date }}"
                                @endif
                              required autofocus>
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
                                  Guardar
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
